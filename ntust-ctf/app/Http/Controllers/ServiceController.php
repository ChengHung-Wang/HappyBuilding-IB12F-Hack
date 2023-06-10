<?php

namespace App\Http\Controllers;

use App\Models\BlackLists;
use App\Models\Reserved;
use App\Models\Rooms;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ServiceController extends Controller
{
    public function get_reserved_password(string $id): JsonResponse
    {
        $result = DB::select("SELECT * FROM `reversed` WHERE `id` = " . $id);
        return $this->success([
            "password" => $result
        ]);
    }

    public function get_reserved_room(Request $request): JsonResponse
    {
        $this_user = auth()->user();
        return $this->success(DB::table('reversed')
            ->join('users', 'users.id', '=', 'reversed.user_id')
            ->join('rooms', 'rooms.id', '=', 'reversed.room_id')
            ->where("user_id", $this_user["id"])->orderBy("reversed.start_at")->orderBy("reversed.room_id")
            ->select([
                "reversed.*", "users.name as user_name", "rooms.name as room_name", "rooms.serial as room_serial"
            ])->get()->toArray());
    }

    public function get_reserved_room_by_date($y, $m, $d): JsonResponse
    {
        $date = Carbon::createFromDate($y, $m, $d);
        $date->setHour(0);
        $date->setMinute(0);
        $date->setSecond(0);
//        $data = DB::table("reversed")
//            ->whereDate("start_at", ">=", $date)
//            ->whereDate("end_at", "<=", $date)
//            ->join('rooms', 'rooms.id', '=', 'reversed.room_id')
//            ->select([
//                "reversed.*", "rooms.name as room_name", "rooms.serial as room_serial"
//            ])->get()->toArray();
//        $num = range(9, 21);
//        $data["status"] = [];
//        foreach (Rooms::get() as $room)
//        {
//            $data["status"][$room["serial"]] = [];
//            foreach ($num as $hour) {
//            }
//        }

        return $this->success(DB::table("reversed")
            ->whereDate("start_at", ">=", $date)
            ->whereDate("end_at", "<=", $date)
            ->join('rooms', 'rooms.id', '=', 'reversed.room_id')
            ->orderBy("reversed.start_at")->orderBy("reversed.room_id")
            ->select([
                "reversed.start_at", 'reversed.end_at', "rooms.name as room_name", "rooms.serial as room_serial"
            ])->get()->toArray());
    }

    public function get_all_reserved(): JsonResponse
    {
        return $this->success(DB::table('reversed')
            ->join('users', 'users.id', '=', 'reversed.user_id')
            ->join('rooms', 'rooms.id', '=', 'reversed.room_id')
            ->select([
                "reversed.start_at",
                "reversed.end_at",
                "reversed.for",
                "reversed.note",
                "users.name as user_name",
                "rooms.name as room_name",
                "rooms.serial as room_serial"
            ])->get()->toArray());
    }

    public function reserve_room(Request $request): JsonResponse
    {
        try {
            $data = $this->validate($request, [
                "room" => ['required'],
                "for" => ['required'],
                "start_at" => ['required', 'integer'],
                "end_at" => ['required', 'integer'],
                "date" => ['required', 'date']
            ]);
        } catch (ValidationException $e) {
            return $this->fail([
                "reason" => $e->getMessage()
            ], "ERR_MISSING_FIELD");
        }
        if (str_replace("alert", "", $request->get("for")) != $request->get("for")) {
            return $this->fail(message: "ERR_XSS_ATTACK");
        }
        if ((int)$request->get("start_at") < 9 || (int)$request->get("end_at") > 21) {
            return $this->fail(message: "ERR_TIME_NOT_VALID");
        }
        $start_at = Carbon::createFromFormat("Y-m-d", $request->get("date"));
        $end_at = Carbon::createFromFormat("Y-m-d", $request->get("date"));
        $start_at->setHours($request->get("start_at"));
        $end_at->setHours($request->get("end_at"));
        $start_at->setMinute(0);
        $end_at->setMinute(0);
        $start_at->setSecond(0);
        $end_at->setSecond(0);
        if ($start_at >= $end_at) {
            return $this->fail(message: "ERR_NOT_VALID_DATE");
        }
        // check room exists
        $room = Rooms::where("serial", $request->get("room"))->get();
        if (count($room) < 1) {
            return $this->fail([
                "reason" => "ERR_ROOM_NOT_EXISTS"
            ]);
        }
        if ((new Rooms())->is_reserve($room[0]->id, $start_at, $end_at)) {
            return $this->fail([
                "reason" => "ERR_DUPLICATED_TIME"
            ]);
        }
        Reserved::create([
            "user_id" => auth()->user()["id"],
            "room_id" => $room[0]->id,
            "start_at" => $start_at,
            "end_at" => $end_at,
            "for" => $request->get("for"),
            "note" => $request->get("note"),
            "password" => $this->generate_random_string(8)
        ]);
        return $this->success();
    }

    public function block_member(Request $request)
    {
//        dd($request->get("user_id"));
        try {
            $data = $this->validate($request, [
                "user_id" => ['required'],
                "reason" => ["required"]
            ]);
        } catch (ValidationException $e) {
            return $this->fail([
                "reason" => $e->getMessage()
            ], "ERR_MISSING_FIELD");
        }
        if (auth()->user()["id"] == $request->get("user_id")) return $this->fail(message: "ERR_SAME_USER");
        $block = User::find($request->get("user_id"));
        if (!isset($block["id"])) {
            return $this->fail([
                "reason" => "ERR_USER_NOT_EXISTS"
            ]);
        }
        $has_block = BlackLists::where("user_id", $request->get("user_id"))->count() > 1;
        if ($has_block) {
            BlackLists::where("user_id", $request->get("user_id"))->delete();
        } else {
            BlackLists::insert([
                "user_id" => $request->get("user_id"),
                "by_user_id" => auth()->user()["id"],
                "reason" => $request->get("reason"),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }
        return $this->success();
    }

    public function get_blocked_member(Request $request): JsonResponse
    {
        return $this->success(DB::table('black_list')->join("users", "users.id", "=", "black_list.user_id")
            ->select("black_list.*", "users.name as user_name")->get()->toArray());
    }

    public function cancel_reserve(int $id)
    {
        $this_reversed = Reserved::find($id);
        if (!isset($this_reversed["user_id"])) {
            return $this->fail([
                "reason" => "ERR_ID_NOT_EXISTS"
            ], status_code: 404);
        }
        $this_reversed->delete();
        return $this->success([
            "password" => $this_reversed["password"]
        ]);
    }

    private function generate_random_string(int $length = 10): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

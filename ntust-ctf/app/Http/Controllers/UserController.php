<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Js;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        try {
            $data = $this->validate($request, [
                "account" => ['required'],
                "password" => ['required']
            ]);
        } catch (ValidationException $e) {
            return $this->fail([
                "reason" => $e->getMessage()
            ], "ERR_MISSING_FIELD");
        }

        if (auth()->attempt($data)) {
            $user = $request->user();
            $token = $user->createToken('My Token');
            return $this->success([
                "user" => $request->user(),
                "token"  => $token->accessToken
            ]);
        }else {
            return $this->fail([], "ERR_PERMISSION_DENY", 401);
        }
    }

    public function logout(Request $request): JsonResponse
    {
//        dd(\auth()->user());
        Auth::user()->token()->revoke();
        return $this->success();
    }

    public function register(Request $request): JsonResponse
    {
        try {
            $data = $this->validate($request, [
                "account" => ['required', 'unique:users'],
                "password" => ['required'],
                "name" => ['required']
            ]);
            // https://laravel.com/docs/10.x/validation
        } catch (ValidationException $e) {
            return $this->fail([
                "reason" => $e->getMessage()
            ], "ERR_SOMETHING_WRONG");
        }
        try {
            DB::beginTransaction();
            $this_user = new User();
            $this_user->account = $data["account"];
            $this_user->password = $data["password"];
            $this_user->name = $data["name"];
            $this_user->created_at = Carbon::now();
            $this_user->updated_at = Carbon::now();
            $this_user->save();
            Auth::loginUsingId($this_user->id);
            $token = $request->user()->createToken("My Token");
            DB::commit();
            return $this->success([
                "user" => $data["name"],
                "token" => $token->accessToken
            ]);
        } catch (\Exception $exp) {
            DB::rollBack();
            return $this->fail("db error");
        }

    }

    // by @an-yang
    public function wang_zheng_hong(Request $request): JsonResponse
    {
        try {
            $data = $this->validate($request, [
                "p1" => ['required'],
                "p2" => ['required']
            ]);
        } catch (ValidationException $e) {
            return $this->fail([
                "reason" => $e->getMessage()
            ], "ERR_MISSING_FIELD");
        }
        $user = auth()->user();
        return $this->success([
            "user" => $user['name'],
            "hash" => Hash::make($user['name']),
            "message" => "WangZhengHong is a " . $data["p1"] . " and " . $data["p2"] . "."
        ]);
    }
}

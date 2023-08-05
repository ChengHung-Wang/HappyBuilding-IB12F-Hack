<?php


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return  new class extends Migration
{
    public function up(): void
    {
        $factories_data = (array)(config("factories"));

        /**
         * users table
         */
        if (!Schema::hasTable("users")) {
            Schema::create("users", function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->text("account");
                $table->text("name")->nullable();
                $table->longText("password");
                $table->integer("permission")->default(0);
                $table->longText("remember_token")->nullable();
                $table->timestamps();
            });

            // fill default data
            foreach ($factories_data["users"] as $user)
            {
                $this_user = new User();
                $this_user->account = $user["account"];
                $this_user->password = $user["password"] ?? $user["account"];
                $this_user->name = $user["name"];
                $this_user->permission = $user["permission"];
                $this_user->created_at = Carbon::now();
                $this_user->updated_at = Carbon::now();
                $this_user->save();
            }
        }

        if (!Schema::hasTable("rooms")) {
            Schema::create("rooms", function (Blueprint $table) {
               $table->id()->autoIncrement();
               $table->text("name");
               $table->text("serial")->nullable();
               $table->boolean("display")->default(true);
               $table->boolean("disabled")->default(false);
            });
            // fill default data
            foreach ($factories_data["rooms"] as $room)
            {
                DB::table("rooms")->insert([
                    "name" => $room["name"],
                    "serial" => $room["serial"],
                    "display" => $room["display"] ?? true,
                    "disabled" => $room["disabled"] ?? false
                ]);
            }
        }

        if (!Schema::hasTable("reversed")) {
            Schema::create("reversed", function (Blueprint $table) {
               $table->id()->autoIncrement();
               $table->foreignId("user_id")->constrained()
                   ->onDelete("cascade")->onUpdate("cascade");
               $table->foreignId("room_id")->constrained()
                   ->onDelete("cascade")->onUpdate("cascade");
               $table->longText("password");
               $table->dateTime("start_at");
               $table->dateTime("end_at");
                $table->longText("for")->nullable();
                $table->longText("note")->nullable();
            });
        }

        if (!Schema::hasTable("black_list")) {
            Schema::create("black_list", function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->foreignId("user_id")->constrained()
                    ->onDelete("cascade")->onUpdate("cascade");
                $table->unsignedBigInteger("by_user_id");
                $table->longText("reason")->nullable();
                $table->timestamps();
                $table->foreign("by_user_id")->references('id')->on('users');
            });
        }
    }

    public function down(): void
    {
        Schema::drop('black_lists');
        Schema::drop('reversed');
        Schema::drop('rooms');
        Schema::drop('users');
    }
};

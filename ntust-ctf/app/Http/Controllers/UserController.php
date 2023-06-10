<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
}

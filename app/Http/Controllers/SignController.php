<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SignController extends Controller
{
    public function register (Request $request) {
        if ($request->data['password'] === $request->data['confirmPassword']) {
            $user = User::create([
                'name' => $request->data["name"],
                'email' => $request->data["email"],
                'password' => Hash::make($request->data["password"])
            ]);
        }
        if (isset($user)) {
            return "success";
        }
        return "Something went wrong";
    }
}


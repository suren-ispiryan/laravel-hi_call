<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function getUsers () {
        $users = User::get();
        if ($users){
            return $users;
        }
        return "failure";
    }

    public function getAuthUser () {
        return Auth::user();
    }
}

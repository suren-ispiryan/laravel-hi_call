<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
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

    public function createMessage (Request $request) {
        $message = Message::create([
            'messages' => $request->data,
            'user_id' => Auth::user()->id
        ]);
        $m = Message::with('user')->where('messages', $request->data)->first();
        if ($message) {
            return $m;
        }
    }

    public function getMessages () {
        $allMessages = Message::with('user')->get();
        if ($allMessages) {
            return $allMessages;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class ChatController extends Controller
{
    //
    public function all_chats(){
        // return Chat::with('user')->orderBy('created_at','desc')->get();
        return Chat::with('user')->orderBy('created_at','desc')->take(10)->get();
    }
}

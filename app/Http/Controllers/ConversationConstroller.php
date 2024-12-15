<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// class ConversationConstroller extends Controller
// {
//     public function message()
//     {
//         return view('apps.acct');
//     }
//     public function show_message(Request $request)
//     {
//         $user = Auth::user();
//         if ($request->has('image')) {
//             $fileName = $request->file('image')->store('images');
//         }
//         $conversation = new Conversation();
//         $conversation->message = $request->message;
//         $conversation->sender_id = $request->user_id;
//         $conversation->receiver_id = $request->receiver_id;
//         $conversation->image = $fileName ?? null;
//         $conversation->save();

//         return redirect()->back();
//     }
//     public function loggin_page($id)
//     {
//         $user = Auth::user();

//         $conversation = new Conversation();
//         $conversation->message = $user->id;
//         $conversation->friend_id = $id;
//         return view('apps.chat');
//     }
// }

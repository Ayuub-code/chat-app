<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function message(Request $request, $id)
    {
        $user = Auth::user();

        $friend = User::query()
            ->where('id', $id)
            ->firstOrFail();

        $chats = Chat::query()
            ->where('friend_id', $id)
            ->where('user_id', $user->id)
            ->orWhere('friend_id', $user->id)
            ->where('user_id', $id)
            ->with(['friend'])
            ->get();

        return view('apps.acct', compact('chats'), [
            'friend_id' => $id,
            'friend' => $friend,
        ]);
    }
    public function Send_message(Request $request, $id)
    {
        $user = Auth::user();
        if ($request->has('image')) {
            $fileName = $request->file('image')->store('images');
        }
        $chat = new Chat();
        $chat->messages = $request->messages;
        $chat->user_id = $user->id;
        $chat->friend_id = $id;
        $chat->images = $fileName ?? null;
        $chat->save();
        return redirect()->back();
    }
    // public function loggin_page($id)
    // {
    //     $user = Auth::user();

    //     $chat = new Chat();
    //     $chat->message = $user->id;
    //     $chat->friend_id = $id;
    //     return view('apps.chat');
    // }
}

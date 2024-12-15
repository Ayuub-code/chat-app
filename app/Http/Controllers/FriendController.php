<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function add_friend()
    {
        $user = Auth::user();
        $friends = Friend::query()
            ->where('user_id', $user->id)
            ->get();
        return view('apps.friend', [
            'friend' => $friends
        ]);
    }
    public function addFriend($id)
    {
        $user = Auth::user();

        $friend = new Friend();
        $friend->user_id = $user->id;
        $friend->friend_id = $id;
        $friend->save();

        return redirect()->back();
    }
    //* friend list//
    public function display_allfriend()
    {
        $user = Auth::user();
        $friends = Friend::query()
            ->where('user_id', $user->id)
            ->with('user')
            ->get();
        return view('apps.allfriend', compact('friends'));
    }
}

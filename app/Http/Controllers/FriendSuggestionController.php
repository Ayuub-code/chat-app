<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FriendSuggestionController
{
    public function suggestions()
    {
        $user = Auth::user();
        $suggestions = DB::table('users')
            ->where('id', '!=', $user->id)
            ->inRandomOrder()
            ->get();
        // dd($suggestions);

        return view('friends.suggestions', compact('suggestions'));
    }

    public function addAsFriend(int $id)
    {
        $user = Auth::user();

        Friend::query()
            ->create([
                'user_id' => $user->id,
                'friend_id' => $id
            ]);

        return redirect()->back();
    }
}

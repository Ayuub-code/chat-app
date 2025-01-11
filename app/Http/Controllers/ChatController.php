<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Conversation;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function conversations()
    {
        $user = Auth::user();

        $conversations = Conversation::query()
            ->where('converser_1', $user->id)
            // ->orWhere('converser_2', $user->id)
            ->with(['converser1' => fn($query) => $query->withCount('unreadMessages'), 'converser2'])
            ->get();

        return view('apps.conversations', compact('conversations'), [
            'user' => $user,
        ]);
    }
}

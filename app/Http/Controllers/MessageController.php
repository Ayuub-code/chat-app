<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        $id = $request->friend ?? null;

        if (!$id) {
            abort(404);
        }

        $user = Auth::user();

        $conversation = Conversation::query()
            ->where('converser_1', $id)
            ->where('converser_2', $user->id)
            ->orWhere(function ($query) use ($id, $user) {
                $query->where('converser_2', $id)
                    ->where('converser_1', $user->id);
            })
            ->first();

        if (!$conversation) {
            $conversation = new Conversation();
            $conversation->converser_1 = $id;
            $conversation->converser_2 = $user->id;
            $conversation->save();
        }

        $converser1 = $conversation->converser_1;
        $converser2 = $conversation->converser_2;
        $receiver = User::query()
            ->where('id', $id)
            ->first();

        $messages = Message::query()
            ->where('sender_id', $user->id)
            ->where('receiver_id', $receiver->id)
            ->orWhere(function ($query) use ($receiver, $user) {
                $query->where('sender_id', $receiver->id)
                    ->where('receiver_id', $user->id);
            })
            ->with(['sender', 'receiver'])
            ->get();

        Message::query()
            ->where('read_at', null)
            ->where('receiver_id', $user->id)
            ->update(['read_at' => now()]);

        return view('apps.acct', compact('messages'), [
            'conversation' => $conversation,
            'receiver' => $receiver,
        ]);
    }

    public function store($id, Request $request)
    {
        $user = Auth::user();
        if ($request->has('image')) {
            $fileName = $request->file('image')->store('images');
        }

        $conversation = Conversation::query()
            ->firstOrCreate(
                ['converser_1' => $user->id],
                ['converser_2' => $id],
            );

        $message = new Message();
        $message->conversation_id = $conversation->id;
        $message->message = $request->messages;
        $message->sender_id = $user->id;
        $message->receiver_id = $id;
        $message->images = $fileName ?? null;
        $message->save();
        return redirect()->back();
    }
}

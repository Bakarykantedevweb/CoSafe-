<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewMessageNotification;
use App\Models\User;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::where('receiver_id', Auth::id())->latest()->get();
        return view('messages.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate(['message' => 'required']);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);
        $receiver = User::find($request->receiver_id);
        $receiver->notify(new NewMessageNotification($message));

        return back()->with('success', 'Message envoyé avec succès !');
    }
}

<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('messages.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $message = Message::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('messages.index');
    }
}
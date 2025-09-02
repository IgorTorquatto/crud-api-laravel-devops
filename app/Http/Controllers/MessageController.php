<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        return Message::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $message = Message::create([
            'content' => $request->content
        ]);

        return response()->json($message, 201);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('contact page/contact', [
            "pagetitle" => "Contact Us📞",
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('contact page/contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Message::create([
            'message_nama'=>$request->message_nama,
            'message_email'=>$request->message_email,
            'message_nomor_hp'=>$request->message_nomor_hp,
            'message_pesan'=>$request->message_pesan
        ]);

        return redirect()->route('contact')->with('status', 'message-sent');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}

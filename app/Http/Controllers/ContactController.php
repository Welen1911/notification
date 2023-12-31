<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Mail::to('welenalmeida2210@gmail.com', 'Welen')->send(new Contact([
            'fromName' => $request->name,
            'fromEmail' => $request->email,
            'fromSubject' => $request->subject,
            'fromMessage' => $request->message,
            'attachments' => $request->file('files'),
        ]));

        dd("Deu certo!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

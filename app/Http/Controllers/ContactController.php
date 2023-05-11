<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        // return 'Okey';
        // dd($req->input('subject'));
        // $validation = $req->validate([
        //     'subject' => 'required|min:5|max:50',
        //     'message' => 'required|min:15|max:500',
        // ]);
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Message was sent');
    }

    // public function allData()
    // {
    //     return view('messages', ['data' => Contact::all()]);
    // }
    public function allData()
{
    return view('messages', ['data' => Contact::orderByDesc('id')->take(2)->get()]);
    // return view('messages', ['data' => Contact::where('subject','=','hello !!!')->get()]);
}

}

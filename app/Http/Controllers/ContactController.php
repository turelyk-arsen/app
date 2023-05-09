<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit (ContactRequest $req) {
        // return 'Okey';
        // dd($req->input('subject'));
        // $validation = $req->validate([
        //     'subject' => 'required|min:5|max:50',
        //     'message' => 'required|min:15|max:500',
        // ]);
    }
}

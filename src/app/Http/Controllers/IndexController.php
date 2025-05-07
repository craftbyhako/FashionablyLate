<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $contact = $request->
        only(['first_name',
            'last_name',
            'gender',
            'email',
            'tel',
            'address',
            'building',
            'detail',]);

        Contact::create($contact);
         return view ('thanks');
    }
}

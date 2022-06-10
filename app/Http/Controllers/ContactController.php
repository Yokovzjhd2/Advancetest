<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|size:8',
            'address' => 'required',
            'opinion' => 'required|max:120',
        ]);

        $inputs = $request->all();

        return view('contact.confirm',[
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|size:8',
            'address' => 'required',
            'opinion' => 'required|max:120',
        ]);
        $action = $request->input('action');

        $inputs = $request->except('action');

        if($action !== 'submit'){
            return redirect()
            ->route('contact.index')
            ->withInput($inputs);

        return view('contact.thanks');
        }
    }
}

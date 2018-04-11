<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except'=> ['destroy']]);
    }

    public function create()
    {
        return view('sessions.create');
    }


    // Attempt to authenticate a user
    public function store(){
        if(auth()->attempt(request(['email', 'password']))){
           return redirect('/');
        }else{
            return back();
        }
    }


    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}

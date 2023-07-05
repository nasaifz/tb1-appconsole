<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('page.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}

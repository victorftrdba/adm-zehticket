<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function authenticate(Request $request)
    {
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if (Auth::guard('promoters')->attempt($credentials)):
            return redirect()->route('admin.home.index');
        endif;

        return back();
    }
}
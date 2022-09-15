<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('welcome');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if (Auth::guard('promoters')->attempt($credentials)) {
            return redirect()->route('admin.home.index');
        }

        return back();
    }
}

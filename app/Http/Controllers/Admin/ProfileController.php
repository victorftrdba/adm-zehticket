<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function update(ProfileRequest $request)
    {
        $data = $request->validated();

        if ($data['password'] !== $data['confirm_password']) {
            return back()->withErrors('As senhas não coincidem.');
        }

        Auth::user()->update([
            'name' => $data['name'],
            'password' => $data['password'] ? bcrypt($data['password']) : Auth::user()->password,
        ]);

        return redirect()->route('admin.profile.index')
            ->with('message', 'Perfil atualizado com sucesso.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }
}

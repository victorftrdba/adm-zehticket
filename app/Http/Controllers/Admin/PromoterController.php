<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Promoter\PromoterRequest;
use App\Models\Promoter;
use Illuminate\Http\Request;

class PromoterController extends Controller
{
    public function index()
    {
        $promoters = Promoter::orderBy('updated_at', 'DESC')->paginate(15)->toArray();
        return view('admin.promoters.index', compact('promoters'));
    }

    public function create()
    {
        return view('admin.promoters.create');
    }

    public function store(PromoterRequest $request)
    {
        $data = $request->validated();

        if ($data['password'] !== $data['confirm_password']) {
            return back()->withErrors('As senhas não coincidem.');
        }

        Promoter::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'is_admin' => $data['is_admin'],
            'cpf_cnpj' => $data['cpf_cnpj'],
        ]);

        return redirect()->route('admin.promoters.index')
            ->with('message', 'Promotor criado com sucesso.');
    }

    public function edit(Request $request, $id)
    {
        $promoter = Promoter::find($id);
        return view('admin.promoters.edit', compact('promoter'));
    }

    public function update(PromoterRequest $request, $id)
    {
        $data = $request->validated();

        if ($data['password'] !== $data['confirm_password']) {
            return back()->withErrors('As senhas não coincidem.');
        }

        $promoter = Promoter::find($id);

        $promoter->update([
            'name' => $data['name'],
            'password' => bcrypt($data['password']) ?? $promoter->password,
            'is_admin' => $data['is_admin'],
            'cpf_cnpj' => $data['cpf_cnpj'],
        ]);

        return redirect()->route('admin.promoters.index')
            ->with('message', 'Promotor atualizado com sucesso.');
    }
}

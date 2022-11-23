@extends('admin.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="row mt-5" method="POST" action="{{route('admin.promoters.store')}}">
                @csrf
                @METHOD('POST')
                <div class="col-6 mt-3">
                    <label for="name">Nome</label>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}">
                </div>
                <div class="col-6 mt-3 mb-3">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email"value="{{old('email')}}">
                </div>
                <div class="col-6 mt-3 mb-3">
                    <label for="email">CPF/CNPJ</label>
                    <input class="form-control" type="number" name="cpf_cnpj" value="{{old('cpf_cnpj')}}">
                </div>
                <div class="col-6 mt-3">
                    <label for="name">Senha</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="col-6 mt-3">
                    <label for="name">Confirme a senha</label>
                    <input class="form-control" type="password" name="confirm_password">
                </div>
                <div class="col-6 mt-3">
                    <label for="name">É administrador?</label>
                    <input class="form-check-input ms-3" type="radio" name="is_admin" value="1" /> Sim
                    <input class="form-check-input ms-3" type="radio" name="is_admin" value="0"/> Não
                </div>
                <div class="col d-flex justify-content-end align-content-center">
                    <div class="mt-3">
                        <a href="{{route('admin.promoters.index')}}" class="btn btn-secondary rounded-0 me-1">Cancelar</a>
                        <button class="btn btn-primary rounded-0">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('admin.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center fw-bold mt-3">
                Meu perfil
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="row" method="POST" action="{{route('admin.profile.update')}}">
                @csrf
                @METHOD('PATCH')
                <div class="col-6 mt-3">
                    <label for="name">Nome</label>
                    <input class="form-control" type="text" name="name" value="{{auth()->user()->name}}">
                </div>
                <div class="col-6 mt-3 mb-3">
                    <label for="email">E-mail</label>
                    <input class="form-control" readonly type="email" name="email" value="{{auth()->user()->email}}">
                </div>
                <div class="col-6 mt-3">
                    <label for="name">Senha</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="col-6 mt-3">
                    <label for="name">Confirme a nova senha</label>
                    <input class="form-control" type="password" name="confirm_password">
                </div>
                <div class="col d-flex justify-content-end align-content-center">
                    <div>
                        <button class="mt-3 btn btn-primary rounded-0">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

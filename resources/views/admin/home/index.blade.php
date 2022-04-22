@extends('admin.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center fw-bold mt-3">
                Bem-vindo, {{ ucwords(Auth::user()->name) }}
            </div>
        </div>
    </div>
@endsection

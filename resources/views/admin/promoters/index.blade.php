@extends('admin.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <a href="{{route('admin.promoters.create')}}" class="btn btn-primary rounded-0">
                    Novo promotor
                </a>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session()->get('message') }}
                </div>
            @endif
            @forelse ($promoters['data'] as $promoter)
                <div class="col-4 mt-4">
                    <div class="card event-card" style="width: 22rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase fw-bold">{{ $promoter['name'] }}</h5>
                            <p class="card-subtitle mb-3">{{ $promoter['email'] }}</p>
                            <a href="{{route('admin.promoters.edit', $promoter['id'])}}" class="btn btn-success rounded-0">Editar promotor</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger mt-3">
                    Nenhum promotor encontrado no sistema.
                </div>
            @endforelse
        </div>
    </div>
@endsection

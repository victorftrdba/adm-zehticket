@extends('admin.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <a href="{{route('admin.event.create')}}" class="btn btn-primary rounded-0">
                    Novo evento
                </a>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session()->get('message') }}
                </div>
            @endif
            @forelse ($events as $event)
                <div class="col-4 mt-4">
                    <div class="card event-card" style="width: 22rem;">
                        <img src="{{asset('storage/'.$event['image'])}}" class="card-img-top" alt="{{$event['title']}}">
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase fw-bold">{{ $event['title'] }}</h5>
                            <a href="{{route('admin.event.show', $event['id'])}}" class="btn btn-primary rounded-0">Ver evento</a>
                            <a href="{{route('admin.event.edit', $event['id'])}}" class="btn btn-primary rounded-0">Editar evento</a>
                            @if (auth()->user()->is_admin)
                            <form action="{{route('admin.event.destroy', $event['id'])}}" method='POST'>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger rounded-0 mt-3">Excluir evento</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger mt-3">
                    Nenhum evento encontrado no sistema.
                </div>
            @endforelse
        </div>
    </div>
@endsection

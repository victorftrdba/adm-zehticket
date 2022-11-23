@extends('admin.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <div class="pb-5">
                    <img height="380" width="650" class="event-image"
                     src="{{asset('storage/'.$event['image'])}}" alt="{{$event['title']}}">
                    <h1 class="fw-bold pt-5 text-uppercase">{{$event['title']}}</h1>
                    <p>
                        {!! $event['description'] !!}
                    </p>
                    <p>
                        Data do Evento: {{\Carbon\Carbon::parse($event['date'])->format('d/m/Y H:i')}}
                    </p>
                </div>
                <h2 class="fw-bold text-uppercase">Ingressos</h2>
                <div class="row mt-3">
                @forelse($tickets as $key => $ticket)
                        <div class="col-4 mb-3">
                            <h4 class="fw-bold">Ingresso {{$key + 1}}</h2>
                            <p class="mb-0">Descrição: {{$ticket['description']}}</p>
                            <p class="mb-0">Quantidade: {{$ticket['amount']}}</p>
                            <p>Valor: R${{str_replace('.', ',', $ticket['value'])}}</p>
                        </div>
                @empty
                    <div class="alert alert-danger mt-3">
                        Nenhum ingresso encontrado para o show selecionado.
                    </div>
                @endforelse
                </div>
            </div>
        </div>
    </div>

@endsection

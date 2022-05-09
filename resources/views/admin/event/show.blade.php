@extends('admin.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <img height="380" width="650"
                     src="{{asset('storage/'.$event['image'])}}" alt="{{$event['title']}}">
                <h1 class="fw-bold text-uppercase">{{$event['title']}}</h1>
                <p>
                    {{$event['description']}}
                </p>
                <p>
                    Data do Evento: {{\Carbon\Carbon::parse($event['date'])->format('d/m/Y')}}
                </p>
                <h2 class="fw-bold text-uppercase">Ingressos</h2>
                <div class="row mt-3">
                @forelse($tickets as $ticket)
                        <div class="col-4 mb-3">
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

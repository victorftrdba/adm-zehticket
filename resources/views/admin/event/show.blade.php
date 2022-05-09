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
            </div>
        </div>
    </div>

@endsection

@extends('admin.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <form action="{{route('admin.event.update', $event['id'])}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="col-12">
                        <label for="title">Título do Evento</label>
                        <input type="text" name="title" value="{{$event['title']}}" class="form-control" id="title" />
                    </div>
                    <div class="col-12 mt-3">
                        <label for="address">Endereço do Evento</label>
                        <input type="text" name="address" value="{{$event['address']}}" class="form-control" id="address" />
                    </div>
                    <div class="col-12 mt-3">
                        <label for="description">Descrição do Evento</label>
                        <textarea name="description" id="description" class="form-control" cols="20" rows="10">{{$event['description']}}</textarea>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="image">Imagem do Evento</label>
                            <input type="file" name="image" value="{{$event['image']}}" class="form-control" id="image" />
                        </div>
                        <div class="col-4">
                            <label for="date">Data do Evento</label>
                            <input type="text" disabled value="{{\Carbon\Carbon::parse($event['date'])->format('d/m/Y')}}" class="form-control" id="date" />
                        </div>
                        <div class="col-4">
                            <label for="expires">Date de Expiração do Evento</label>
                            <input type="text" disabled value="{{\Carbon\Carbon::parse($event['expires'])->format('d/m/Y')}}" class="form-control" id="expires" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center mt-3">
                        <a href="{{route('admin.event.index')}}" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancelar</a>
                        <button type="submit" class="btn btn-primary rounded-0 ms-2">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

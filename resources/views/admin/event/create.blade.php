@extends('admin.layout.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-uppercase fw-bold">Novo evento</h1>
                <form action="{{route('admin.event.store')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="col-12">
                        <label for="title">Título do Evento</label>
                        <input type="text" name="title" class="form-control" id="title" />
                    </div>
                    <div class="col-12 mt-3">
                        <label for="address">Endereço do Evento</label>
                        <input type="text" name="address" class="form-control" id="address" />
                    </div>
                    <div class="col-12 mt-3">
                        <label for="description">Descrição do Evento</label>
                        <textarea name="description" id="description" class="form-control" cols="20" rows="10"></textarea>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <label for="image">Imagem do Evento</label>
                            <input type="file" name="image" class="form-control" id="image" />
                        </div>
                        <div class="col-4">
                            <label for="date">Data do Evento</label>
                            <input type="datetime-local" name="date" class="form-control" id="date" />
                        </div>
                        <div class="col-4">
                            <label for="expires">Data de Expiração do Evento</label>
                            <input type="date" name="expires" class="form-control" id="expires" />
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <h2>Ingressos</h2>
                        <button class="btn btn-primary rounded-0" type="button" id="btnAddMore">Adicionar mais</button>
                        <div class="row mt-3 justify-content-center align-items-center" id="ticket">
                            <div class="mb-3 px-5" style="width:75%">
                                    <label for="ticket">Ingresso</label>
                                    <input type="text" class="form-control mb-2" placeholder="Descrição do Ingresso" name="ticket['description'][]" />
                                    <input type="number" class="form-control mb-2" placeholder="Quantidade de Ingressos" name="ticket['amount'][]" />
                                    <input type="number" step='0.01' class="form-control" placeholder="Valor do Ingresso" name="ticket['value'][]" />
                                    <input type="number" class="form-control" placeholder="Fator de multiplicação do Ingresso" name="ticket['factor'][]" />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center mt-3">
                        <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary rounded-0 ms-2">Criar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

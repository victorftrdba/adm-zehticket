@extends('admin.layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Novo evento
                </button>
            </div>
            @for ($i = 0; $i < 9; $i++)
                <div class="col-4 mt-4">
                    <div class="card" style="width: 22rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Evento {{ $i }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Criar novo evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="col-12">
                            <label for="title">Título do Evento</label>
                            <input type="text" name="title" class="form-control" id="title" />
                        </div>
                        <div class="col-12">
                            <label for="description">Descrição do Evento</label>
                            <textarea name="description" id="description" class="form-control" cols="20" rows="10"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="value">Valor do Evento</label>
                                <input type="text" name="value" class="form-control" id="value" />
                            </div>
                            <div class="col-6">
                                <label for="image">Imagem do Evento</label>
                                <input type="file" name="image" class="form-control" id="image" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="date">Data do Evento</label>
                                <input type="date" name="date" class="form-control" id="date" />
                            </div>
                            <div class="col-4">
                                <label for="expires">Date de Expiração do Evento</label>
                                <input type="date" name="expires" class="form-control" id="expires" />
                            </div>
                            <div class="col-4">
                                <label for="amount">Quantidade de Ingressos</label>
                                <input type="number" name="amount" class="form-control" id="amount" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Criar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
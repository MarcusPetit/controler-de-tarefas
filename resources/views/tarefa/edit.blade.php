@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Tarefa</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('tarefa.update', ['tarefa' => $tarefa->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tarefa</label>
                                <input type="text" class="form-control" name="tarefa" aria-describedby="emailHelp"
                                    value="{{ $tarefa->tarefa }}">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Data Limit conclusão</label>
                                <input type="date" class="form-control" id="exampleInputPassword1"
                                    name="data_limite_conclusao" value="{{ $tarefa->data_limite_conclusao }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

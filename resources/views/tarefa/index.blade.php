@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de tarefas</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col">Data limite conclusão</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefas as $tarefa)
                                <tr>
                                    <th scope="row">{{ $tarefa->user_id }}</th>
                                    <td>{{ $tarefa->tarefa }}</td>
                                    <td>{{ date('d/m/y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                                    <td> <a href="{{ route('tarefa.edit', $tarefa->id) }}">Editar</a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="{{ $tarefas->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">Voltar</span>
                                </a>
                            </li>
                            @for ($i = 1; $i < $tarefas->lastPage(); $i++)
                                <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : '' }}"><a
                                        class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a></li>
                            @endfor
                            <li class="page-item">
                                <a class="page-link" href="{{ $tarefas->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">Avançar</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

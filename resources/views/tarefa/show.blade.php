@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $tarefa->tarefa }}</div>

                    <div class="card-body">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Data Limit conclusão</label>
                                <input type="date" class="form-control" id="exampleInputPassword1"
                                    value="{{ $tarefa->data_limite_conclusao }}">
                            </div>
                        </fieldset>
                        <a href="{{ url()->previous() }}" type="submit" class="btn btn-primary">Voltar</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

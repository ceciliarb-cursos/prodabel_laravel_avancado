@extends('layouts.app')

@section('title', 'Cadastra')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Time</div>

                <div class="card-body">
                    <form method="POST">
                        <div class="row">
                            <div class="col-2">
                                <label for="nome">Nome:</label>
                            </div>
                            <div class="col">
                                <input type="text" 
                                       name="nome" 
                                       id="nome" 
                                       value="{{ $time->nome }}"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="mascote">Mascote:</label>
                            </div>
                            <div class="col">
                                <input type="text" 
                                       name="mascote" 
                                       id="mascote" 
                                       value="{{ $time->mascote }}"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="fundado_em">Data da fundação:</label>
                            </div>
                            <div class="col">
                                <input type="date" 
                                       name="fundado_em" 
                                       id="fundado_em" 
                                       value="{{ $time->fundado_em }}"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <label for="created_at">Data de criação:</label>
                            </div>
                            <div class="col">
                                <input type="text" 
                                       id="created_at" 
                                       value="{{ $time->created_at }}"
                                       readonly class="form-control">
                            </div>
                            <div class="col-2">
                                <label for="updated_at">Data de alteração:</label>
                            </div>
                            <div class="col">
                                <input type="text" 
                                       id="updated_at" 
                                       readonly 
                                       value="{{ $time->updated_at }}"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="submit" value="Gravar" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <a href="{{ url('/times/') }}"><< Voltar</a>
        </div>
    </div>
@endsection
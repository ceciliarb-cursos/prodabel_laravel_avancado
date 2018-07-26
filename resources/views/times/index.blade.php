@extends('layouts.app')

@section('title', 'Times')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Times</div>
    
                    <div class="card-body">
                        <div class="pb-3">
                            <form action="" method="get">
                                <div class="row">
                                    <div class="col-sm-2"><label for="nome">Nome:</label></div>
                                    <div class="col"><input type="text" name="nome" id="nome" class="form-control" value="{{ $pesquisa }}"></div>
                                    <div class="col-sm-3"><input type="submit" value="Pesquisar" class="btn btn-primary"></div>
                                </div>
                            </form>
                        </div>

                        <table class="table table-bordered table-hover">
                                <tr class="thead-white">
                                    <th>id</th>
                                    <th>Nome</th>
                                    <th>Mascote</th>
                                    <th>Fundado em</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($times as $time)
                                    <tr>
                                        <td>{{ $time->id }}</td>
                                        <td><a href="{{ url('time/'.$time->id) }}"> {{ $time->nome }} </a></td>
                                        <td>{{ $time->mascote }}</td>
                                        <td>{{ $time->fundado_em }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">Nao existem registros</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $times->links() }}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
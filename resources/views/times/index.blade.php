@extends('layouts.app')

@section('title', 'Times')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Times</div>
    
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                                <tr class="thead-dark">
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
                                        <td>{{ $time->nome }}</td>
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
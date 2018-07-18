@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                        <p>
                            <a href="{{ url('/times') }}">Times</a>
                        </p>
                        <p>
                            <a href="{{ url('/figurinhas') }}">Figurinhas</a>
                        </p>
    
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

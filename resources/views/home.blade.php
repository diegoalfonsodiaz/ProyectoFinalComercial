@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ingresó credenciales validas

                    
                        <a class="nav-link" href="{{route('cliente.index')}}">Cliente</a>
                     
                      
                        <a class="nav-link" href="{{route('combo.index')}}">Combos</a>
                     
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

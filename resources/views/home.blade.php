@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mensajito bonito</div>

                <div class="panel-body">
                    <b>Has ingresado como:</b>
                    @if(\Auth::user()->type_user_id == 3)
                        Administrador
                    @endif
                    @if(\Auth::user()->type_user_id == 1)
                        Un usuario normal y sin esperanzas de vida, aun asi... Debes crear tu perfil
                        <a href="{{ url('/people/create') }}">Perfil</a>
                    @endif
                    @if(\Auth::user()->type_user_id == 2)
                        Una buena persona que enriquece a los administradores
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $jugador->name ?? __('show') . " " . __('Jugador') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('show') }} Jugador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('jugadors.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $jugador->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $jugador->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Año:</strong>
                                    {{ $jugador->fecha_nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Aforo:</strong>
                                    {{ $jugador->posicion }}
                                </div>
                                

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? __('show') . " " . __('Equipo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('show') }} Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('equipos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $equipo->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $equipo->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Año:</strong>
                                    {{ $equipo->año }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Aforo:</strong>
                                    {{ $equipo->aforo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estadio:</strong>
                                    {{ $equipo->estadio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ciudad:</strong>
                                    {{ $equipo->ciudad }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

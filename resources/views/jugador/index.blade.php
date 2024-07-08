
@extends('layouts.app')

@section('template_title')
    Jugador
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Jugador') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('jugadors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>Posición</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jugadors as $jugador)
                                        <tr>
                                           
                                            <td>{{ $jugador->codigo }}</td>
                                            <td>{{ $jugador->nombre }}</td>
                                            <td>{{ $jugador->fecha_nac }}</td>
                                            <td>{{ $jugador->posicion }}</td>
                                                                                  

                                            <td>
                                                <form action="{{ route('equipos.destroy', $jugador->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('jugadors.show', $jugador->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('jugadors.edit', $jugador->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Seguro que deseas eliminarlo?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $jugadors->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

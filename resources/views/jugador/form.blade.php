<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="equipo" class="form-label">{{ __('Equipo (Código)') }}</label>
            <select class="form-control" name="equipo_id" id="equipo">
                @foreach ($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->codigo}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Codigo') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $jugador?->codigo) }}" id="codigo" placeholder="codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $jugador?->nombre) }}" id="nombre" placeholder="nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nac" class="form-label">{{ __('fecha_nac') }}</label>
            <input type="date" name="fecha_nac" class="form-control @error('fecha_nac') is-invalid @enderror" value="{{ old('fecha_nac', $jugador?->fecha_nac) }}" id="fecha_nac" placeholder="fecha_nac">
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="posicion" class="form-label">{{ __('Posicion') }}</label>
            <input type="text" name="posicion" class="form-control @error('posicion') is-invalid @enderror" value="{{ old('posicion', $jugador?->posicion) }}" id="posicion" placeholder="posicion">
            {!! $errors->first('posicion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
       

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar Datos') }}</button>
    </div>
</div>
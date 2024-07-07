<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Codigo') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $equipo?->codigo) }}" id="codigo" placeholder="codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $equipo?->nombre) }}" id="nombre" placeholder="nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="año" class="form-label">{{ __('Año') }}</label>
            <input type="text" name="año" class="form-control @error('año') is-invalid @enderror" value="{{ old('año', $equipo?->año) }}" id="año" placeholder="año">
            {!! $errors->first('año', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="aforo" class="form-label">{{ __('Aforo') }}</label>
            <input type="number" min="1" name="aforo" class="form-control @error('aforo') is-invalid @enderror" value="{{ old('aforo', $equipo?->aforo) }}" id="aforo" placeholder="aforo">
            {!! $errors->first('aforo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estadio" class="form-label">{{ __('Estadio') }}</label>
            <input type="text" name="estadio" class="form-control @error('estadio') is-invalid @enderror" value="{{ old('estadio', $equipo?->estadio) }}" id="estadio" placeholder="estadio">
            {!! $errors->first('estadio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciudad" class="form-label">{{ __('Ciudad') }}</label>
            <input type="text" name="ciudad" class="form-control @error('ciudad') is-invalid @enderror" value="{{ old('ciudad', $equipo?->ciudad) }}" id="ciudad" placeholder="ciudad">
            {!! $errors->first('ciudad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar Datos') }}</button>
    </div>
</div>
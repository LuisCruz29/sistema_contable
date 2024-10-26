@section('title')
    Agregar Cuenta
@endsection
<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="nombre_cuenta" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombreCuenta" class="form-control @error('nombreCuenta') is-invalid @enderror" value="{{ old('nombreCuenta', $cuenta?->nombreCuenta) }}" id="nombre_cuenta" placeholder="Nombre Cuenta">
            {!! $errors->first('nombreCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripicon" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripicion" class="form-control @error('descripicion') is-invalid @enderror" value="{{ old('descripicion', $cuenta?->descripicion) }}" id="descripcion" placeholder="Descripicion">
            {!! $errors->first('descripicion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label ">{{ __('Tipo') }}</label>
            <select id="tipo" class="form-select @error('tipo') is-invalid @enderror" name="tipo" value="{{ old('tipo', $cuenta?->tipo) }}">
                <option>Activo</option>
                <option>Contra Activo</option>
                <option>Pasivo</option>
                <option>Capital</option>
                <option>Ingresos</option>
                <option>Gastos</option>
            </select>
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> 
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
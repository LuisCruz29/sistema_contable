<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_cuenta" class="form-label">{{ __('Nombre Cuenta') }}</label>
            <input type="text" name="nombreCuenta" class="form-control @error('nombreCuenta') is-invalid @enderror" value="{{ old('nombreCuenta', $cuenta?->nombreCuenta) }}" id="nombre_cuenta" placeholder="Nombre Cuenta">
            {!! $errors->first('nombreCuenta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $cuenta?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label ">{{ __('Tipo') }}</label>
            <select id="tipo" class="form-select @error('tipo') is-invalid @enderror" name="tipo">
                <option {{ old('tipo', $cuenta?->tipo) == 'Activo' ? 'selected' : '' }}>Activo</option>
                <option {{ old('tipo', $cuenta?->tipo) == 'Contra Activo' ? 'selected' : '' }}>Contra Activo</option>
                <option {{ old('tipo', $cuenta?->tipo) == 'Pasivo' ? 'selected' : '' }}>Pasivo</option>
                <option {{ old('tipo', $cuenta?->tipo) == 'Capital' ? 'selected' : '' }}>Capital</option>
                <option {{ old('tipo', $cuenta?->tipo) == 'Ingresos' ? 'selected' : '' }}>Ingresos</option>
                <option {{ old('tipo', $cuenta?->tipo) == 'Gastos' ? 'selected' : '' }}>Gastos</option>
            </select>
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> 

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <a href="{{route('tbl-cuentas.index')}}" class="btn btn-primary">Cancelar</a>
    </div>
</div>
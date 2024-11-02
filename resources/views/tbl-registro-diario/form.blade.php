<div class="row padding-1 p-1">
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="codigo_transaccion" class="form-label">{{ __('Codigotransaccion') }}</label>
            <input type="text" name="codigoTransaccion" class="form-control @error('codigoTransaccion') is-invalid @enderror" value="{{ old('codigoTransaccion', $tblRegistroDiario?->codigoTransaccion) }}" id="codigo_transaccion" placeholder="Codigotransaccion">
            {!! $errors->first('codigoTransaccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="cuenta_id" class="form-label">{{ __('Cuenta Id') }}</label>
            <input type="text" name="cuenta_id" class="form-control @error('cuenta_id') is-invalid @enderror" value="{{ old('cuenta_id', $tblRegistroDiario?->cuenta_id) }}" id="cuenta_id" placeholder="Cuenta Id">
            {!! $errors->first('cuenta_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $tblRegistroDiario?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
</div>

<div class="row padding-1 p-1">
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="debe" class="form-label">{{ __('Debe') }}</label>
            <input type="text" name="debe" class="form-control @error('debe') is-invalid @enderror" value="{{ old('debe', $tblRegistroDiario?->debe) }}" id="debe" placeholder="Debe">
            {!! $errors->first('debe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="haber" class="form-label">{{ __('Haber') }}</label>
            <input type="text" name="haber" class="form-control @error('haber') is-invalid @enderror" value="{{ old('haber', $tblRegistroDiario?->haber) }}" id="haber" placeholder="Haber">
            {!! $errors->first('haber', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $tblRegistroDiario?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
</div>

<div class="row padding-1 p-1">
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $tblRegistroDiario?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

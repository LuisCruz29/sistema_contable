<div class="row padding-1 p-1">
  
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="codigo_transaccion" class="form-label">{{ __('Codigo Transaccion') }}</label>
            <input type="text"  class="form-control @error('codigoTransaccion') is-invalid @enderror" value="{{ old('codigoTransaccion', session('user')->maxCodigoRegistro()) }}" id="codigo" disabled >
            <input type="text" name="codigoTransaccion" class="form-control @error('codigoTransaccion') is-invalid @enderror" value="{{ old('codigoTransaccion', session('user')->maxCodigoRegistro()) }}" id="codigo_transaccion" hidden>
            {!! $errors->first('codigoTransaccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="cuenta_id" class="form-label">{{ __('Cuenta') }}</label>
            <select name="cuenta_id" id="cuenta_id"  class="form-select @error('cuenta_id') is-invalid @enderror">
                    @foreach($cuentas as $cuenta)
                        <option value="{{ $cuenta->id }}" {{ old('cuenta_id', $tblRegistroDiario?->cuenta_id) == $cuenta->id ? 'selected' : '' }}>
                            {{ $cuenta->nombreCuenta }}
                        </option>
                    @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="user" class="form-label">{{ __('User') }}</label>
            <input type="text"  class="form-control @error('user_id') is-invalid @enderror" value="{{ old(session('user')->nombreEmpleado.' '.session('user')->apellidoEmpleado, session('user')->nombreEmpleado.' '.session('user')->apellidoEmpleado) }}" id="user">
            
        </div>
    </div>
</div>

<div class="row padding-1 p-1">
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="debe" class="form-label">{{ __('Debe') }}</label>
            <input type="number" step="0.00"  class="form-control @error('debe') is-invalid @enderror" value="{{ old('debe', $tblRegistroDiario?->debe) }}" id="debe" placeholder="Debe">
            {!! $errors->first('debe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="haber" class="form-label">{{ __('Haber') }}</label>
            <input type="number" step="0.00"  class="form-control @error('haber') is-invalid @enderror" value="{{ old('haber', $tblRegistroDiario?->haber) }}" id="haber"  placeholder="Haber">
            {!! $errors->first('haber', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $tblRegistroDiario?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
</div>

<div class="row padding-1 p-1">
    <div class="col-md-4">
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $tblRegistroDiario?->fecha) }}" id="fecha" >
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
</div>


<input type="text" name="user_id" hidden class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', session('user')->id)}}" id="user_id">

<div class="row">
    <div class="col-md-12 mt20 mt-2">
        <button type="button" class="btn btn-primary" onclick="agregarFila()">Agregar</button>
    </div>
</div>

<div class="row">
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover text-center">
            <thead class="thead">
                <tr>
                    <th>Cuenta Id</th>
                    <th>Debe</th>
                    <th>Haber</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

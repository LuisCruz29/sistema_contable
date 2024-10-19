<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="number" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $tblLog?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_hora" class="form-label">{{ __('Fecha Hora') }}</label>
            <input type="datetime-local" name="fecha_hora" class="form-control @error('fecha_hora') is-invalid @enderror"
                   value="{{ old('fecha_hora', $tblLog->fecha_hora ? $tblLog->fecha_hora->format('Y-m-d\TH:i') : '') }}" 
                   id="fecha_hora" placeholder="Fecha Hora">
            {!! $errors->first('fecha_hora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        
        <div class="form-group mb-2 mb20">
            <label for="accion" class="form-label">{{ __('Accion') }}</label>
            <input type="text" name="accion" class="form-control @error('accion') is-invalid @enderror" value="{{ old('accion', $tblLog?->accion) }}" id="accion" placeholder="Accion">
            {!! $errors->first('accion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="modulo" class="form-label">{{ __('Modulo') }}</label>
            <input type="text" name="modulo" class="form-control @error('modulo') is-invalid @enderror" value="{{ old('modulo', $tblLog?->modulo) }}" id="modulo" placeholder="Modulo">
            {!! $errors->first('modulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $tblLog?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_log" class="form-label">{{ __('Tipolog') }}</label>
            <input type="text" name="tipoLog" class="form-control @error('tipoLog') is-invalid @enderror" value="{{ old('tipoLog', $tblLog?->tipoLog) }}" id="tipo_log" placeholder="Tipolog">
            {!! $errors->first('tipoLog', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
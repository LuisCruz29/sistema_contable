<div class="row padding-1 p-1">
    
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="permiso_id" class="form-label">{{ __('Permiso Id') }}</label>
            <input type="number" name="permiso_id" class="form-control @error('permiso_id') is-invalid @enderror" value="{{ old('permiso_id', $user?->permiso_id) }}" id="permiso_id" placeholder="Permiso Id">
            {!! $errors->first('permiso_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_empleado" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombreEmpleado" class="form-control @error('nombreEmpleado') is-invalid @enderror" value="{{ old('nombreEmpleado', $user?->nombreEmpleado) }}" id="nombre_empleado" placeholder="Nombreempleado">
            {!! $errors->first('nombreEmpleado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido_empleado" class="form-label">{{ __('Apellido') }}</label>
            <input type="tel" name="apellidoEmpleado" class="form-control @error('apellidoEmpleado') is-invalid @enderror" value="{{ old('apellidoEmpleado', $user?->apellidoEmpleado) }}" id="apellido_empleado" placeholder="Apellidoempleado">
            {!! $errors->first('apellidoEmpleado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $user?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user" class="form-label">{{ __('User') }}</label>
            <input type="text" name="user" class="form-control @error('user') is-invalid @enderror" value="{{ old('user', $user?->user) }}" id="user" placeholder="User">
            {!! $errors->first('user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password', $user?->password) }}" id="password" placeholder="password">
            {!! $errors->first('user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
       
        
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
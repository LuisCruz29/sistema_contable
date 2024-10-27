<div class="container padding-1 p-1">
    <div class="row">
        <!-- Rol: Combobox para seleccionar roles (sin obligatoriedad) -->
        <div class="col-md-12">
            <div class="form-group mb-4">
                <label for="rol" class="form-label">{{ __('Rol') }}</label>
                <input 
                    type="text" 
                    name="rol" 
                    id="rol" 
                    class="form-control @error('rol') is-invalid @enderror" 
                    value="{{ old('rol', $tblPermiso?->rol) }}" 
                    placeholder="Ingrese el rol (ejemplo: contador y auxiliar, gerente, admin)"
                >
                {!! $errors->first('rol', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}

            </div>
        </div>

        <!-- Ingresar Registro Diario -->
        <div class="col-md-6">
            <div class="form-group mb-4">
                <div class="form-check">
                    <!-- Campo oculto para enviar false cuando el checkbox no esté marcado -->
                    <input type="hidden" name="ingresarRegistroDiario" value="0">
                    
                    <!-- Checkbox que envía 1 si está marcado -->
                    <input type="checkbox" name="ingresarRegistroDiario" id="ingresar_registro_diario" class="form-check-input @error('ingresarRegistroDiario') is-invalid @enderror" value="1" {{ old('ingresarRegistroDiario', $tblPermiso?->ingresarRegistroDiario) ? 'checked' : '' }}>
                    <label class="form-check-label" for="ingresar_registro_diario">{{ __('Permitir ingreso de registro diario') }}</label>
                </div>
            </div>
        </div>

        <!-- Consultar Registro Diario -->
        <div class="col-md-6">
            <div class="form-group mb-4">
                <div class="form-check">
                    <!-- Campo oculto para enviar false cuando el checkbox no esté marcado -->
                    <input type="hidden" name="consultarRegistroDiario" value="0">
                    
                    <!-- Checkbox que envía 1 si está marcado -->
                    <input type="checkbox" name="consultarRegistroDiario" id="consultar_registro_diario" class="form-check-input @error('consultarRegistroDiario') is-invalid @enderror" value="1" {{ old('consultarRegistroDiario', $tblPermiso?->consultarRegistroDiario) ? 'checked' : '' }}>
                    <label class="form-check-label" for="consultar_registro_diario">{{ __('Permitir consulta de registro diario') }}</label>
                </div>
            </div>
        </div>

        <!-- Consultar Cuentas T -->
        <div class="col-md-6">
            <div class="form-group mb-4">
                <div class="form-check">
                    <!-- Campo oculto para enviar false cuando el checkbox no esté marcado -->
                    <input type="hidden" name="consultarCuentasT" value="0">
                    
                    <!-- Checkbox que envía 1 si está marcado -->
                    <input type="checkbox" name="consultarCuentasT" id="consultar_cuentas_t" class="form-check-input @error('consultarCuentasT') is-invalid @enderror" value="1" {{ old('consultarCuentasT', $tblPermiso?->consultarCuentasT) ? 'checked' : '' }}>
                    <label class="form-check-label" for="consultar_cuentas_t">{{ __('Permitir consulta de cuentas T') }}</label>
                </div>
            </div>
        </div>

        <!-- Consultar Estados Financieros -->
        <div class="col-md-6">
            <div class="form-group mb-4">
                <div class="form-check">
                    <!-- Campo oculto para enviar false cuando el checkbox no esté marcado -->
                    <input type="hidden" name="consultarEstadosFinancieros" value="0">
                    
                    <!-- Checkbox que envía 1 si está marcado -->
                    <input type="checkbox" name="consultarEstadosFinancieros" id="consultar_estados_financieros" class="form-check-input @error('consultarEstadosFinancieros') is-invalid @enderror" value="1" {{ old('consultarEstadosFinancieros', $tblPermiso?->consultarEstadosFinancieros) ? 'checked' : '' }}>
                    <label class="form-check-label" for="consultar_estados_financieros">{{ __('Permitir consulta de estados financieros') }}</label>
                </div>
            </div>
        </div>

        <!-- Crear Usuarios -->
        <div class="col-md-6">
            <div class="form-group mb-4">
                <div class="form-check">
                    <!-- Campo oculto para enviar false cuando el checkbox no esté marcado -->
                    <input type="hidden" name="crearUsuarios" value="0">
                    
                    <!-- Checkbox que envía 1 si está marcado -->
                    <input type="checkbox" name="crearUsuarios" id="crear_usuarios" class="form-check-input @error('crearUsuarios') is-invalid @enderror" value="1" {{ old('crearUsuarios', $tblPermiso?->crearUsuarios) ? 'checked' : '' }}>
                    <label class="form-check-label" for="crear_usuarios">{{ __('Permitir creación de usuarios') }}</label>
                </div>
            </div>
        </div>

        <!-- Gestionar Permisos -->
        <div class="col-md-6">
            <div class="form-group mb-4">
                <div class="form-check">
                    <!-- Campo oculto para enviar false cuando el checkbox no esté marcado -->
                    <input type="hidden" name="gestionarPermisos" value="0">
                    
                    <!-- Checkbox que envía 1 si está marcado -->
                    <input type="checkbox" name="gestionarPermisos" id="gestionar_permisos" class="form-check-input @error('gestionarPermisos') is-invalid @enderror" value="1" {{ old('gestionarPermisos', $tblPermiso?->gestionarPermisos) ? 'checked' : '' }}>
                    <label class="form-check-label" for="gestionar_permisos">{{ __('Permitir gestión de permisos') }}</label>
                </div>
            </div>
        </div>

    </div>

    <!-- Botón de envío -->
    <div class="col-md-12 mt-4">
        <button type="submit" class="btn btn-primary btn-lg">{{ __('Submit') }}</button>
    </div>
</div>

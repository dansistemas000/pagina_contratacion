<div class="register">
    <form action="user_register">
    <input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
    <div class="container-row">
        <div class="result"></div>
        <div class="row">
            <div class="col-md-12">
                <h4>ÚNETE</h4>
            </div>
            <div class="col-md-6">
                <div class="input-container">
                    <span class='input-title'>Nombres</span>
                    <input text-type="name" class="input-text validate-text" maxlength="30" name="first-name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-container">
                    <span class='input-title'>Apellidos</span>
                    <input text-type="name" class="input-text validate-text" maxlength="30" name="last-name" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="input-container">
                    <span class='input-title'>Teléfono</span>
                    <input class="input-text validate-text" maxlength="11" name="phone" text-type='number' required>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="input-container">
                    <span class='input-title'>Correo electrónico</span>
                    <input class="input-text validate-text" maxlength="50" name="email" text-type='email' required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-container">
                    <span class='input-title'>Código postal</span>
                    <input class="input-text postal-code-input validate-text" 
                    maxlength="5" name="postal-code" text-type='number' required>
                    <button class="fa fa-search icon-on-input postal-code" title="Buscar dirección" aria-hidden="true"></button>
                </div>
            </div>
            <div class="col-md-6"></div>
            <div class="address-process">
                <i class='fa fa-spinner fa-pulse'></i>
                <br>
                <span>Procesando...</span>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="input-container">
                    <span class='input-title'>Delegación o municipio</span>
                    <input type="text" class="input-text town-input" maxlength="20" name="town" text-type='number' disabled required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-container">
                    <span class='input-title'>Estado</span>
                    <input type="text" class="input-text state-input" maxlength="20" name="state" text-type='number' disabled required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-container">
                    <span class='input-title'>Selecciona tu Colonia</span>
                    <select class="select colony validate-select" name="colony" disabled>
                        <option value="0"></option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-container">
                    <span class='input-title'>Selecciona tu sucursal de preferencia</span>
                    <select class="select select-branch-office branch-office validate-select" 
                        name="branch-offices" disabled>
                        <option value="0"></option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-container">
                    <span class='input-title'>Dirección de sucursal</span>
                    <textarea text-type="description" class="input-text branch-office-address" maxlength="750" 
                    name="branch-office-address" readonly></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-container">
                    <span class='input-title'>Selecciona experiencia</span>
                    <select class="select validate-select" name="experience">
                        <option value="0"></option>
                        <option value="Sin experiencia">Sin experiencia</option>
                        <option value="Con experiencia en ventas">
                            Con experiencia en ventas
                        </option>
                        <option value="Con experiencia en el giro">
                            Con experiencia en el giro
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="input-container">
                    <span class='input-title'>No. hijos</span>
                    <input class="input-text validate-text" maxlength="2" name="sons" text-type='number' required>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="input-container">
                    <span class='input-title'>Selecciona escolaridad</span>
                    <select class="select validate-select" name="scholarship">
                        <option value="0"></option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">
                            Secundaria
                        </option>
                        <option value="Bachillerato">
                            Bachillerato
                        </option>
                        <option value="Licenciatura">
                            Licenciatura
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="input-container">
                    <input type="checkbox" class="chekbox" required>Acepto los términos y condiciones del <a href="pdf/aviso_privacidad_asesores.pdf" target="_black">aviso de privacidad</a>
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-success btn-block send">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Enviar
                </button>
            </div>
        </div>
    </div>
    </form>
</div>
<div class="forgot-password-container">
    <form action="forgot_password">
    <input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
    <div class="container-row">
        <div class="result"></div>
        <div class="row">
            <div class="col-md-12">
                <h6>
                    Olvido su contraseña, ingrese su correo para que le enviemos su contraseña
                </h6>
            </div>
            <div class="col-md-12">
                <div class="input-container">
                    <span class='input-title'>Dirección de correo electrónico</span>
                    <input text-type="email" class="input-text validate-text" maxlength="50" name="user-name" required>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <button class="btn btn-success btn-block return-login">
                	<i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
                	Regresar
            	</button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <br>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <button class="btn btn-success btn-block send">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Enviar
                </button>
            </div>
        </div>
    </div>
    </form>
</div>
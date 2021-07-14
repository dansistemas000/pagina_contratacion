@php
    if(isset($_COOKIE['fuerza_maestra_cookie_user'])){
        $data = json_decode($_COOKIE['fuerza_maestra_cookie_user'], true);
        $username = $data["username"];
        $password = "xxxxxxxxxxxxxx";
        $rembember = "checked";
    }else{
        $username = "";
        $password = "";
        $rembember = "";
    }
@endphp

<div class="login">
    <form action="auth_login" method="POST">
    <input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
    <div class="container-row">
        <div class="result"></div>
        <div class="row">
            <div class="col-md-12">
                <h6>Por favor, ingrese a su cuenta</h6>
            </div>
            <div class="col-md-12">
                <div class="input-container">
                    <span class='input-title'>Usuario</span>
                    <input text-type="email" class="input-text validate-text" 
                        maxlength="50" name="user-name" value="{{ $username }}" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-container">
                    <span class='input-title'>Contraseña</span>
                    <input type="password" text-type="name" class="input-text" 
                        maxlength="30" name="password" value="{{ $password }}" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="input-container">
                    <input type="checkbox" name="rembember" class="chekbox" 
                        {{ $rembember }}>Recuerdame
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <button class="btn btn-success btn-block send">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    Iniciar Sesión
                </button>
            </div>
            <hr>
            <div class="col-md-12">
                <hr>
                <h6>¿Olvido su contraseña?</h6>
                <p>¡ No hay que preocuparse ! 
                    <a class="link forgot-password" href="#">da clic aquí </a>
                    para restablecer
                </p>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <button class="btn btn-success button-href" href="/">
                    <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
                    Regresar
                </button>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8"></div>
        </div>
    </div>
    </form>
</div>
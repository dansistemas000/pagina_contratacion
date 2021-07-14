<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fuerza Maestra V 2.0">
    <meta name="author" content="Daniel Alejandro Peña García">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="icon/f_icon_v2.png">
    <title>
        @section('title')
            Fuerza Maestra
        @show
    </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.min.css{{ '?' . time() }}" rel="stylesheet">
    <link href="css/sweetalert.css{{ '?' . time() }}" rel="stylesheet">
    <link href="css/main.css{{ '?' . time() }}" rel="stylesheet">
</head>
<!-- /.head -->

<body>
    <span class="up fa fa-angle-double-up"></span>
    <!-- title -->
    <header>
        @section('header')
            {{-- <div class="index-header">
                <img class="img-header" src="img/header.png" alt="">
                <div class="log-in"><a href="login">Iniciar Sesión</a></div>
            </div> --}}
        @show
    </header>
    <!-- /.title -->
    @section('container')
        <!-- container -->
        <div class="register-container" style="height: 800px;">
            <div class="container-row">
                <div class="row">
                    @if(isset($close_session))
                        <div class="col-md-12">
                            <div class="result warning-result">
                                <span class='exit'><i class='fa fa-times'></i></span>
                                <i class="fa fa-exclamation-triangle"></i>
                                Su sesión ha caducado, inicie sesión de nuevo
                            </div>
                        </div>
                    @endif
                    <div class="col-md-12" >
                        <div style="text-align: center;
    color: white;
    font-size: 25px;
    font-weight: bold;
    border: 2px solid;
    border-radius: 10px; padding: 10px; margin: 10px;">
                          Página en mantenimineto.<br>
                        Estamos trabajando para que tengas una mejor experiencia navegando en www.fuerzamaestra.com  
                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        {{-- @include('index.caption') --}}
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        {{-- @include('index.register')   --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- @include('index.ads') --}}

        <!-- /.container -->
    @show 
    

    <!-- Footer -->
    <footer>
        <!-- Bootstrap core JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/bootstrap-datepicker.es.min.js"></script>
        <script src="js/sweetalert.min.js{{ '?' . time() }}"></script>
        <script src="js/main.js{{ '?' . time() }}"></script>

       <!--  @section('footer')
            <div class="py-5 bg-dark">
                @include('index.buttons')
                @include('index.extra')
            </div>
        @show -->
    </footer>
    <!-- /.Footer -->

</body>

</html>

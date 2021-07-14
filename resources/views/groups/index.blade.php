@extends('index.index')

@section('header')

    <link href="css/bootstrap-tables.css{{ '?' . time() }}" rel="stylesheet">
    <link href="css/sweetalert.css{{ '?' . time() }}" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/switch.css{{ '?' . time() }}" rel="stylesheet">
    <link href="css/groups.css{{ '?' . time() }}" rel="stylesheet">

  @include('groups.group_header')
@stop

@section('container')
    <div class="content-wrapper">
        <div class="container-fluid">
        <div class="result"></div>
        <div class="table-load">
        </div>
    </div>
@stop

@section('footer')
    <script src="js/jquery-tables.js{{ '?' . time() }}"></script>
    <script src="js/bootstrap-tables.js{{ '?' . time() }}"></script>
    <script src="js/sb-admin.js{{ '?' . time() }}"></script>
    <script src="js/sweetalert.min.js{{ '?' . time() }}"></script>
    <script src="js/groups.js{{ '?' . time() }}"></script>
    <script src="js/colonies.js{{ '?' . time() }}"></script>
    <div class="group-footer">
        <p>© {{ date('Y') }} Fuerza Maestra (v2)</p>
    </div>
@stop

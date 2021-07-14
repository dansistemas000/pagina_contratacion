@extends('index.index')

@section('header')
	<link href="css/login.css{{ '?' . time() }}" rel="stylesheet">
    <div class="index-header">
        <img class="img-header" src="img/header.png" alt="">
    </div>
@stop

@section('container')
	<div class="login-container">
		@include('login.login')
	</div>
	
@stop


@section('footer')
	<script src="js/login.js{{ '?' . time() }}"></script>
@stop
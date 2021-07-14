@php
	use App\Advisers;
	use App\Permissions;
	$session = \Session::get('fuerza_maestra_session_user');
	$data_advisers = Advisers::information_advisers($session["user_id"]);
	$permissions = Permissions::where("group_id","=",$session["group_id"])->first();
@endphp

@extends('index.index')

@section('header')
	<link href="css/switch.css{{ '?' . time() }}" rel="stylesheet">
	<link href="css/sb-admin.css{{ '?' . time() }}" rel="stylesheet">
	<link href="css/groups.css{{ '?' . time() }}" rel="stylesheet">
	<link href="css/advisers.css{{ '?' . time() }}" rel="stylesheet">
	@include('groups.group_header')
@stop

@section('container')
	<div class="content-wrapper nav-none">
	    <div class="container-fluid">
			<div class="advisers-container">
				@switch($data_advisers->status_id)
				    @case(1)
				        @include('groups.advisers.expenses')
				    @break
				    @case(2)
						@include('groups.advisers.promotions')
				    @break
				    @case(3)
				    	@php
				    		$block = true;
				    	@endphp
				    	@include('groups.advisers.information')
				    @break
				    @case(4)
				    	@include('groups.advisers.rejected')
				    @break
				    @case(5)
				    	@php
				    		$block = true;
				    	@endphp
				    	@include('groups.advisers.information')
				    @break
				    @case(6)
				    	@php
				    		$block = true;
				    	@endphp
				    	@include('groups.advisers.information')
				    @break
				    @case(7)
				    	@php
				    		$block = true;
				    	@endphp
				    	@include('groups.advisers.information')
				    @break
				    @case(8)
				    	@php
				    		$block = true;
				    	@endphp
				    	@include('groups.advisers.information')
				    @break
				    @case(9)
				    	@include('groups.advisers.rejected')
				    @break
				    @case(10)
				    	@if(isset($conventions))
							@include('groups.advisers.conventions')
				    	@else
				    		@php
				    			$block_main_info = "disabled";
							    $block_expenses = "disabled";
							    $block_branch_office = "disabled";
							    $block_status = "block";
						        $block_adviser_number = "disabled";
						        $block_email = "disabled";
						        $postal_code = "readonly";
        					@endphp
				    		@include('groups.advisers.information')
				    	@endif
				    @break
				@endswitch
			</div>
		</div>
	</div>
@stop

@section('footer')
	<script src="js/sb-admin.js{{ '?' . time() }}"></script>
	<script src="js/groups.js{{ '?' . time() }}"></script>
	<script src="js/advisers.js{{ '?' . time() }}"></script>
	<div class="group-footer">
		<p>© {{ date('Y') }} Fuerza Maestra (v2)</p>
	</div>
@stop


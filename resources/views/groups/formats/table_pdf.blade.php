<style type="text/css">
	table{
		font-size: 12px;
		width: 100%;
	}
	th{
	    background-color: #CEC028;
	    background-image: -webkit-linear-gradient(top, #fef051, #b8ab16);
	    background-image: -moz-linear-gradient(top, #fef051, #b8ab16);
	    background-image: -ms-linear-gradient(top, #fef051, #b8ab16);
	    background-image: -o-linear-gradient(top, #fef051, #b8ab16);
	    background-image: linear-gradient(to bottom, #fef051, #b8ab16);
	    text-align: left;
	}
	.par{
		background-color: white;
	}
	.non{
		background-color: #F2F2F2;
	}
	.title{
		color: red;
		text-align: center;
	}
	.sub-title{
		text-align: center;
	}
</style>

<fieldset>
	<h3 class="title">{{ $name }}</h3>
	<h6 class="sub-title">Fecha: {{ date("d-m-Y") }}</h6>
	<table>
		<thead>
			<tr>
				@foreach($header as $value)
					<th>{{ $value }}</th>
				@endforeach
	        <tr>
		</thead>
		<tbody>
			@php($cont = 1)
			@foreach($data as $key)
				@if($cont%2 == 0)
					<tr class="par">
				@else
					<tr class="non">
				@endif
				@foreach($key as $value)
						<td>{{ $value }}</td>
				@endforeach
					</tr>
				@php($cont++)
			@endforeach
		</tbody>
	</table>
</fieldset>

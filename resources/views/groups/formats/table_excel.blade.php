<style type="text/css">

	th{
	    background-color: #CEC028;
	    background-image: -webkit-linear-gradient(top, #fef051, #b8ab16);
	    background-image: -moz-linear-gradient(top, #fef051, #b8ab16);
	    background-image: -ms-linear-gradient(top, #fef051, #b8ab16);
	    background-image: -o-linear-gradient(top, #fef051, #b8ab16);
	    background-image: linear-gradient(to bottom, #fef051, #b8ab16);
	    text-align: left;
	}
	td{
		text-align: left;
	}

	.title{
		text-align: center;
	}
</style>

<table>
	<thead>
		<tr>
			<th colspan="{{ count($header) }}" class="title">
				{{ $name }} fecha: {{ date("d-m-Y") }}
			</th>
		</tr>
		<tr>
			@foreach($header as $value)
				<th>{{ $value }}</th>
			@endforeach
        <tr>
	</thead>
	<tbody>
		@foreach($data as $key)
				<tr>
			@foreach($key as $value)
					<td>{{ $value }}</td>
			@endforeach
				</tr>
		@endforeach
	</tbody>
</table>





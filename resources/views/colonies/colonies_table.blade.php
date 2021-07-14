@if($colonies)
	@php
		$data_colonies = (Array)$colonies[0];
		$state = $data_colonies["state"];
		$town = $data_colonies["town"];
		$country = $data_colonies["country"];
		$code = $data_colonies["code"];
		$postal_code = $data_colonies["postal_code"];
	@endphp
	<div class="row">
		<div class="col-md-12">
			<div class="well">
				<h6>Datos de código postal</h6>
			</div>
		</div>
		<div class="col-md-12">
			<strong>Estado: </strong>{{ $state }}
		</div>
		<div class="col-md-12">
			<strong>Delegación o municipio: </strong>{{ $town }}
		</div>
	</div>
	<hr>
	<table class="table table-bordered data-table table-striped table-sm" width="100%" cellspacing="0">
	    <thead>
	    	<tr>
	    		@php($headers = array_keys((Array)$colonies[0]))
	            @unset($headers[0])
	            @foreach($headers as $key)
	            	@if($key == "colony")
	                    <th class="th">Colonia</th>
	                @endif
	            @endforeach
	                <th>Acciones</th>
			</tr>
		</thead>
		<tfoot>
            <tr>
              @foreach($headers as $key)
                    @if($key == "colony")
	                    <th class="th">Colonia</th>
	                @endif
                @endforeach
                    <th>Acciones</th>
            </tr>
        </tfoot>
        <tbody>
        	@foreach($colonies as $data)
                            @php( $id = $data->id )
        		<tr class="tr row-{{ $id }}">
	                @foreach($data as $key => $value)
	                    @if($key == "colony")
	                    	<td class="td">{{ $value }}</td>
	                    @endif
	                @endforeach
	                <td>
	                	<center>
                            <div class="btn-toolbar" role="toolbar" 
                            aria-label="Toolbar with button groups">
                                <span class="show-modal"  
                                data-toggle="modal" view="modal_view/colony_update/{{ $id }}/" 
                                data-target=".modal">
                                    <button type="button" class="btn color-none">
                                        <i class="fa fa-edit" title="Editar colonia" data-toggle="tooltip"></i>
                                    </button>
                                </span>
                                <span class="alert_action" data="colony_delete/{{ $id }}">
                                    <button  type="button" class="btn color-none">
                                        <span class='d-none'>eliminar colonia</span>
                                        <i class="fa fa-trash" title="Eliminar colonia" data-toggle="tooltip"></i>
                                    </button>
                                </span>
                            </div>
                        </center>
	                </td>
            	</tr>
            @endforeach
        </tbody>
	</table>
	@include('colonies.colony_add')
	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
@else	
	<div class="warning-result">
		<span class="fa fa-warning"></span>
		No se encontraron resultados, verifique que el código postal este bien escrito.
	</div>
@endif
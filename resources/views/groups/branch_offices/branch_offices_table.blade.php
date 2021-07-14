<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i>
        <strong>Lista de Resultados</strong>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if($data_branch_offices)
                <table class="table table-bordered data-table table-striped table-sm" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            @php($headers = array_keys((Array)$data_branch_offices[0]))
                            @unset($headers[0])
                            @foreach($headers as $key)
                                    <th class="th">{{ $key }}</th>
                            @endforeach
                                <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                          @foreach($headers as $key)
                                    <th>{{ $key }}</th>
                            @endforeach
                                <th>Editar</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data_branch_offices as $data)
                            @php( $branch_office_id = $data->branch_office_id )
                            @unset($data->branch_office_id)
                            <tr class="tr row-{{ $branch_office_id }}"">
                                @foreach($data as $key => $value)
                                    @if($key == "Estatus")
                                        <td class="status">
                                            <div class="onoffswitch2">
                                                @if($value == 1)
                                                    <span class="d-none">{{ "onn" }}</span>
                                                    <input type="checkbox" 
                                                    action="branch_office_active"
                                                    class="onoffswitch2-checkbox actives" 
                                                    id="{{ $branch_office_id  }}" checked>
                                                @else
                                                    <span class="d-none">{{ "off" }}</span>
                                                    <input type="checkbox" 
                                                    action="branch_office_active"
                                                    class="onoffswitch2-checkbox actives" 
                                                    id="{{ $branch_office_id  }}">
                                                @endif
                                                <label class="onoffswitch2-label" for="{{ $branch_office_id  }}">
                                                    <span class="onoffswitch2-switch"></span>
                                                    <span class="onoffswitch2-inner"></span>
                                                </label>
                                            </div>
                                        </td>
                                    @else
                                        <td>
                                            {{ $value }}
                                        </td>
                                    @endif
                                @endforeach
                                <td>
                                    <center>
                                        <div class="btn-toolbar" role="toolbar" 
                                        aria-label="Toolbar with button groups">
                                            <span class="show-modal"  
                                            data-toggle="modal" view="modal_view/branch_office_update/{{ $branch_office_id }}/" 
                                            data-target=".modal">
                                                <button type="button" class="btn color-none">
                                                    <i class="fa fa-edit" title="Editar sucursal" data-toggle="tooltip"></i>
                                                </button>
                                            </span>
                                            <span class="alert_action" data="branch_office_delete/{{ $branch_office_id }}">
                                                <button  type="button" class="btn color-none">
                                                    <span class='d-none'>eliminar sucursal</span>
                                                    <i class="fa fa-trash" title="Eliminar sucursal" data-toggle="tooltip"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </center>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="text-danger">No hay datos disponibles</div>
            @endif
        </div>
    </div>
    <div class="card-footer small text-muted">{{ "Fecha de hoy: ".date("d/m/Y")." " }}
        <span class="clock"></span>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
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
</div>

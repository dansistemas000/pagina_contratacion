<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <b>Búsqueda de candidatos por año en la fecha que se registró.</b>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="input-container">
                <span class='input-title'>Seleccione año</span>
                <select class="select search-data-year">
                    <option value="0"></option>
                    @for($i = 2018; $i <= date('Y');  $i++)
                        @if($i == $year)
                            <option value="{{ $i }}" selected>{{ $i }}</option>
                        @else
                            <option>{{ $i }}</option>
                        @endif
                    @endfor
                </select>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i>
        <strong>Lista de Resultados del año {{ $year }}</strong>
        @if($permissions["m1_download_pdf_excel"])
            <div class="download">
                <form class="download-form" action="download" method="post">
                    <input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
                    <input name="report-name" type="hidden" value="Reporte de candidatos fuerza maestra">
                    <div class="download-file" type="pdf" data-toggle="tooltip" title="Descargar datos de la tabla en un archivo PDF">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>PDF
                    </div>
                    <div class="download-file" type="excel" data-toggle="tooltip" title="Descargar datos de la tabla en un archivo EXCEL">
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>EXCEL
                    </div>
                </form>
            </div>
        @endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if($data_advisers)
                <table class="table table-bordered data-table table-striped table-sm" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            @php($headers = array_keys((Array)$data_advisers[0]))
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
                                <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php($array = array("Campaña"))
                        @foreach($data_advisers as $data)
                            @php( $user_id = $data->user_id )
                            @php( $name = $data->Candidato )
                            @unset($data->user_id)
                            <tr class="tr row-{{ $user_id }}">
                                @foreach($data as $key => $value)
                                    @if(in_array($key, $array))
                                        @if(strpos($value,'-') !== false)
                                            <td class="td">
                                                {{ $value }}
                                            </td>
                                        @else
                                            <td class="td"></td>
                                        @endif
                                    @else
                                        <td class="td">{{ $value }}</td>
                                    @endif
                                @endforeach
                                <td data-toggle="tooltip" 
                                            title="Acciones">
                                    <div class="dropdown">
                                        <button class="btn btn-success btn-sm dropdown-toggle" 
                                            data-toggle="dropdown">
                                        </button>
                                        <div class="dropdown-menu">
                                            @if($permissions["m1_update_documents"])
                                                <a class="dropdown-item show-modal" href="#" 
                                                data-toggle="modal" view="modal_view/load_documents/{{ $user_id }}/{{ $name }}/" 
                                                    data-target=".modal">
                                                    <i class="fa fa-file-text-o"></i>
                                                    <span>Actualizar Documentos</span>
                                                </a>
                                            @endif
                                            @if($permissions["m1_see_advisers_data"])
                                                <a class="dropdown-item show-modal" href="#" data-toggle="modal" view="modal_view/show_request/{{ $user_id }}"
                                                    data-target=".modal">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                    <span>Editar/Ver solicitante</span>
                                                </a>
                                            @endif
                                            @if($permissions["m1_print_kit"])
                                                <a class="dropdown-item show-modal" href="#" 
                                                data-toggle="modal" view="modal_view/print_kit/{{ $user_id }}/{{ $name }}/" 
                                                    data-target=".modal">
                                                    <i class="fa fa-print"></i>
                                                    <span>Impimir Kit contratación</span>
                                                </a>
                                            @endif
                                            {{-- @if($permissions["m1_add_training"])
                                                <a class="dropdown-item alert_action" href="#" 
                                                    data="add_training/{{ $user_id }}">
                                                    <i class="fa fa-plus-circle"></i>
                                                    <span>Agregar capacitación</span>
                                                </a>
                                            @endif
                                            @if($permissions["m1_add_converted"])
                                                <a class="dropdown-item alert_action" href="#" 
                                                    data="add_converted/{{ $user_id }}">
                                                    <i class="fa fa-plus-circle"></i>
                                                    <span>Agregar conversión</span>
                                                </a>
                                            @endif --}}
                                            @if($permissions["m1_adviser_rejected"])
                                                <a class="dropdown-item alert_action" href="#" 
                                                    data="adviser_rejected/{{ $user_id }}">
                                                    <i class="fa fa-minus-circle"></i>
                                                    <span>Rechazar candidato</span>
                                                </a>
                                            @endif
                                            @if($permissions["m1_adviser_delete"])
                                                <a class="dropdown-item alert_action" href="#" 
                                                    data="adviser_delete/{{ $user_id }}">
                                                    <i class="fa fa-trash"></i>
                                                    <span>Eliminar candidato</span>
                                                </a>
                                            @endif
                                            @if($permissions["m1_pass_reset"])
                                                <a class="dropdown-item alert_action" href="#" 
                                                    data="pass_reset/{{ $user_id }}">
                                                    <i class="fa fa-refresh"></i>
                                                    <span>Resetear contraseña</span>
                                                </a>
                                            @endif
                                            @if($permissions["m1_pass_resend"])
                                                <a class="dropdown-item alert_action" href="#" 
                                                    data="pass_resend/{{ $user_id }}">
                                                    <i class="fa fa-envelope"></i>
                                                    <span>Reenviar usuario/contraseña</span>
                                                </a>
                                            @endif
                                            @if($permissions["m1_responsive_print"])
                                                <a class="dropdown-item download-file" href="print_kit/9/{{ $user_id }}">
                                                    <i class="fa fa-file-pdf-o"></i>
                                                    <span>Imprimir Responsiva</span>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
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

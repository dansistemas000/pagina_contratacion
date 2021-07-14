<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i>
        <strong>Lista de Resultados</strong>
        <div class="download">
            <form class="download-form" action="download" method="post">
                <input name="_token" type="hidden" class="token" value="{{ csrf_token() }}">
                <input name="report-name" type="hidden" value="Distribución de sucursales">
                <div class="download-file" type="pdf" data-toggle="tooltip" title="Descargar datos de la tabla en un archivo PDF">
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>PDF
                </div>
                <div class="download-file" type="excel" data-toggle="tooltip" title="Descargar datos de la tabla en un archivo EXCEL">
                    <i class="fa fa-file-excel-o" aria-hidden="true"></i>EXCEL
                </div>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if($organization_data)
                <table class="table table-bordered data-table table-striped table-sm" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            @php($headers = array_keys((Array)$organization_data[0]))
                            @foreach($headers as $key)
                                    <th class="th">{{ $key }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                          @foreach($headers as $key)
                                    <th>{{ $key }}</th>
                            @endforeach
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($organization_data as $data)
                            <tr class="tr">
                                @foreach($data as $key => $value)
                                        <td class="td">
                                            {{ $value }}
                                        </td>
                                @endforeach
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
</div>

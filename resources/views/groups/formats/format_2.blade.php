<style type="text/css">
    .format_2 .pdf-title {
        text-align: center;
        margin-bottom: 30px;
        font-weight: 100;
        font-size: 18px;
        margin-top: 10px;
    }    
    .format_2 .line {
        width:50%;
        margin:auto;
        text-align:center;
        border-top: 2px solid #000;
    }
    .format_2 .signature { 
        text-transform:uppercase;
        font-size: 13px;
    }
    .format_2 p { 
        margin-bottom: 1050px;
        font-size: 12px;
        text-align: justify;
    }
</style>
<div>
    <fieldset class="format_2">
        <h4 class="pdf-title">ANEXO UNO</h4>
        <div>                       
            <fieldset>
                <p>
                	ESTE ANEXO FORMA PARTE INTEGRANTE DEL CONTRATO DE PRESTACIÓN DE SERVICIOS ADJUNTO Y SERVIRÁ PARA ANOTAR EN EL TABULADOR CORRESPONDIENTE AL PAGO POR LOS SERVICIOS DURANTE LA RELACIÓN ENTRE PRESTADOR Y PRESTATARIO.
                </p>
                <div class="line">
                    <span class="signature">
                        {{ $data_advisers->first_name." ".$data_advisers->last_name }}
                    </span>
                </div>
            </fieldset>
        </div>
    </fieldset>
</div>


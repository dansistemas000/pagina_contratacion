
<style type="text/css">

fieldset{
    font-size: 13px;
}

.format_4 table{
    width: 100%;
    font-size: 13px;
    text-align: center;
    margin-bottom: 10px;
    border-collapse: collapse;
}

td{
    border:1px solid #000000;
    padding: 5px;
}

.title{
    width: 250px;
}

th{
    padding: 20px;
    font-size: 13px;
}

.name{
    text-transform: uppercase;
}

.pdf_titulo, .pdf_subtitulo {
    text-align: center;    
    font-size: 13px;
    margin-bottom: 10px;
    text-align: center;
    font-weight: bold;
}


.parrafo_negrita {
    text-align:justify;
    line-height:normal;
    font-size: 12px;
    font-weight: bold;
}

.carac_contrato {
    margin-bottom: 310px;
}
p {
    text-align: justify;
}
.pdf_declaraciones .num_declaracion {        
    margin-right: 50px;
    width: 10%;
    float: left;
    font-size: 13px;
}
.pdf_declaraciones .titulo_declaracion {    
    display:inline-block;
    float:left;
    margin-bottom: 20px;
    font-size: 13px;
}
.pdf_declaraciones p {
    padding-left: 62px;
    text-align: justify;
    margin-bottom: 20px;
    font-size: 13px;
}
.sangria {
    text-indent: 40px;
}
.bottom_parrafo {
    margin-bottom: 25px;
    margin-top: 15px;
    font-size: 13px;
}
.pdf_subtitulo_left {
    text-align: left;    
    font-weight: bold;
    font-size: 13px;
    border-bottom: 2px solid #000;
}

.sangria_clausulas {
    margin-left: 40px;    
}


.firmas {
    width: 100%;    
    padding: 160px 30px 30px 30px; 
    font-size: 13px;
}
.firmas .firmas_left { 
    border-top:2px solid #000;
    text-align:center; 
    width: 45%;
    display:inline-block;
    float:left;
    padding-top: 10px;
}
.firmas .firmas_right {
    border-top:2px solid #000;
    text-align:center; width: 45%;
    display:inline-block; float:right;
    padding-top: 10px;
}

.firmas .firmas_left div, .firmas .firmas_right div { text-align: center; font-weight: bold; }
.firmas .firmas_left p, .firmas .firmas_right p { text-align: center; }

</style>

@php
    $address  = $data_advisers->street." ";
    $address .= $data_advisers->outside_number." ".$data_advisers->inside_number.", ";
    $address .= $data_advisers->colony.", ".$data_advisers->town.", ".
                $data_advisers->state.", ".$data_advisers->postal_code;

    $months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto",
                    "Septiembre","Octubre","Noviembre","Diciembre");

    $birth_date = $data_advisers->birth_date;
    $day = strftime("%d", strtotime($birth_date));
    $month = (int)strftime("%m", strtotime($birth_date));
    $year = strftime("%Y", strtotime($birth_date));
    $birth_date =  $day ." de ". $months[$month-1] . " del ". $year;

    $date = getdate();
    $day = $date['mday'];
    $month = $date['mon'];
    $year = $date['year'];
    $today = $day ." de ". $months[$month-1] . " del ". $year;
@endphp

<fieldset class="format_4">
    <h6 class="pdf_subtitulo">CONTRATO DE PRESTACIÓN DE SERVICIOS PROFESIONALES</h6>
    <table>
        <thead>
            <tr>
                <th colspan="2">Datos del prestador del servicio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="title">
                    Nombre:
                </td>
                <td class="name">
                    {{ $data_advisers->first_name." ".$data_advisers->last_name }}
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Estado civil:
                </td>
                <td>
                    {{ $data_advisers->marital_status }}
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Domicilio:
                </td>
                <td>
                    {{ $address }}
                </td>
            </tr>
            <tr>    
                <td class="title">
                    RFC:
                </td>
                <td>
                    {{ $data_advisers->rfc }}
                </td>
            </tr>
            <tr>    
                <td class="title">
                    CURP:
                </td>
                <td>
                    {{ $data_advisers->curp }}
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Fecha de nacimiento:
                </td>
                <td>
                    {{ $birth_date }}
                </td>
            </tr>
            <tr>        
                <td class="title">
                    Nacionalidad:
                </td>
                <td>
                    {{ $data_advisers->nationality }}
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Sexo:
                </td>
                <td>
                    {{ $data_advisers->gender }}
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="2">Datos del Cliente</th>
            </tr>
        </thead>
        <tbody>
            <tr>    
                <td class="title">
                    Denominación:
                </td>
                <td>
                    Ejecutivos y Consultores Fast, S.A de C.V.
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Datos del representante:
                </td>
                <td>
                    Rosa Isela Mendieta Gudiño
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Según poder en escritura pública:
                </td>
                <td>
                    Instrumento público núm. 161 de fecha 17 de julio de 2014, otorgada ante la fe del Lic. Marco Antonio González Reynoso, corredor público núm. 80 del Distrito Federal, cuyo primer testimonio quedó inscrito en el Registro Público del Comercio del Distrito Federal el bajo el folio mercantil electrónico núm.: 521361-1
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Constituida en escritura pública:
                </td>
                <td>
                    Instrumento público núm. 161 de fecha 17 de julio de 2014, otorgada ante la fe del Lic. Marco Antonio González Reynoso, corredor público núm. 80 del Distrito Federal, cuyo primer testimonio quedó inscrito en el Registro Público del Comercio del Distrito Federal el bajo el folio mercantil electrónico núm.: 521361-1
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Domicilio:
                </td>
                <td>
                    Calle Mayas núm. Exterior 19, Colonia Obrera, Delegación Cuauhtémoc, Distrito Federal, C.P. 06800.
                </td>
            </tr>
            <tr>    
                <td class="title">
                    RFC:
                </td>
                <td>
                    ECF1407172B3
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Nacionalidad:
                </td>
                <td>
                    Mexicana
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="2">Características del Contrato</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="title">
                    Término Normal:
                </td>
                <td>
                    Un año (1)
                </td>   
            </tr>
            <tr>    
                <td class="title">
                    Fecha de celebración:
                </td>
                <td>
                    {{ $today }}
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Lugar de celebración:
                </td>
                <td>
                    México, Ciudad de México
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <fieldset>
        <h6 class="pdf_titulo scheduler-border">
            CONTRATO DE PRESTACIÓN DE SERVICIOS PROFESIONALES
        </h6>
        <fieldset>
            <p class="parrafo_negrita">
                <span>
                    CONTRATO DE PRESTACIÓN DE SERVICIOS PROFESIONALES QUE CELEBRAN POR UNA PARTE 
                    <span class="name">{{ $data_advisers->first_name." ".$data_advisers->last_name }}</span>, A QUIÉN EN LO SUCESIVO SE LE DENOMINARÁ EL “PRESTADOR DE SERVICIOS” Y POR LA OTRA EJECUTIVOS Y CONSULTORES FAST, S.A DE C.V.  A QUIÉN EN LO SUCESIVO SE DENOMINARÁ EL “CLIENTE” (Y EN SU CONJUNTO SE DENOMINARÁN LAS “PARTES”), DE CONFORMIDAD CON LAS SIGUIENTES DECLARACIONES Y CLÁUSULAS:<o:p></o:p>
                </span>
            </p>

            <h6 class="pdf_subtitulo">DECLARACIONES</h6>

            <div class="pdf_declaraciones">
                <div class="num_declaracion">I.</div>
                <div class="titulo_declaracion"> Declara el Prestador de servicios que:</div>
                <p>
                    a)  Cuenta con la capacidad, preparación, conocimiento y recursos humanos, profesionales y técnicos necesarios y suficientes para desempeñar correctamente el servicio de asesor financiero que mediante este contrato se obliga a prestar al Cliente, por lo que es su voluntad el celebrar el presente Contrato de Prestación de Servicios Profesionales con el Cliente.
                </p>
            </div>

            <div class="pdf_declaraciones">
                <div class="num_declaracion">II.</div>
                <div class="titulo_declaracion"> Declara el Cliente que:</div>
                <p>
                    a)  Es una sociedad mercantil constituida y existente de acuerdo con las leyes de México.
                </p>
                <p>
                    b)  Su representante legal cuenta con todas las facultades suficientes para celebrar este contrato, mismas que no le han sido revocadas o limitadas en forma alguna a esta fecha y que constan en la escritura indicada en la carátula.
                </p>
                <p>
                    c)  Para la consecución de su objeto social, le es menester celebrar, entre otros, contratos de prestación de servicios profesionales como es en el presente caso.
                </p>
                <p>
                    d)  Que entiende los alcances de los servicios que el Prestador de Servicios le prestará y se obliga a pagar la contraprestación que se estipula en este instrumento, por lo que es su voluntad celebrar el presente Contrato de Prestación de Servicios Profesionales con el Prestador de Servicios.
                </p>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">III.</div>
                <div class="titulo_declaracion"> Declaran ambas Partes que:</div>
                <p>
                    a)  Se reconocen mutuamente las generales incorporadas en las carátulas del presente contrato y en el capítulo de Declaraciones.
                </p>
                <p>
                    b)  Para la celebración del presente contrato, no ha mediado error, dolo, mala fe o vicio del consentimiento alguno que pudiere afectar la validez del acto que se celebra.
                </p>                                                    
            </div>
            <p class="sangria bottom_parrafo">
                Habiendo llegado a un acuerdo, las Partes otorgan el presente contrato y consienten en quedar obligadas conforme a lo dispuesto en las siguientes cláusulas:
            </p>

            <h6 class="pdf_subtitulo">CLÁUSULAS</h6>
            <span class="sangria_clausulas pdf_subtitulo_left">
                Primera. Objeto:
            </span>
            <p class="sangria bottom_parrafo">
                El Prestador de servicios se obliga a prestar al cliente los siguientes servicios como asesor financiero, mismo que comprenden, sin limitar, a los siguientes:<i>  servicios profesionales consistentes en la asesoría comercial para la colocación de créditos otorgados por el “EL CLIENTE”</i>.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">
                Segunda. Contraprestación, facturación y pagos:
            </span>
            <p class="sangria bottom_parrafo">
                Convienen las partes en que la totalidad de los honorarios por la prestación de los servicios serán los montos que de común acuerdo determinen las partes, en atención a la importancia y especialización de los servicios prestados, determinándose por cada evento mediante un importe variable de acuerdo a los servicios prestados durante un periodo mensual. En el entendido, de que “El Cliente le retendrá a “EL PRESTADOR”de los pagos que reciba por concepto de honorarios, la cantidad que resulte aplicable en los términos de lo dispuesto por el artículo 94 Fracción V, de la Ley del Impuesto Sobre la Renta, por lo cual el Cliente le extenderá la constancia de retención correspondiente.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Tercera. Trabajos, adiciones e incrementos:</span>
            <p class="sangria bottom_parrafo">
                El Cliente podrá encomendar por escrito o por correo electrónico al Prestador de Servicios trabajos no incluidos en este instrumento. Al efecto, el Prestador de Servicios, presentará oportunamente al Cliente las propuestas relacionadas con dichos trabajos adicionales, los que serán pagados en principio con lo que dice este instrumento y en caso de ser necesario, en la forma y por los montos que acuerden las partes en su momento.
            </p>
            <p class="sangria_clausulas bottom_parrafo">
                No obstante, el costo del servicio en general, será incrementado de manera anual en el porcentaje que varíe la tasa de inflación promedio correspondiente, tomando como referencia la fecha de este contrato.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Cuarta. Inconformidad por el servicio:</span>
            <p class="sangria bottom_parrafo">
                En caso de que El Cliente se encuentre inconforme con el servicio que se indica en este instrumento, deberá manifestar por escrito, por correo electrónico o de viva voz al Prestador de Servicios de sus inconformidades, para que así, el Prestador de Servicios lo solucione a la brevedad posible.
            </p>
            <p class="sangria_clausulas bottom_parrafo">
                De seguir inconforme con el servicio, el Cliente en cualquier momento y cuando así sea su voluntad, puede rescindir este contrato, manifestando de manera escrita o por correo electrónico su decisión.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Quinta. Término del contrato:</span>
            <p class="sangria bottom_parrafo">
                El presente contrato se celebra por el término indicado en la carátula del mismo, el cual se computará a partir de la fecha de celebración de este contrato. 
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Sexta. Terminación anticipada del contrato:</span>
            <p class="sangria bottom_parrafo">
                El cliente podrá rescindir el contrato en cualquier momento, sin perjuicio alguno para el, informando por escrito o por correo electrónico al Prestador de servicios de su decisión, sin embargo, en caso de terminación anticipada por parte del Cliente, subsistirá la obligación del pago de la contraprestación de manera completa, a favor del Prestador de servicios hasta el último mes trabajado.
            </p>
            <p class="sangria_clausulas bottom_parrafo">
                Si es voluntad del Prestador de servicios rescindir este instrumento, deberá de avisar por escrito, mediante una carta en papel membretado dirigida al Cliente, con por los menos tres (3) días naturales de anticipación a dejar de prestar su servicio de la decisión de dejar de ofrecer sus servicios hacia el Cliente. De no cumplirse en tiempo y forma lo anterior, el prestador de servicios será sujeto al pago de una pena convencional del cincuenta porciento (50%) sobre el valor estipulado en la cláusula segunda al Cliente.
            </p>
            <p class="sangria_clausulas bottom_parrafo">
                El Prestador de servicios tendrá cinco días naturales para entregar al cliente todo documento relacionado con los servicios que contrató el Cliente.    
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Séptima. Domicilios:</span>
            <p class="sangria bottom_parrafo">
                Cualquier notificación de carácter judicial o extrajudicial que requieran realizarse las Partes en relación con el presente contrato, será considerada legalmente realizada, si se hace en los domicilios que las mismas indican en la carátula del presente contrato y en caso de que se lleven a cabo cambios de domicilio, deberán de notificarlo previamente a la otra parte, pues en caso contrario, la notificación que se realice al último domicilio notificado fehacientemente a la otra parte, será considerada como válida y legal.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Octava. Confidencialidad y protección de datos personales:</span>
            <p class="sangria bottom_parrafo">
                Las partes reconocen que la información contenida en este contrato y todo aquello que por virtud del mismo se derive, tal como los documentos, las negociaciones, los nombres de personas o lugares y demás datos que vayan resultando de la ejecución del contrato, son en su conjunto y en lo particular, datos reservados para las partes y para el trato normal y natural del objeto materia del contrato y por lo mismo, no deberán de ser revelados ni divulgados bajo ninguna circunstancia ni por ningún medio, bajo pena de tener que responder, quien viole lo aquí estipulado, por los daños y perjuicios ocasionados por la indebida revelación de información, negociaciones o documentos.
            </p>                                                
            <p class="sangria bottom_parrafo">
                Del mismo modo, las partes se obligan a guardar el secreto y confidencialidad de toda la información a la que tenga acceso por motivo de este contrato y de su cumplimiento, respecto de todos los procesos llevados a cabo interna y externamente, en los términos que señala Ley de la Propiedad Industrial, desde el artículo 82 y hasta incluso el 86 BIS 1 y reconoce haber leído y entendido el alcance del artículo 223 fracciones IV y V de la mencionada ley.    
            </p>
            <p class="sangria bottom_parrafo">
                De acuerdo con el Artículo 3, fracción IX, y 58 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (la “Ley de Datos”) y los Artículos 49 a 55 del reglamento de la Ley de Datos, las partes manifiestan que, con motivo de la celebración de este Contrato, el Prestador de Servicios tratará y se asegurará de que su personal trate los datos personales (según dicho término se define en la Ley de Datos) que el Cliente les remita, o que recaben o a los que tengan acceso por cuenta del Cliente (los “Datos Personales”), bajo el carácter de “encargado” (según dicho término se define en la Ley de Datos) en términos de lo establecido por la Ley de Datos y su reglamento, así como por los avisos de privacidad que determine el Cliente y las políticas y procedimientos en materia de protección de datos personales que el Cliente comunique al Prestador de Servicios. El Cliente se reserva el derecho de hacer modificaciones a sus avisos y políticas de privacidad, las cuales serán comunicadas al Prestador de Servicios en la forma que determine el Cliente.    
            </p>
            <p class="bottom_parrafo">
                En virtud de lo anterior, el Prestador de Servicios deberá cumplir con las obligaciones que la Ley de Datos, su Reglamento y demás disposiciones aplicables imponen a los encargados, incluyendo sin limitación alguna, las siguientes:    
            </p>

            <div class="pdf_declaraciones">
                <div class="num_declaracion">I.</div>
                <div class="titulo_declaracion"> 
                    Tratar los Datos Personales únicamente conforme a las instrucciones del Cliente.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">II.</div>
                <div class="titulo_declaracion"> 
                    Abstenerse de tratar los Datos Personales para finalidades distintas a las instruidas por el Cliente.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">III.</div>
                <div class="titulo_declaracion"> 
                    Implementar las medidas de seguridad conforme a la Ley de Datos, su Reglamento y demás disposiciones aplicables.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">IV.</div>
                <div class="titulo_declaracion"> 
                    Guardar confidencialidad respecto de los Datos Personales tratados de conformidad con la Cláusula Séptima de este Contrato.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">V.</div>
                <div class="titulo_declaracion"> 
                    Suprimir los Datos Personales objeto de tratamiento una vez terminado el presente Contrato o por instrucciones del cliente, siempre y cuando no exista una disposición legal que le exija la conservación de los Datos Personales.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">VI.</div>
                <div class="titulo_declaracion"> 
                    Abstenerse de transferir los Datos Personales salvo en el caso de que El Cliente así lo determine, la comunicación derive de una subcontratación o cuando así lo requiera la autoridad competente.
                </div>    
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">VII.</div>
                <div class="titulo_declaracion"> 
                    Dar aviso de inmediato al Cliente en caso de cualquier vulneración a la seguridad de los Datos Personales.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">VIII.</div>
                <div class="titulo_declaracion"> 
                    Respetar los términos y condiciones de, y tratar los Datos Personales de acuerdo con, los avisos de privacidad del cliente.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">IX.</div>
                <div class="titulo_declaracion"> 
                    Dar a conocer a su personal las políticas y procedimientos de protección de datos personales del cliente que deberán seguir durante la prestación de los servicios, así como sus obligaciones en materia de protección de datos personales.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">X.</div>
                <div class="titulo_declaracion"> 
                    Solicitar a su personal firmar la carta compromiso para la protección de datos personales en el formato que proporcione el cliente.
                </div> 
            </div>                                              
            <p class="bottom_parrafo">
                El Prestador de servicios será considerado responsable con las obligaciones del Cliente cuando:   
            </p>
            <div class="pdf_declaraciones">                                                
                <div class="num_declaracion">I.</div>
                <div class="titulo_declaracion"> 
                    Destine o utilice los Datos Personales con una finalidad distinta a la autorizada por la el Cliente;
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">II.</div>
                <div class="titulo_declaracion"> 
                    Efectúe una transferencia, incumpliendo las instrucciones del Cliente.
                </div>
            </div>
            <p class="bottom_parrafo">
                Sujeto a lo dispuesto en la Cláusula Segunda de este Contrato, las partes acuerdan que el Prestador de servicios podrá subcontratar a terceros para la prestación del servicio materia de este Contrato. El prestador de servicios deberá formalizar la relación con el subcontratado a través de cualquier instrumento jurídico que permita acreditar su existencia, alcance y contenido. Dicho instrumento jurídico deberá imponer al subcontratado, respecto del tratamiento de los Datos Personales, por lo menos las mismas obligaciones que se establecen en este Contrato para el prestador de servicios.
            </p>
            <p class="bottom_parrafo">
                En caso de que algún titular de Datos Personales solicite al prestador de servicios el ejercicio de sus derechos de acceso, rectificación, cancelación u oposición, o limitar el uso o divulgación de sus datos, el prestador de servicios deberá referir a dicho titular con la el cliente.
            </p>
            <p class="bottom_parrafo">
                Derivado de lo anterior, el prestador de servicios se obliga con el cliente a responder por los daños y perjuicios que cause por el mal uso de los Datos Personales, así como por cualquier infracción o delito que la autoridad competente determine.   
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Novena. Cesión de derechos, propiedad intelectual y cartera de clientes: </span>
            <p class="sangria bottom_parrafo">
                Una vez celebrado y ejecutado este contrato, el Prestador de Servicios cede al Cliente la propiedad, uso, goce y dominio de los derechos, propiedad intelectual y la cartera de clientes que él le genere y cree al Cliente al momento de realizar los servicios por los cuales se contrata sus servicios.  
            </p>
            <p class="sangria bottom_parrafo">
                Así mismo, el Cliente le otorga por el tiempo que dure este instrumento uso y administración de dichos derechos, propiedad intelectual y cartera de clientes al Prestador de Servicios para la consecución, operación y desarrollo de los Servicios que está prestando.   
            </p>
            <hr>
            <span class="sangria_clausulas pdf_subtitulo_left">Décima. Autonomía de las partes:
            </span>
            <p class="sangria bottom_parrafo">
                Las partes nunca actuarán bajo la dirección ni bajo la dependencia del otro y desempeñarán sus actividades en la forma, lugar y tiempo que estimen pertinentes y de acuerdo con las circunstancias, pero apegándose solamente a sus propios intereses, competencia y capacidad que desee emplear en ellas por lo que no surgirá relación laboral alguna entre ellos por razón de este contrato y/o sus modificaciones.   
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Décima primera. Responsabilidades fiscales y laborales:</span>
            <p class="sangria bottom_parrafo">
                Cada una de las partes se obliga a pagar todos los gastos y los impuestos vigentes o que en el futuro se decreten por cualquier autoridad fiscal, en cuanto a sus actividades mercantiles, teniéndose por entendido que las Partes no serán responsables en forma alguna de las obligaciones de carácter fiscal, así como cualquier otro incumplimiento, delito, falta o infracción que cometa cada una de ellas o las personas que de ellas dependan durante el ejercicio de sus actividades.   
            </p>
            <p class="sangria bottom_parrafo">
                Asimismo, cada Parte tendrá el carácter de patrón por lo que se refiere al personal que contrate y cualquier responsabilidad civil, fiscal, penal o laboral, o de cualquier otra índole, que se relacione con su negocio, será de su exclusiva responsabilidad, por lo que desde este momento, el Prestador de Servicios y el Cliente, se deslindan uno del otro de cualquier accidente, muerte, responsabilidad, caso fortuito o fuerza mayor etc., en la que incurra cada uno por motivo del desempeño de sus servicios. 
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Décima segunda. Acuerdo Único:</span>
            <p class="sangria bottom_parrafo">
                Este documento y anexos adjuntos al presente y cualesquiera otros documentos que se requieran conforme a los mismos o que se mencionan en ellos, contienen todos los pactos de las partes respecto de la materia objeto de este contrato y sobreseen y cancelan todos los acuerdos, contratos, negociaciones y obligaciones, ya sean escritos o verbales, previos respecto de la materia objeto de este contrato y este contrato no podrá renunciarse, otorgarse finiquito, abandonarse, cambiarse o modificarse de ninguna manera, excepto mediante un instrumento debidamente firmado por un funcionario u otro representante legalmente facultado de cada una de las partes contratantes.   
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Décima tercera. Interpretación:
            </span>
            <p class="sangria bottom_parrafo">
                Para el caso de interpretación o incumplimiento del presente contrato y/o de sus adecuaciones, así como para cualquier gestión o notificación de tipo judicial o extrajudicial, las partes se someten expresamente a las leyes y tribunales de la Ciudad de México, Distrito Federal, renunciando desde este momento a cualquier otra jurisdicción que pudiere llegar a corresponderles en el presente o en el futuro, ya sea por virtud de domicilio o de cualquier otra causa.   
            </p>
            <p class="sangria bottom_parrafo"> 
                Las erogaciones que se deriven de esta cláusula, serán cubiertas por cada una de las partes, por partes iguales.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Décima cuarta. Títulos:</span>
            <p class="sangria bottom_parrafo">
                Los títulos que identifican cada cláusula son solamente ilustrativos y no representan ningún carácter interpretativo del clausulado, ni originan obligaciones a las partes.   
            </p>
            <p class="sangria bottom_parrafo">
                Leído que fue el presente contrato de prestación de servicios profesionales y enteradas las Partes de su alcance y contenido, se firma y rubrica en cada hoja, el día indicado en la carátula, en tres tantos originales.   
            </p>
        <div class="firmas">
            <div class="firmas_left">
                <div><b>El Prestador del Servicio</b></div>
                <p>{{  $data_advisers->first_name." ".$data_advisers->last_name }}</p>
            </div>
            <div class="firmas_right">
                <div><b>El Cliente</b></div>
                <p>Rosa Isela Mendieta Gudiño</p>
                <p>Ejecutivos y Consultores Fast, S.A de C.V.</p>
            </div>
        </div>
    </fieldset>
</fieldset>


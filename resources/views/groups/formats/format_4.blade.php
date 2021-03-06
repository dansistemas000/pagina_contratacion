
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
    <h6 class="pdf_subtitulo">CONTRATO DE PRESTACI??N DE SERVICIOS PROFESIONALES</h6>
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
                    Denominaci??n:
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
                    Rosa Isela Mendieta Gudi??o
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Seg??n poder en escritura p??blica:
                </td>
                <td>
                    Instrumento p??blico n??m. 161 de fecha 17 de julio de 2014, otorgada ante la fe del Lic. Marco Antonio Gonz??lez Reynoso, corredor p??blico n??m. 80 del Distrito Federal, cuyo primer testimonio qued?? inscrito en el Registro P??blico del Comercio del Distrito Federal el bajo el folio mercantil electr??nico n??m.: 521361-1
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Constituida en escritura p??blica:
                </td>
                <td>
                    Instrumento p??blico n??m. 161 de fecha 17 de julio de 2014, otorgada ante la fe del Lic. Marco Antonio Gonz??lez Reynoso, corredor p??blico n??m. 80 del Distrito Federal, cuyo primer testimonio qued?? inscrito en el Registro P??blico del Comercio del Distrito Federal el bajo el folio mercantil electr??nico n??m.: 521361-1
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Domicilio:
                </td>
                <td>
                    Calle Mayas n??m. Exterior 19, Colonia Obrera, Delegaci??n Cuauht??moc, Distrito Federal, C.P. 06800.
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
                <th colspan="2">Caracter??sticas del Contrato</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="title">
                    T??rmino Normal:
                </td>
                <td>
                    Un a??o (1)
                </td>   
            </tr>
            <tr>    
                <td class="title">
                    Fecha de celebraci??n:
                </td>
                <td>
                    {{ $today }}
                </td>
            </tr>
            <tr>    
                <td class="title">
                    Lugar de celebraci??n:
                </td>
                <td>
                    M??xico, Ciudad de M??xico
                </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <fieldset>
        <h6 class="pdf_titulo scheduler-border">
            CONTRATO DE PRESTACI??N DE SERVICIOS PROFESIONALES
        </h6>
        <fieldset>
            <p class="parrafo_negrita">
                <span>
                    CONTRATO DE PRESTACI??N DE SERVICIOS PROFESIONALES QUE CELEBRAN POR UNA PARTE 
                    <span class="name">{{ $data_advisers->first_name." ".$data_advisers->last_name }}</span>, A QUI??N EN LO SUCESIVO SE LE DENOMINAR?? EL ???PRESTADOR DE SERVICIOS??? Y POR LA OTRA EJECUTIVOS Y CONSULTORES FAST, S.A DE C.V.  A QUI??N EN LO SUCESIVO SE DENOMINAR?? EL ???CLIENTE??? (Y EN SU CONJUNTO SE DENOMINAR??N LAS ???PARTES???), DE CONFORMIDAD CON LAS SIGUIENTES DECLARACIONES Y CL??USULAS:<o:p></o:p>
                </span>
            </p>

            <h6 class="pdf_subtitulo">DECLARACIONES</h6>

            <div class="pdf_declaraciones">
                <div class="num_declaracion">I.</div>
                <div class="titulo_declaracion"> Declara el Prestador de servicios que:</div>
                <p>
                    a)  Cuenta con la capacidad, preparaci??n, conocimiento y recursos humanos, profesionales y t??cnicos necesarios y suficientes para desempe??ar correctamente el servicio de asesor financiero que mediante este contrato se obliga a prestar al Cliente, por lo que es su voluntad el celebrar el presente Contrato de Prestaci??n de Servicios Profesionales con el Cliente.
                </p>
            </div>

            <div class="pdf_declaraciones">
                <div class="num_declaracion">II.</div>
                <div class="titulo_declaracion"> Declara el Cliente que:</div>
                <p>
                    a)  Es una sociedad mercantil constituida y existente de acuerdo con las leyes de M??xico.
                </p>
                <p>
                    b)  Su representante legal cuenta con todas las facultades suficientes para celebrar este contrato, mismas que no le han sido revocadas o limitadas en forma alguna a esta fecha y que constan en la escritura indicada en la car??tula.
                </p>
                <p>
                    c)  Para la consecuci??n de su objeto social, le es menester celebrar, entre otros, contratos de prestaci??n de servicios profesionales como es en el presente caso.
                </p>
                <p>
                    d)  Que entiende los alcances de los servicios que el Prestador de Servicios le prestar?? y se obliga a pagar la contraprestaci??n que se estipula en este instrumento, por lo que es su voluntad celebrar el presente Contrato de Prestaci??n de Servicios Profesionales con el Prestador de Servicios.
                </p>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">III.</div>
                <div class="titulo_declaracion"> Declaran ambas Partes que:</div>
                <p>
                    a)  Se reconocen mutuamente las generales incorporadas en las car??tulas del presente contrato y en el cap??tulo de Declaraciones.
                </p>
                <p>
                    b)  Para la celebraci??n del presente contrato, no ha mediado error, dolo, mala fe o vicio del consentimiento alguno que pudiere afectar la validez del acto que se celebra.
                </p>                                                    
            </div>
            <p class="sangria bottom_parrafo">
                Habiendo llegado a un acuerdo, las Partes otorgan el presente contrato y consienten en quedar obligadas conforme a lo dispuesto en las siguientes cl??usulas:
            </p>

            <h6 class="pdf_subtitulo">CL??USULAS</h6>
            <span class="sangria_clausulas pdf_subtitulo_left">
                Primera. Objeto:
            </span>
            <p class="sangria bottom_parrafo">
                El Prestador de servicios se obliga a prestar al cliente los siguientes servicios como asesor financiero, mismo que comprenden, sin limitar, a los siguientes:<i>  servicios profesionales consistentes en la asesor??a comercial para la colocaci??n de cr??ditos otorgados por el ???EL CLIENTE???</i>.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">
                Segunda. Contraprestaci??n, facturaci??n y pagos:
            </span>
            <p class="sangria bottom_parrafo">
                Convienen las partes en que la totalidad de los honorarios por la prestaci??n de los servicios ser??n los montos que de com??n acuerdo determinen las partes, en atenci??n a la importancia y especializaci??n de los servicios prestados, determin??ndose por cada evento mediante un importe variable de acuerdo a los servicios prestados durante un periodo mensual. En el entendido, de que ???El Cliente le retendr?? a ???EL PRESTADOR???de los pagos que reciba por concepto de honorarios, la cantidad que resulte aplicable en los t??rminos de lo dispuesto por el art??culo 94 Fracci??n V, de la Ley del Impuesto Sobre la Renta, por lo cual el Cliente le extender?? la constancia de retenci??n correspondiente.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Tercera. Trabajos, adiciones e incrementos:</span>
            <p class="sangria bottom_parrafo">
                El Cliente podr?? encomendar por escrito o por correo electr??nico al Prestador de Servicios trabajos no incluidos en este instrumento. Al efecto, el Prestador de Servicios, presentar?? oportunamente al Cliente las propuestas relacionadas con dichos trabajos adicionales, los que ser??n pagados en principio con lo que dice este instrumento y en caso de ser necesario, en la forma y por los montos que acuerden las partes en su momento.
            </p>
            <p class="sangria_clausulas bottom_parrafo">
                No obstante, el costo del servicio en general, ser?? incrementado de manera anual en el porcentaje que var??e la tasa de inflaci??n promedio correspondiente, tomando como referencia la fecha de este contrato.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Cuarta. Inconformidad por el servicio:</span>
            <p class="sangria bottom_parrafo">
                En caso de que El Cliente se encuentre inconforme con el servicio que se indica en este instrumento, deber?? manifestar por escrito, por correo electr??nico o de viva voz al Prestador de Servicios de sus inconformidades, para que as??, el Prestador de Servicios lo solucione a la brevedad posible.
            </p>
            <p class="sangria_clausulas bottom_parrafo">
                De seguir inconforme con el servicio, el Cliente en cualquier momento y cuando as?? sea su voluntad, puede rescindir este contrato, manifestando de manera escrita o por correo electr??nico su decisi??n.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Quinta. T??rmino del contrato:</span>
            <p class="sangria bottom_parrafo">
                El presente contrato se celebra por el t??rmino indicado en la car??tula del mismo, el cual se computar?? a partir de la fecha de celebraci??n de este contrato. 
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Sexta. Terminaci??n anticipada del contrato:</span>
            <p class="sangria bottom_parrafo">
                El cliente podr?? rescindir el contrato en cualquier momento, sin perjuicio alguno para el, informando por escrito o por correo electr??nico al Prestador de servicios de su decisi??n, sin embargo, en caso de terminaci??n anticipada por parte del Cliente, subsistir?? la obligaci??n del pago de la contraprestaci??n de manera completa, a favor del Prestador de servicios hasta el ??ltimo mes trabajado.
            </p>
            <p class="sangria_clausulas bottom_parrafo">
                Si es voluntad del Prestador de servicios rescindir este instrumento, deber?? de avisar por escrito, mediante una carta en papel membretado dirigida al Cliente, con por los menos tres (3) d??as naturales de anticipaci??n a dejar de prestar su servicio de la decisi??n de dejar de ofrecer sus servicios hacia el Cliente. De no cumplirse en tiempo y forma lo anterior, el prestador de servicios ser?? sujeto al pago de una pena convencional del cincuenta porciento (50%) sobre el valor estipulado en la cl??usula segunda al Cliente.
            </p>
            <p class="sangria_clausulas bottom_parrafo">
                El Prestador de servicios tendr?? cinco d??as naturales para entregar al cliente todo documento relacionado con los servicios que contrat?? el Cliente.    
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">S??ptima. Domicilios:</span>
            <p class="sangria bottom_parrafo">
                Cualquier notificaci??n de car??cter judicial o extrajudicial que requieran realizarse las Partes en relaci??n con el presente contrato, ser?? considerada legalmente realizada, si se hace en los domicilios que las mismas indican en la car??tula del presente contrato y en caso de que se lleven a cabo cambios de domicilio, deber??n de notificarlo previamente a la otra parte, pues en caso contrario, la notificaci??n que se realice al ??ltimo domicilio notificado fehacientemente a la otra parte, ser?? considerada como v??lida y legal.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Octava. Confidencialidad y protecci??n de datos personales:</span>
            <p class="sangria bottom_parrafo">
                Las partes reconocen que la informaci??n contenida en este contrato y todo aquello que por virtud del mismo se derive, tal como los documentos, las negociaciones, los nombres de personas o lugares y dem??s datos que vayan resultando de la ejecuci??n del contrato, son en su conjunto y en lo particular, datos reservados para las partes y para el trato normal y natural del objeto materia del contrato y por lo mismo, no deber??n de ser revelados ni divulgados bajo ninguna circunstancia ni por ning??n medio, bajo pena de tener que responder, quien viole lo aqu?? estipulado, por los da??os y perjuicios ocasionados por la indebida revelaci??n de informaci??n, negociaciones o documentos.
            </p>                                                
            <p class="sangria bottom_parrafo">
                Del mismo modo, las partes se obligan a guardar el secreto y confidencialidad de toda la informaci??n a la que tenga acceso por motivo de este contrato y de su cumplimiento, respecto de todos los procesos llevados a cabo interna y externamente, en los t??rminos que se??ala Ley de la Propiedad Industrial, desde el art??culo 82 y hasta incluso el 86 BIS 1 y reconoce haber le??do y entendido el alcance del art??culo 223 fracciones IV y V de la mencionada ley.    
            </p>
            <p class="sangria bottom_parrafo">
                De acuerdo con el Art??culo 3, fracci??n IX, y 58 de la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares (la ???Ley de Datos???) y los Art??culos 49 a 55 del reglamento de la Ley de Datos, las partes manifiestan que, con motivo de la celebraci??n de este Contrato, el Prestador de Servicios tratar?? y se asegurar?? de que su personal trate los datos personales (seg??n dicho t??rmino se define en la Ley de Datos) que el Cliente les remita, o que recaben o a los que tengan acceso por cuenta del Cliente (los ???Datos Personales???), bajo el car??cter de ???encargado??? (seg??n dicho t??rmino se define en la Ley de Datos) en t??rminos de lo establecido por la Ley de Datos y su reglamento, as?? como por los avisos de privacidad que determine el Cliente y las pol??ticas y procedimientos en materia de protecci??n de datos personales que el Cliente comunique al Prestador de Servicios. El Cliente se reserva el derecho de hacer modificaciones a sus avisos y pol??ticas de privacidad, las cuales ser??n comunicadas al Prestador de Servicios en la forma que determine el Cliente.    
            </p>
            <p class="bottom_parrafo">
                En virtud de lo anterior, el Prestador de Servicios deber?? cumplir con las obligaciones que la Ley de Datos, su Reglamento y dem??s disposiciones aplicables imponen a los encargados, incluyendo sin limitaci??n alguna, las siguientes:    
            </p>

            <div class="pdf_declaraciones">
                <div class="num_declaracion">I.</div>
                <div class="titulo_declaracion"> 
                    Tratar los Datos Personales ??nicamente conforme a las instrucciones del Cliente.
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
                    Implementar las medidas de seguridad conforme a la Ley de Datos, su Reglamento y dem??s disposiciones aplicables.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">IV.</div>
                <div class="titulo_declaracion"> 
                    Guardar confidencialidad respecto de los Datos Personales tratados de conformidad con la Cl??usula S??ptima de este Contrato.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">V.</div>
                <div class="titulo_declaracion"> 
                    Suprimir los Datos Personales objeto de tratamiento una vez terminado el presente Contrato o por instrucciones del cliente, siempre y cuando no exista una disposici??n legal que le exija la conservaci??n de los Datos Personales.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">VI.</div>
                <div class="titulo_declaracion"> 
                    Abstenerse de transferir los Datos Personales salvo en el caso de que El Cliente as?? lo determine, la comunicaci??n derive de una subcontrataci??n o cuando as?? lo requiera la autoridad competente.
                </div>    
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">VII.</div>
                <div class="titulo_declaracion"> 
                    Dar aviso de inmediato al Cliente en caso de cualquier vulneraci??n a la seguridad de los Datos Personales.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">VIII.</div>
                <div class="titulo_declaracion"> 
                    Respetar los t??rminos y condiciones de, y tratar los Datos Personales de acuerdo con, los avisos de privacidad del cliente.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">IX.</div>
                <div class="titulo_declaracion"> 
                    Dar a conocer a su personal las pol??ticas y procedimientos de protecci??n de datos personales del cliente que deber??n seguir durante la prestaci??n de los servicios, as?? como sus obligaciones en materia de protecci??n de datos personales.
                </div>
            </div>
            <div class="pdf_declaraciones">
                <div class="num_declaracion">X.</div>
                <div class="titulo_declaracion"> 
                    Solicitar a su personal firmar la carta compromiso para la protecci??n de datos personales en el formato que proporcione el cliente.
                </div> 
            </div>                                              
            <p class="bottom_parrafo">
                El Prestador de servicios ser?? considerado responsable con las obligaciones del Cliente cuando:   
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
                    Efect??e una transferencia, incumpliendo las instrucciones del Cliente.
                </div>
            </div>
            <p class="bottom_parrafo">
                Sujeto a lo dispuesto en la Cl??usula Segunda de este Contrato, las partes acuerdan que el Prestador de servicios podr?? subcontratar a terceros para la prestaci??n del servicio materia de este Contrato. El prestador de servicios deber?? formalizar la relaci??n con el subcontratado a trav??s de cualquier instrumento jur??dico que permita acreditar su existencia, alcance y contenido. Dicho instrumento jur??dico deber?? imponer al subcontratado, respecto del tratamiento de los Datos Personales, por lo menos las mismas obligaciones que se establecen en este Contrato para el prestador de servicios.
            </p>
            <p class="bottom_parrafo">
                En caso de que alg??n titular de Datos Personales solicite al prestador de servicios el ejercicio de sus derechos de acceso, rectificaci??n, cancelaci??n u oposici??n, o limitar el uso o divulgaci??n de sus datos, el prestador de servicios deber?? referir a dicho titular con la el cliente.
            </p>
            <p class="bottom_parrafo">
                Derivado de lo anterior, el prestador de servicios se obliga con el cliente a responder por los da??os y perjuicios que cause por el mal uso de los Datos Personales, as?? como por cualquier infracci??n o delito que la autoridad competente determine.   
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">Novena. Cesi??n de derechos, propiedad intelectual y cartera de clientes: </span>
            <p class="sangria bottom_parrafo">
                Una vez celebrado y ejecutado este contrato, el Prestador de Servicios cede al Cliente la propiedad, uso, goce y dominio de los derechos, propiedad intelectual y la cartera de clientes que ??l le genere y cree al Cliente al momento de realizar los servicios por los cuales se contrata sus servicios.  
            </p>
            <p class="sangria bottom_parrafo">
                As?? mismo, el Cliente le otorga por el tiempo que dure este instrumento uso y administraci??n de dichos derechos, propiedad intelectual y cartera de clientes al Prestador de Servicios para la consecuci??n, operaci??n y desarrollo de los Servicios que est?? prestando.   
            </p>
            <hr>
            <span class="sangria_clausulas pdf_subtitulo_left">D??cima. Autonom??a de las partes:
            </span>
            <p class="sangria bottom_parrafo">
                Las partes nunca actuar??n bajo la direcci??n ni bajo la dependencia del otro y desempe??ar??n sus actividades en la forma, lugar y tiempo que estimen pertinentes y de acuerdo con las circunstancias, pero apeg??ndose solamente a sus propios intereses, competencia y capacidad que desee emplear en ellas por lo que no surgir?? relaci??n laboral alguna entre ellos por raz??n de este contrato y/o sus modificaciones.   
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">D??cima primera. Responsabilidades fiscales y laborales:</span>
            <p class="sangria bottom_parrafo">
                Cada una de las partes se obliga a pagar todos los gastos y los impuestos vigentes o que en el futuro se decreten por cualquier autoridad fiscal, en cuanto a sus actividades mercantiles, teni??ndose por entendido que las Partes no ser??n responsables en forma alguna de las obligaciones de car??cter fiscal, as?? como cualquier otro incumplimiento, delito, falta o infracci??n que cometa cada una de ellas o las personas que de ellas dependan durante el ejercicio de sus actividades.   
            </p>
            <p class="sangria bottom_parrafo">
                Asimismo, cada Parte tendr?? el car??cter de patr??n por lo que se refiere al personal que contrate y cualquier responsabilidad civil, fiscal, penal o laboral, o de cualquier otra ??ndole, que se relacione con su negocio, ser?? de su exclusiva responsabilidad, por lo que desde este momento, el Prestador de Servicios y el Cliente, se deslindan uno del otro de cualquier accidente, muerte, responsabilidad, caso fortuito o fuerza mayor etc., en la que incurra cada uno por motivo del desempe??o de sus servicios. 
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">D??cima segunda. Acuerdo ??nico:</span>
            <p class="sangria bottom_parrafo">
                Este documento y anexos adjuntos al presente y cualesquiera otros documentos que se requieran conforme a los mismos o que se mencionan en ellos, contienen todos los pactos de las partes respecto de la materia objeto de este contrato y sobreseen y cancelan todos los acuerdos, contratos, negociaciones y obligaciones, ya sean escritos o verbales, previos respecto de la materia objeto de este contrato y este contrato no podr?? renunciarse, otorgarse finiquito, abandonarse, cambiarse o modificarse de ninguna manera, excepto mediante un instrumento debidamente firmado por un funcionario u otro representante legalmente facultado de cada una de las partes contratantes.   
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">D??cima tercera. Interpretaci??n:
            </span>
            <p class="sangria bottom_parrafo">
                Para el caso de interpretaci??n o incumplimiento del presente contrato y/o de sus adecuaciones, as?? como para cualquier gesti??n o notificaci??n de tipo judicial o extrajudicial, las partes se someten expresamente a las leyes y tribunales de la Ciudad de M??xico, Distrito Federal, renunciando desde este momento a cualquier otra jurisdicci??n que pudiere llegar a corresponderles en el presente o en el futuro, ya sea por virtud de domicilio o de cualquier otra causa.   
            </p>
            <p class="sangria bottom_parrafo"> 
                Las erogaciones que se deriven de esta cl??usula, ser??n cubiertas por cada una de las partes, por partes iguales.
            </p>
            <span class="sangria_clausulas pdf_subtitulo_left">D??cima cuarta. T??tulos:</span>
            <p class="sangria bottom_parrafo">
                Los t??tulos que identifican cada cl??usula son solamente ilustrativos y no representan ning??n car??cter interpretativo del clausulado, ni originan obligaciones a las partes.   
            </p>
            <p class="sangria bottom_parrafo">
                Le??do que fue el presente contrato de prestaci??n de servicios profesionales y enteradas las Partes de su alcance y contenido, se firma y rubrica en cada hoja, el d??a indicado en la car??tula, en tres tantos originales.   
            </p>
        <div class="firmas">
            <div class="firmas_left">
                <div><b>El Prestador del Servicio</b></div>
                <p>{{  $data_advisers->first_name." ".$data_advisers->last_name }}</p>
            </div>
            <div class="firmas_right">
                <div><b>El Cliente</b></div>
                <p>Rosa Isela Mendieta Gudi??o</p>
                <p>Ejecutivos y Consultores Fast, S.A de C.V.</p>
            </div>
        </div>
    </fieldset>
</fieldset>


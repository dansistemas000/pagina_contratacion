<style type="text/css">
fieldset{
    font-size: 13px;
}

.format_6 .pdf_titulo, .pdf_subtitulo {
    text-align: left;    
    font-weight: bold;
    margin-bottom: 18px;
    font-size: 13px; 
}
.format_6 p {
    padding-left: 0px;
    text-align: justify;
    margin-bottom: 18px;
}
.format_6 .pdf_declaraciones {
    margin-left:20px;
}
.pdf_declaraciones .num_declaracion {        
    width: 3%;
    display:inline-block;
    float: left;
}
.pdf_declaraciones .titulo_declaracion {    
    display:inline-block;
    float:left;
    margin-bottom: 18px;
    font-weight: 100;
}
.pdf_declaraciones p {
    padding-left: 0px;
    text-align: justify;
    margin-bottom: 20px;
}
.format_6 b{
    font-weight: bold;
}
.format_6 .name{
    text-transform: uppercase;
}
.format_6 table { margin-bottom: 30px; font-size: 13px;  }
.format_6 td { padding:5px; border: none; }
.firmas-6 { font-weight: bold; border: 1px solid #000; text-align: center; }
.firmas-6 .firmas_left { border-right:1px solid #000; text-align:center; width: 49%; display:inline-block; float:left; }
.firmas-6 .firmas_left .left_s { text-align:center; height: 200px; }
.firmas-6 .firmas_left .left_s p {text-align: center;}
.firmas-6 .firmas_left .left_i { border-top:2px solid #000; width: 98%; margin: auto; }
.firmas-6 .firmas_right { text-align:center; width: 49%; display:inline-block; float:right; }
.firmas-6 .firmas_right .right_s { text-align:center; height: 200px; }
.firmas-6 .firmas_right .right_s p {text-align: center;}
.firmas-6 .firmas_right .right_i { border-top:2px solid #000; width: 98%; margin: auto; }
.firmas-6 .firmas_left .left_i .parrafo, .firmas-6 .firmas_right .right_i .parrafo { text-align: center; height: 12px;}
</style>
@php
    $months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $date = getdate();
    $day = $date['mday'];
    $month = $date['mon'];
    $year = $date['year'];
    $date = $day ." de ". $months[$month-1] . " del ". $year;

    $street  = $data_advisers->street." ";
    $street .= $data_advisers->outside_number." ".$data_advisers->inside_number.".";
    $colony =  $data_advisers->colony.".";
    $town = $data_advisers->state.", ".
                $data_advisers->town.".";
    $postal_code = $data_advisers->postal_code;
@endphp

<fieldset class="format_6">
    <p>
        CONTRATO DE CONFIDENCIALIDAD QUE CELEBRAN POR UNA PARTE OFEM VERACRUZ, S.A. DE C.V., REPRESENTADA EN ESTE ACTO POR NYDIA LUZ AHEDO GONZÁLEZ (EN LO SUCESIVO “OFEM VERACRUZ”), Y POR OTRA PARTE <span class="name">{{ $data_advisers->first_name." ".$data_advisers->last_name }}</span>, POR SU PROPIO DERECHO, (EN LO SUCESIVO LA “PERSONA FÍSICA”), DE CONFORMIDAD CON LAS SIGUIENTES DECLARACIONES, DEFINICIONES Y CLAÚSULAS:
    </p>

    <h6 class="pdf_titulo">D E C L A R A C I O N E S</h6>

    <div class="pdf_declaraciones">
        <div class="num_declaracion">I.</div>
        <div class="titulo_declaracion"> 
            I.  Declara <b>OFEM VERACRUZ</b> a través de su representante legal, lo siguiente:
        </div>
        <p>
            a) Que es una Sociedad Mercantil debidamente organizada y existente de conformidad con las leyes de los Estados Unidos Mexicanos, según consta en la Escritura Pública No. 20,205 de fecha 18 de septiembre de 2007, otorgada ante la fe del Notario Público No. 214 del Distrito Federal (hoy Ciudad de México), Lic. Efraín Martín Virués y Lazos, inscrita en el Registro Público de Comercio de la Ciudad de México, bajo el Folio Mercantil No. 373024 de fecha 13 de noviembre de 2007.
        </p>
        <p>
            b) Que en virtud de la relación comercial que existe entre las <b>PARTES</b>, y derivado del hecho de que la <b>PERSONA FÍSICA</b> ha tenido o tendrá acceso a información o documentos de carácter “<u>CONFIDENCIAL</u>” ya sea de la propia <b>OFEM VERACRUZ </b> y/o de cualquier otra de las <b>EMPRESAS</b> del Grupo y/o de sus Clientes, ya sean de <b>OFEM VERACRUZ </b> o de alguna de las <b>EMPRESAS</b>, es el deseo de <b>OFEM VERACRUZ </b> celebrar el presente CONTRATO DE CONFIDENCIALIDAD sujeto a los términos y condiciones que más adelante se señalan.
        </p>
        <p>
            c) Que su representante legal cuenta con todos los poderes y facultades necesarios para obligar a su representada en los términos y condiciones del presente Contrato de acuerdo a la Escritura Pública No. 56,731 de fecha 6 de marzo de 2015, misma que fue otorgada ante la fe del Notario Público No. 181 del Distrito Federal (hoy Ciudad de México), Lic. Miguel Soberón Mainero, y que dichas facultades no le han sido revocadas, limitadas ni modificadas a la fecha del presente, de tal forma que pudiera llegar a afectar la validez y exigibilidad del presente Contrato.
        </p>
    </div>
    <div class="pdf_declaraciones">
        <div class="num_declaracion">II.</div>
        <div class="titulo_declaracion"> 
            Declara la <b>PERSONA FÍSICA</b> por su propio derecho y bajo protesta de decir verdad, lo siguiente:
        </div>
        <p>
            a) Que es una persona física con capacidad natural y legal suficiente para obligarse en los términos del presente Contrato.
        </p>
        <p>
            b) Que en virtud de la relación comercial que mantiene con <b>OFEM VERACRUZ</b>, y/o en cualquier otra de las <b>EMPRESAS</b> del Grupo y/o de sus Clientes ya sean de <b>OFEM VERACRUZ</b> o de alguna de las EMPRESAS, es su deseo celebrar el presente CONTRATO DE CONFIDENCIALIDAD sujeto a los términos y condiciones que más adelante se señalan.
        </p>
        <p>
            c) Que en virtud de la relación comercial que existe entre las <b>PARTES</b>, y derivado del hecho de que la <b>PERSONA FÍSICA</b> ha tenido y tendrá acceso a información o documentos de carácter “<u>CONFIDENCIAL</u>”, por medio del presente Contrato la <b>PERSONA FÍSICA</b> se obliga a considerar toda la información y documentos que se relacionen, directa o indirectamente, con lo que se defina en el presente Contrato como “<u>CONFIDENCIAL</u>” como un “<u>SECRETO INDUSTRIAL</u>” y nunca deberá divulgar de manera directa o indirectamente dicha información, ya sean por vía verbal, por cualquier tipo de documentos, por medios electrónicos o por cualquier otro medio a terceras personas, así como duplicarla de cualquier forma posible, obligándose a conservar y tomar las medidas que sean necesarias para que en todo momento dicha información, documentos o mensajes de datos sea mantenida estrictamente “<u>CONFIDENCIAL</u>”.
        </p>
        <p>
            d) Que conoce la importancia y alcance de sus obligaciones en virtud del presente instrumento.
        </p>
        <p>
            e) Que el presente Contrato es celebrado sin violencia, dolo, error, engaño o mala fe de ninguna de las <b>PARTES</b>, por lo que no existe vicio del consentimiento alguno que límite o pueda limitar los efectos jurídicos del presente CONTRATO DE CONFIDENCIALIDAD.
        </p>                                                
        <p>Declarado lo anterior, las <b>PARTES</b> establecen las siguientes:</p>
        <h6 class="pdf_subtitulo">D E F I N I C I O N E S</h6>
        <p>
            <b>CONFIDENCIAL.-</b> 
            Para todos los efectos legales a que haya lugar, se entenderá por CONFIDENCIAL toda aquella información, ya sean por vía oral, por cualquier tipo de documentos, por medios electrónicos o cualquier otro medio, que guarden una relación directa o indirecta con la información a la cual tenga o pueda tener acceso “<b>EL FISICO</b>” de <b>OFEM VERACRUZ </b> y/o de cualquier otra de las <b>EMPRESAS</b> del GRUPO OFEM y/o de sus Clientes ya sean de <b>OFEM VERACRUZ</b> o de alguna de las <b>EMPRESAS</b> del GRUPO OFEM, siendo considerados entre esta información, de manera enunciativa más no limitativa, la que pueda incluir información relativa a los reportes previstos en las Disposiciones de carácter general a que se refieren los artículos 115 de la Ley de Instituciones de Crédito en relación con el 87-D de la Ley General de Organizaciones y Actividades Auxiliares del Crédito y 95-Bis de este último ordenamiento, aplicables a las sociedades financieras de objeto Múltiple publicada el día 17 de marzo de 2011 , información de mercadotecnia, sistemas, asuntos jurídicos, recursos humanos, planes de negocios, bases de datos, procedimientos internos, logística, importaciones y/o exportaciones, información fiscal, información financiera, información relacionada con accionistas y socios, precios, proveedores, clientes, planes de negocios, socios estratégicos, medios y formas de distribución de productos y/o de prestación de servicios, “know how” y toda aquella información que de manera directa o indirecta se relacione con los puntos enunciados anteriormente, por significarle una ventaja competitiva o económica frente a terceros, debiendo en todo momento “<b>EL FISICO</b>” mantener dicha información, ya sean por vía oral, por cualquier tipo de documentos, por medios electrónicos o cualquier otro medio, fuera del alcance del público en general así como ser tratada como privada y no para su publicación o divulgación de ninguna especie. “<b>EL FISICO</b>” tendrá estrictamente prohibido 1) Alertar o dar aviso a Clientes respecto de cualquier referencia que sobre ellos se haga en los reportes 2) Alertar o dar aviso a Clientes o a algún tercero respecto de cualquiera de los requerimientos de información o documentación previstos en la fracción IX de la 39ª de las Disposiciones de carácter general a que se refieren los artículos 115 de la Ley de Instituciones de Crédito en relación con el 87-D de la Ley General de Organizaciones y Actividades Auxiliares del Crédito y 95-Bis de este último ordenamiento, aplicables a las sociedades financieras de objeto Múltiple 3) Alertar o dar aviso a Clientes o a algún tercero sobre la existencia o presentación de órdenes de aseguramiento a que se refiere la fracción IX de la 39ª de las Disposiciones indicadas en el numeral anterior, antes de que sean ejecutadas.
        </p>
        <p>
            <b>CONFIDENCIALIDAD.-</b>
            Para todos los efectos legales a que haya lugar, se entenderá por <u>CONFIDENCIALIDAD</u>, el deber de mantener toda información, ya sean por vía oral, por cualquier tipo de documentos, por medios electrónicos o cualquier otro medio relacionado, directa o indirectamente, con la información considerada en el presente Contrato como <u>CONFIDENCIAL</u>, bajo el más estricto <u>SECRETO</u>, evitando hacer uso de ella en beneficio propio o evitando que cualquier tercero pueda tener acceso a ella.
        </p>
        <p>
            <b>EMPRESAS.-</b>
            Para los efectos del presente Contrato serán de manera enunciativa más no limitativa, las Sociedades presentes o futuras pertenecientes al GRUPO OFEM ya sea como Holding, subsidiarias y/o afiliadas.
        </p>
        <p>
            <b>FUERZA MAYOR.-</b>
            Para todos los efectos legales, se refiere a cualquier situación o problema más allá del control razonable de las <b>PARTES</b>, entre los que se encuentran de manera enunciativa más no limitativa a truenos, relámpagos, terremoto, tormentas, inundaciones, heladas, huelgas, concurso mercantil, guerra civil, etc.
        </p>
        <p>
           <b>PARTES.-</b>
           Para todos los efectos legales a que haya lugar, se refiere a <b>OFEM VERACRUZ</b>, EMPRESAS y a la <b>PERSONA FÍSICA</b>. 
        </p>
        <p>
            En virtud de lo anterior, las <b>PARTES</b> convienen en obligarse de conformidad con las siguientes:
        </p>
        <h6 class="pdf_subtitulo">C L Á U S U L A S</h6>
        <p>
            <b>PRIMERA.</b> <em>Objeto</em>.-
            La <b>PERSONA FÍSICA</b> se obliga expresamente en este acto a no divulgar, directa o indirectamente ni bajo ninguna circunstancia, en el presente y en el futuro, y guardar absoluta <u>CONFIDENCIALIDAD</u> en todo momento, respecto a toda información, ya sea por vía oral, por cualquier tipo de documentos, por medios electrónicos o cualquier otro medio a los que tenga o pueda tener acceso en virtud de la relación mercantil que mantiene con <b>OFEM VERACRUZ</b> y/o de cualquier otra de las <b>EMPRESAS</b> para las que tenga acceso de acuerdo con las instrucciones que <b>OFEM VERACRUZ</b> le haya dado y/o de sus Clientes ya sean de <b>OFEM VERACRUZ</b> o de alguna de las <b>EMPRESAS</b> y la cual se encuentre considerada como <u>CONFIDENCIAL</u> en los términos del presente Contrato.
        </p>
        <p>
            Asimismo, la <b>PERSONA FÍSICA</b> se obliga a conservar y tomar las medidas que sean necesarias para que en todo momento dicha información, ya sea por vía oral, por cualquier tipo de documentos, por medios electrónicos o cualquier otro medio a los que tenga o pueda tener acceso, sean mantenidos estrictamente <u>CONFIDENCIALES</u> por considerarlos un “<u>SECRETO INDUSTRIAL</u>” en los términos de los Artículos 82 y 85 de la Ley de la Propiedad Industrial.
        </p>
        <p>
            Dicha obligación de cuidado aquí contenida, prolongará sus efectos hasta cinco (5) años después de que la relación comercial entre la <b>PERSONA FÍSICA</b> y <b>OFEM VERACRUZ</b> termine, por lo que si la <b>PERSONA FÍSICA</b> no observare lo aquí establecido, deberá indemnizar a <b>OFEM VERACRUZ</b>, o en su caso a las <b>EMPRESAS</b>, por los daños y perjuicios producto de la divulgación de dicha información, incluyendo de forma enunciativa mas no limitativa, honorarios de abogados, papelería, costos de telecomunicaciones de cualesquier especie, así como el pago de la PENA CONVENCIONAL contenida en la Cláusula Sexta, toda vez que dicha pena ha sido impuesta únicamente por no haber prestado la obligación de la manera convenida tal como lo dispone el artículo 1846 del Código Civil para el Distrito Federal, independientemente de cualesquier otras penas a la que se hiciere acreedor derivadas del ejercicio de acciones de cualquier naturaleza por parte del contratante afectado.
        </p>
        <p>
            <b>SEGUNDA.</b> <em>Cesión</em>.-
            La PERSONA FÍSICA se obliga expresamente en este acto no ceder, parcial o totalmente a un tercero, ya sea a través de cualesquier medio legal, judicial o no judicial, los derechos u obligaciones que deriven del presente Contrato. El incumplimiento de esta Cláusula facultará a <b>OFEM VERACRUZ</b> a recibir una PENA CONVENCIONAL en los términos establecidos en la Cláusula Sexta del presente Contrato, independientemente de lo establecido por la Cláusula Primera del presente instrumento.
        </p>
        <p>
           <b>TERCERA.</b> <em>No Relación Laboral</em>.-
            El presente Contrato no crea ni constituye una relación laboral, asociación, sociedad, mandato o acuerdo similar entre las <b>PARTES</b>. 
        </p>
        <p>
           <b>CUARTA.</b> <em>Vigencia</em>.-
            Debido a que el presente Contrato deriva directamente de la relación comercial que sostiene la <b>PERSONA FÍSICA</b> con <b>OFEM VERACRUZ</b>, la vigencia del presente Contrato se extenderá hasta cinco (5) años después de que la relación comercial entre la <b>PERSONA FÍSICA</b> y <b>OFEM VERACRUZ</b> termine.
        </p>
        <p>
           <b>QUINTA.</b> <em>Fuerza Mayor</em>.-
            Debido a que las responsabilidades asumidas por la <b>PERSONA FÍSICA</b> en el presente Contrato son independientes y de que las mismas pueden ser reclamadas durante la vigencia del mismo, no podrá ser invocada por éste, causas de FUERZA MAYOR. En consecuencia los efectos de este Contrato prevalecerán sobre cualquier situación y dichos efectos continuarán en vigor durante la vigencia del mismo.
        </p>
        <p>
            <b>SEXTA.</b> <em>Pena Convencional</em>.-
            <b>La PERSONA FÍSICA</b> acepta y se obliga expresamente a que si llegaré a faltar a su obligación de <u>CONFIDENCIALIDAD</u> para con <b>OFEM VERACRUZ</b> y/o de cualquier otra de las <b>EMPRESAS</b> para la que tenga que tenga acceso de acuerdo con las instrucciones que <b>OFEM VERACRUZ</b> le haya dado y/o de sus Clientes ya sean de <b>OFEM VERACRUZ</b> o de alguna de las <b>EMPRESAS</b>, de manera directa o indirectamente, o cualesquier otra tercera persona a la que le hubiere concedido el acceso o contacto, directa o indirectamente a la información <u>CONFIDENCIAL</u>, ya sea por vía oral, por cualquier tipo de documentos, por medios electrónicos o cualquier otro medio a los que tenga o pueda tener acceso referidos en el presente Contrato como <u>CONFIDENCIAL</u>, deberá cubrir a <b>OFEM VERACRUZ</b> la cantidad de $50,000.00 (Cincuenta Mil Pesos 00/100 M.N.) por concepto de PENA CONVENCIONAL.
        </p>
        <p>
            <b>SÉPTIMA.</b> <em>Devolución de información</em>.-
            La <b>PERSONA FÍSICA</b> se obliga expresamente en este acto, a que en el momento en que <b>OFEM VERACRUZ</b> se lo solicite, deberá hacer la devolución y/o entrega de toda la información que este en su poder, ya sean cualquier tipo de documentos o de medios electrónicos que se encuentren amparados bajo el presente Contrato y que sea posible su remisión. 
        </p>
        <p>
            Asimismo la <b>PERSONA FÍSICA</b> en este acto, se obliga a no duplicar ni copiar, bajo ninguna circunstancia, la información que tenga o pueda llegar a tener, ya sea por cualquier tipo de documentos, por medios electrónicos o cualquier otro medio. 
        </p>
        <p>
            <b>OCTAVA.</b> <em>Vicios del Consentimiento</em>.- Queda expresamente pactado por las <b>PARTES</b> que el presente Contrato es celebrado sin violencia, dolo, error, engaño o mala fe de ninguna de las <b>PARTES</b>, por lo que no existe vicio de consentimiento alguno que limite o pueda limitar los efectos jurídicos del presente Contrato.
        </p>
        <p>
            <b>NOVENA.</b> <em>Avisos</em>.- Todas las comunicaciones que las <b>PARTES</b> deban o deseen hacerse en relación con el presente Contrato, incluyendo de manera enunciativa cualquier aviso, demanda, requerimiento, consentimiento, aprobación, designación, especificación, se enviarán por escrito con acuse de recibo, a los siguientes domicilios y en atención de los siguientes funcionarios:
        </p>

        <table>
            <tbody>
                <tr>
                    <td width="50%"><h6 class="pdf_subtitulo">OFEM VERACRUZ</h6></td>
                    <td width="50%"><h6 class="pdf_subtitulo">PERSONA FÍSICA</h6></td>
                </tr>
                <tr>    
                    <td>Tiburcio Montiel No.14.</td>
                    <td>{{ $street }}</td>
                </tr> 
                <tr>
                    <td>Col. San Miguel Chapultepec.</td>
                    <td>Col. {{ $colony }}</td>
                </tr>      
                <tr>
                    <td>México, Ciudad de México.</td>
                    <td>{{ $town }}</td>
                </tr>      
                <tr>    
                    <td>C.P. 11850</td>
                    <td>{{ "C.P. ".$postal_code }}</td>
                </tr>
            </tbody>
        </table>
        <div style="clear: both;"></div>
        <p>
            <b>DÉCIMA.</b> <em>Totalidad del Contrato</em>.- El presente Contrato una vez debidamente firmado por las <b>PARTES</b>, constituye el acuerdo final y completo entre las <b>PARTES</b>, por lo que cualquier acuerdo, declaración, documento, promesa o convenio posterior, sea oral o escrito entre las mismas, que no sea incorporado al presente Contrato, en los términos señalados en la Cláusula Décima Primera del mismo, se considerará sin ninguna fuerza o efecto legal alguno.  
        </p>
        <p>
            <b>DÉCIMA PRIMERA.</b> <em>Modificaciones</em>.-
            Este Contrato no podrá ser modificado o alterado excepto mediante la celebración de un instrumento por escrito suscrito por las <b>PARTES</b> que celebran este Contrato, una vez suscritas, dichas modificaciones se convertirán en una parte integrante del presente Contrato, sujeto a todos los términos y condiciones contenidos en el mismo y tendrán plena fuerza y causarán todos sus efectos legales.
        </p>
        <p>
            <b>DÉCIMA SEGUNDA.</b> <em>Encabezados</em>.-
            Los encabezados que hacen referencia al contenido del tipo de relaciones particulares en este Contrato, son insertados únicamente para la conveniencia de las <b>PARTES</b> y de ninguna manera podrán considerarse como parte de este Contrato o como limitación al alcance de cualquiera de los términos o estipulaciones del mismo.
        </p>
        <p>
            <b>DÉCIMA TERCERA.</b> <em>Supervivencia</em>.-
            Si cualquier término, convenio, condición o disposición del presente Contrato o la aplicación del mismo, a cualesquier persona o circunstancia, fuese en cualquier extensión considerada como inválida o inejecutable, el resto de este Contrato o su aplicación de dicho término o disposición a dicha persona o circunstancia, excepto por lo que se considere como inválido o inejecutable, no se verá afectado por lo anterior y cada término, convenio, condición o disposición del presente Contrato será válida y será ejecutada hasta la extensión más completa permitida por la Ley.
        </p>
        <div style="clear: both;"></div>
        <p>
            <b>DÉCIMA CUARTA. <em>No renuncia</em>.-
            La inactividad, falta de queja o acción por parte de OFEM VERACRUZ en relación con el incumplimiento o cualesquier otro procedimiento derivado del presente Contrato, no se estimará como una renuncia a sus derechos por permanecer inactiva o no efectúe los procedimientos establecidos en el presente Contrato.</b>
        </p>
        <p>
            <b>DÉCIMA QUINTA.</b> <em>Leyes y Jurisdicción Aplicable</em>.-
            Para la interpretación del presente Contrato, las <b>PARTES</b> se someten expresamente a las leyes de la Ciudad de México, renunciando a cualquier otro fuero que les pudiera corresponder en virtud de sus domicilios presentes o futuros o por cualquier otro motivo. Por lo que las <b>PARTES</b> para el cumplimiento y solución de controversias que se deriven del presente Contrato, se someten expresamente a la jurisdicción de los tribunales competente de la Ciudad de México, renunciando a cualquier otro fuero que les pudiera corresponder en virtud de sus domicilios presentes o futuros o por cualquier otra causa.
        </p>
        <p>
            Enteradas las PARTES del contenido y alcance legal del presente CONTRATO DE CONFIDENCIALIDAD, lo firman en dos (2) ejemplares, entendiéndose que todos y cada uno de ellos forman un sólo documento, en la Ciudad de México,  al día {{ $date }}.  
        </p>
        
        <div class="firmas-6">                                                        
            <div class="firmas_left">
                <div class="left_s">
                    <p>OFEM VERACRUZ, S.A. DE C.V.</p>    
                </div>
                <div class="left_i">
                    <div class="parrafo"><b>LIC. NYDIA LUZ AHEDO GONZÁLEZ</b></div>
                    <div class="parrafo"><b>Representante</b></div>
                </div>
            </div>
            <div class="firmas_right">
                <div class="right_s">
                    <p>PERSONA FÍSICA</p>
                </div>
                <div class="right_i">
                    <div class="parrafo"><b>{{ $data_advisers->first_name." ". $data_advisers->last_name }}</b></div>
                    <div class="parrafo"><b>Por derecho propio</b></div>
                </div>
            </div>
        </div>
    </div>
</fieldset>

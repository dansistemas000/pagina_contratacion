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
        CONTRATO DE CONFIDENCIALIDAD QUE CELEBRAN POR UNA PARTE OFEM VERACRUZ, S.A. DE C.V., REPRESENTADA EN ESTE ACTO POR NYDIA LUZ AHEDO GONZ??LEZ (EN LO SUCESIVO ???OFEM VERACRUZ???), Y POR OTRA PARTE <span class="name">{{ $data_advisers->first_name." ".$data_advisers->last_name }}</span>, POR SU PROPIO DERECHO, (EN LO SUCESIVO LA ???PERSONA F??SICA???), DE CONFORMIDAD CON LAS SIGUIENTES DECLARACIONES, DEFINICIONES Y CLA??SULAS:
    </p>

    <h6 class="pdf_titulo">D E C L A R A C I O N E S</h6>

    <div class="pdf_declaraciones">
        <div class="num_declaracion">I.</div>
        <div class="titulo_declaracion"> 
            I.  Declara <b>OFEM VERACRUZ</b> a trav??s de su representante legal, lo siguiente:
        </div>
        <p>
            a) Que es una Sociedad Mercantil debidamente organizada y existente de conformidad con las leyes de los Estados Unidos Mexicanos, seg??n consta en la Escritura P??blica No. 20,205 de fecha 18 de septiembre de 2007, otorgada ante la fe del Notario P??blico No. 214 del Distrito Federal (hoy Ciudad de M??xico), Lic. Efra??n Mart??n Viru??s y Lazos, inscrita en el Registro P??blico de Comercio de la Ciudad de M??xico, bajo el Folio Mercantil No. 373024 de fecha 13 de noviembre de 2007.
        </p>
        <p>
            b) Que en virtud de la relaci??n comercial que existe entre las <b>PARTES</b>, y derivado del hecho de que la <b>PERSONA F??SICA</b> ha tenido o tendr?? acceso a informaci??n o documentos de car??cter ???<u>CONFIDENCIAL</u>??? ya sea de la propia <b>OFEM VERACRUZ </b> y/o de cualquier otra de las <b>EMPRESAS</b> del Grupo y/o de sus Clientes, ya sean de <b>OFEM VERACRUZ </b> o de alguna de las <b>EMPRESAS</b>, es el deseo de <b>OFEM VERACRUZ </b> celebrar el presente CONTRATO DE CONFIDENCIALIDAD sujeto a los t??rminos y condiciones que m??s adelante se se??alan.
        </p>
        <p>
            c) Que su representante legal cuenta con todos los poderes y facultades necesarios para obligar a su representada en los t??rminos y condiciones del presente Contrato de acuerdo a la Escritura P??blica No. 56,731 de fecha 6 de marzo de 2015, misma que fue otorgada ante la fe del Notario P??blico No. 181 del Distrito Federal (hoy Ciudad de M??xico), Lic. Miguel Sober??n Mainero, y que dichas facultades no le han sido revocadas, limitadas ni modificadas a la fecha del presente, de tal forma que pudiera llegar a afectar la validez y exigibilidad del presente Contrato.
        </p>
    </div>
    <div class="pdf_declaraciones">
        <div class="num_declaracion">II.</div>
        <div class="titulo_declaracion"> 
            Declara la <b>PERSONA F??SICA</b> por su propio derecho y bajo protesta de decir verdad, lo siguiente:
        </div>
        <p>
            a) Que es una persona f??sica con capacidad natural y legal suficiente para obligarse en los t??rminos del presente Contrato.
        </p>
        <p>
            b) Que en virtud de la relaci??n comercial que mantiene con <b>OFEM VERACRUZ</b>, y/o en cualquier otra de las <b>EMPRESAS</b> del Grupo y/o de sus Clientes ya sean de <b>OFEM VERACRUZ</b> o de alguna de las EMPRESAS, es su deseo celebrar el presente CONTRATO DE CONFIDENCIALIDAD sujeto a los t??rminos y condiciones que m??s adelante se se??alan.
        </p>
        <p>
            c) Que en virtud de la relaci??n comercial que existe entre las <b>PARTES</b>, y derivado del hecho de que la <b>PERSONA F??SICA</b> ha tenido y tendr?? acceso a informaci??n o documentos de car??cter ???<u>CONFIDENCIAL</u>???, por medio del presente Contrato la <b>PERSONA F??SICA</b> se obliga a considerar toda la informaci??n y documentos que se relacionen, directa o indirectamente, con lo que se defina en el presente Contrato como ???<u>CONFIDENCIAL</u>??? como un ???<u>SECRETO INDUSTRIAL</u>??? y nunca deber?? divulgar de manera directa o indirectamente dicha informaci??n, ya sean por v??a verbal, por cualquier tipo de documentos, por medios electr??nicos o por cualquier otro medio a terceras personas, as?? como duplicarla de cualquier forma posible, oblig??ndose a conservar y tomar las medidas que sean necesarias para que en todo momento dicha informaci??n, documentos o mensajes de datos sea mantenida estrictamente ???<u>CONFIDENCIAL</u>???.
        </p>
        <p>
            d) Que conoce la importancia y alcance de sus obligaciones en virtud del presente instrumento.
        </p>
        <p>
            e) Que el presente Contrato es celebrado sin violencia, dolo, error, enga??o o mala fe de ninguna de las <b>PARTES</b>, por lo que no existe vicio del consentimiento alguno que l??mite o pueda limitar los efectos jur??dicos del presente CONTRATO DE CONFIDENCIALIDAD.
        </p>                                                
        <p>Declarado lo anterior, las <b>PARTES</b> establecen las siguientes:</p>
        <h6 class="pdf_subtitulo">D E F I N I C I O N E S</h6>
        <p>
            <b>CONFIDENCIAL.-</b> 
            Para todos los efectos legales a que haya lugar, se entender?? por CONFIDENCIAL toda aquella informaci??n, ya sean por v??a oral, por cualquier tipo de documentos, por medios electr??nicos o cualquier otro medio, que guarden una relaci??n directa o indirecta con la informaci??n a la cual tenga o pueda tener acceso ???<b>EL FISICO</b>??? de <b>OFEM VERACRUZ </b> y/o de cualquier otra de las <b>EMPRESAS</b> del GRUPO OFEM y/o de sus Clientes ya sean de <b>OFEM VERACRUZ</b> o de alguna de las <b>EMPRESAS</b> del GRUPO OFEM, siendo considerados entre esta informaci??n, de manera enunciativa m??s no limitativa, la que pueda incluir informaci??n relativa a los reportes previstos en las Disposiciones de car??cter general a que se refieren los art??culos 115 de la Ley de Instituciones de Cr??dito en relaci??n con el 87-D de la Ley General de Organizaciones y Actividades Auxiliares del Cr??dito y 95-Bis de este ??ltimo ordenamiento, aplicables a las sociedades financieras de objeto M??ltiple publicada el d??a 17 de marzo de 2011 , informaci??n de mercadotecnia, sistemas, asuntos jur??dicos, recursos humanos, planes de negocios, bases de datos, procedimientos internos, log??stica, importaciones y/o exportaciones, informaci??n fiscal, informaci??n financiera, informaci??n relacionada con accionistas y socios, precios, proveedores, clientes, planes de negocios, socios estrat??gicos, medios y formas de distribuci??n de productos y/o de prestaci??n de servicios, ???know how??? y toda aquella informaci??n que de manera directa o indirecta se relacione con los puntos enunciados anteriormente, por significarle una ventaja competitiva o econ??mica frente a terceros, debiendo en todo momento ???<b>EL FISICO</b>??? mantener dicha informaci??n, ya sean por v??a oral, por cualquier tipo de documentos, por medios electr??nicos o cualquier otro medio, fuera del alcance del p??blico en general as?? como ser tratada como privada y no para su publicaci??n o divulgaci??n de ninguna especie. ???<b>EL FISICO</b>??? tendr?? estrictamente prohibido 1) Alertar o dar aviso a Clientes respecto de cualquier referencia que sobre ellos se haga en los reportes 2) Alertar o dar aviso a Clientes o a alg??n tercero respecto de cualquiera de los requerimientos de informaci??n o documentaci??n previstos en la fracci??n IX de la 39?? de las Disposiciones de car??cter general a que se refieren los art??culos 115 de la Ley de Instituciones de Cr??dito en relaci??n con el 87-D de la Ley General de Organizaciones y Actividades Auxiliares del Cr??dito y 95-Bis de este ??ltimo ordenamiento, aplicables a las sociedades financieras de objeto M??ltiple 3) Alertar o dar aviso a Clientes o a alg??n tercero sobre la existencia o presentaci??n de ??rdenes de aseguramiento a que se refiere la fracci??n IX de la 39?? de las Disposiciones indicadas en el numeral anterior, antes de que sean ejecutadas.
        </p>
        <p>
            <b>CONFIDENCIALIDAD.-</b>
            Para todos los efectos legales a que haya lugar, se entender?? por <u>CONFIDENCIALIDAD</u>, el deber de mantener toda informaci??n, ya sean por v??a oral, por cualquier tipo de documentos, por medios electr??nicos o cualquier otro medio relacionado, directa o indirectamente, con la informaci??n considerada en el presente Contrato como <u>CONFIDENCIAL</u>, bajo el m??s estricto <u>SECRETO</u>, evitando hacer uso de ella en beneficio propio o evitando que cualquier tercero pueda tener acceso a ella.
        </p>
        <p>
            <b>EMPRESAS.-</b>
            Para los efectos del presente Contrato ser??n de manera enunciativa m??s no limitativa, las Sociedades presentes o futuras pertenecientes al GRUPO OFEM ya sea como Holding, subsidiarias y/o afiliadas.
        </p>
        <p>
            <b>FUERZA MAYOR.-</b>
            Para todos los efectos legales, se refiere a cualquier situaci??n o problema m??s all?? del control razonable de las <b>PARTES</b>, entre los que se encuentran de manera enunciativa m??s no limitativa a truenos, rel??mpagos, terremoto, tormentas, inundaciones, heladas, huelgas, concurso mercantil, guerra civil, etc.
        </p>
        <p>
           <b>PARTES.-</b>
           Para todos los efectos legales a que haya lugar, se refiere a <b>OFEM VERACRUZ</b>, EMPRESAS y a la <b>PERSONA F??SICA</b>. 
        </p>
        <p>
            En virtud de lo anterior, las <b>PARTES</b> convienen en obligarse de conformidad con las siguientes:
        </p>
        <h6 class="pdf_subtitulo">C L ?? U S U L A S</h6>
        <p>
            <b>PRIMERA.</b> <em>Objeto</em>.-
            La <b>PERSONA F??SICA</b> se obliga expresamente en este acto a no divulgar, directa o indirectamente ni bajo ninguna circunstancia, en el presente y en el futuro, y guardar absoluta <u>CONFIDENCIALIDAD</u> en todo momento, respecto a toda informaci??n, ya sea por v??a oral, por cualquier tipo de documentos, por medios electr??nicos o cualquier otro medio a los que tenga o pueda tener acceso en virtud de la relaci??n mercantil que mantiene con <b>OFEM VERACRUZ</b> y/o de cualquier otra de las <b>EMPRESAS</b> para las que tenga acceso de acuerdo con las instrucciones que <b>OFEM VERACRUZ</b> le haya dado y/o de sus Clientes ya sean de <b>OFEM VERACRUZ</b> o de alguna de las <b>EMPRESAS</b> y la cual se encuentre considerada como <u>CONFIDENCIAL</u> en los t??rminos del presente Contrato.
        </p>
        <p>
            Asimismo, la <b>PERSONA F??SICA</b> se obliga a conservar y tomar las medidas que sean necesarias para que en todo momento dicha informaci??n, ya sea por v??a oral, por cualquier tipo de documentos, por medios electr??nicos o cualquier otro medio a los que tenga o pueda tener acceso, sean mantenidos estrictamente <u>CONFIDENCIALES</u> por considerarlos un ???<u>SECRETO INDUSTRIAL</u>??? en los t??rminos de los Art??culos 82 y 85 de la Ley de la Propiedad Industrial.
        </p>
        <p>
            Dicha obligaci??n de cuidado aqu?? contenida, prolongar?? sus efectos hasta cinco (5) a??os despu??s de que la relaci??n comercial entre la <b>PERSONA F??SICA</b> y <b>OFEM VERACRUZ</b> termine, por lo que si la <b>PERSONA F??SICA</b> no observare lo aqu?? establecido, deber?? indemnizar a <b>OFEM VERACRUZ</b>, o en su caso a las <b>EMPRESAS</b>, por los da??os y perjuicios producto de la divulgaci??n de dicha informaci??n, incluyendo de forma enunciativa mas no limitativa, honorarios de abogados, papeler??a, costos de telecomunicaciones de cualesquier especie, as?? como el pago de la PENA CONVENCIONAL contenida en la Cl??usula Sexta, toda vez que dicha pena ha sido impuesta ??nicamente por no haber prestado la obligaci??n de la manera convenida tal como lo dispone el art??culo 1846 del C??digo Civil para el Distrito Federal, independientemente de cualesquier otras penas a la que se hiciere acreedor derivadas del ejercicio de acciones de cualquier naturaleza por parte del contratante afectado.
        </p>
        <p>
            <b>SEGUNDA.</b> <em>Cesi??n</em>.-
            La PERSONA F??SICA se obliga expresamente en este acto no ceder, parcial o totalmente a un tercero, ya sea a trav??s de cualesquier medio legal, judicial o no judicial, los derechos u obligaciones que deriven del presente Contrato. El incumplimiento de esta Cl??usula facultar?? a <b>OFEM VERACRUZ</b> a recibir una PENA CONVENCIONAL en los t??rminos establecidos en la Cl??usula Sexta del presente Contrato, independientemente de lo establecido por la Cl??usula Primera del presente instrumento.
        </p>
        <p>
           <b>TERCERA.</b> <em>No Relaci??n Laboral</em>.-
            El presente Contrato no crea ni constituye una relaci??n laboral, asociaci??n, sociedad, mandato o acuerdo similar entre las <b>PARTES</b>. 
        </p>
        <p>
           <b>CUARTA.</b> <em>Vigencia</em>.-
            Debido a que el presente Contrato deriva directamente de la relaci??n comercial que sostiene la <b>PERSONA F??SICA</b> con <b>OFEM VERACRUZ</b>, la vigencia del presente Contrato se extender?? hasta cinco (5) a??os despu??s de que la relaci??n comercial entre la <b>PERSONA F??SICA</b> y <b>OFEM VERACRUZ</b> termine.
        </p>
        <p>
           <b>QUINTA.</b> <em>Fuerza Mayor</em>.-
            Debido a que las responsabilidades asumidas por la <b>PERSONA F??SICA</b> en el presente Contrato son independientes y de que las mismas pueden ser reclamadas durante la vigencia del mismo, no podr?? ser invocada por ??ste, causas de FUERZA MAYOR. En consecuencia los efectos de este Contrato prevalecer??n sobre cualquier situaci??n y dichos efectos continuar??n en vigor durante la vigencia del mismo.
        </p>
        <p>
            <b>SEXTA.</b> <em>Pena Convencional</em>.-
            <b>La PERSONA F??SICA</b> acepta y se obliga expresamente a que si llegar?? a faltar a su obligaci??n de <u>CONFIDENCIALIDAD</u> para con <b>OFEM VERACRUZ</b> y/o de cualquier otra de las <b>EMPRESAS</b> para la que tenga que tenga acceso de acuerdo con las instrucciones que <b>OFEM VERACRUZ</b> le haya dado y/o de sus Clientes ya sean de <b>OFEM VERACRUZ</b> o de alguna de las <b>EMPRESAS</b>, de manera directa o indirectamente, o cualesquier otra tercera persona a la que le hubiere concedido el acceso o contacto, directa o indirectamente a la informaci??n <u>CONFIDENCIAL</u>, ya sea por v??a oral, por cualquier tipo de documentos, por medios electr??nicos o cualquier otro medio a los que tenga o pueda tener acceso referidos en el presente Contrato como <u>CONFIDENCIAL</u>, deber?? cubrir a <b>OFEM VERACRUZ</b> la cantidad de $50,000.00 (Cincuenta Mil Pesos 00/100 M.N.) por concepto de PENA CONVENCIONAL.
        </p>
        <p>
            <b>S??PTIMA.</b> <em>Devoluci??n de informaci??n</em>.-
            La <b>PERSONA F??SICA</b> se obliga expresamente en este acto, a que en el momento en que <b>OFEM VERACRUZ</b> se lo solicite, deber?? hacer la devoluci??n y/o entrega de toda la informaci??n que este en su poder, ya sean cualquier tipo de documentos o de medios electr??nicos que se encuentren amparados bajo el presente Contrato y que sea posible su remisi??n. 
        </p>
        <p>
            Asimismo la <b>PERSONA F??SICA</b> en este acto, se obliga a no duplicar ni copiar, bajo ninguna circunstancia, la informaci??n que tenga o pueda llegar a tener, ya sea por cualquier tipo de documentos, por medios electr??nicos o cualquier otro medio. 
        </p>
        <p>
            <b>OCTAVA.</b> <em>Vicios del Consentimiento</em>.- Queda expresamente pactado por las <b>PARTES</b> que el presente Contrato es celebrado sin violencia, dolo, error, enga??o o mala fe de ninguna de las <b>PARTES</b>, por lo que no existe vicio de consentimiento alguno que limite o pueda limitar los efectos jur??dicos del presente Contrato.
        </p>
        <p>
            <b>NOVENA.</b> <em>Avisos</em>.- Todas las comunicaciones que las <b>PARTES</b> deban o deseen hacerse en relaci??n con el presente Contrato, incluyendo de manera enunciativa cualquier aviso, demanda, requerimiento, consentimiento, aprobaci??n, designaci??n, especificaci??n, se enviar??n por escrito con acuse de recibo, a los siguientes domicilios y en atenci??n de los siguientes funcionarios:
        </p>

        <table>
            <tbody>
                <tr>
                    <td width="50%"><h6 class="pdf_subtitulo">OFEM VERACRUZ</h6></td>
                    <td width="50%"><h6 class="pdf_subtitulo">PERSONA F??SICA</h6></td>
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
                    <td>M??xico, Ciudad de M??xico.</td>
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
            <b>D??CIMA.</b> <em>Totalidad del Contrato</em>.- El presente Contrato una vez debidamente firmado por las <b>PARTES</b>, constituye el acuerdo final y completo entre las <b>PARTES</b>, por lo que cualquier acuerdo, declaraci??n, documento, promesa o convenio posterior, sea oral o escrito entre las mismas, que no sea incorporado al presente Contrato, en los t??rminos se??alados en la Cl??usula D??cima Primera del mismo, se considerar?? sin ninguna fuerza o efecto legal alguno.  
        </p>
        <p>
            <b>D??CIMA PRIMERA.</b> <em>Modificaciones</em>.-
            Este Contrato no podr?? ser modificado o alterado excepto mediante la celebraci??n de un instrumento por escrito suscrito por las <b>PARTES</b> que celebran este Contrato, una vez suscritas, dichas modificaciones se convertir??n en una parte integrante del presente Contrato, sujeto a todos los t??rminos y condiciones contenidos en el mismo y tendr??n plena fuerza y causar??n todos sus efectos legales.
        </p>
        <p>
            <b>D??CIMA SEGUNDA.</b> <em>Encabezados</em>.-
            Los encabezados que hacen referencia al contenido del tipo de relaciones particulares en este Contrato, son insertados ??nicamente para la conveniencia de las <b>PARTES</b> y de ninguna manera podr??n considerarse como parte de este Contrato o como limitaci??n al alcance de cualquiera de los t??rminos o estipulaciones del mismo.
        </p>
        <p>
            <b>D??CIMA TERCERA.</b> <em>Supervivencia</em>.-
            Si cualquier t??rmino, convenio, condici??n o disposici??n del presente Contrato o la aplicaci??n del mismo, a cualesquier persona o circunstancia, fuese en cualquier extensi??n considerada como inv??lida o inejecutable, el resto de este Contrato o su aplicaci??n de dicho t??rmino o disposici??n a dicha persona o circunstancia, excepto por lo que se considere como inv??lido o inejecutable, no se ver?? afectado por lo anterior y cada t??rmino, convenio, condici??n o disposici??n del presente Contrato ser?? v??lida y ser?? ejecutada hasta la extensi??n m??s completa permitida por la Ley.
        </p>
        <div style="clear: both;"></div>
        <p>
            <b>D??CIMA CUARTA. <em>No renuncia</em>.-
            La inactividad, falta de queja o acci??n por parte de OFEM VERACRUZ en relaci??n con el incumplimiento o cualesquier otro procedimiento derivado del presente Contrato, no se estimar?? como una renuncia a sus derechos por permanecer inactiva o no efect??e los procedimientos establecidos en el presente Contrato.</b>
        </p>
        <p>
            <b>D??CIMA QUINTA.</b> <em>Leyes y Jurisdicci??n Aplicable</em>.-
            Para la interpretaci??n del presente Contrato, las <b>PARTES</b> se someten expresamente a las leyes de la Ciudad de M??xico, renunciando a cualquier otro fuero que les pudiera corresponder en virtud de sus domicilios presentes o futuros o por cualquier otro motivo. Por lo que las <b>PARTES</b> para el cumplimiento y soluci??n de controversias que se deriven del presente Contrato, se someten expresamente a la jurisdicci??n de los tribunales competente de la Ciudad de M??xico, renunciando a cualquier otro fuero que les pudiera corresponder en virtud de sus domicilios presentes o futuros o por cualquier otra causa.
        </p>
        <p>
            Enteradas las PARTES del contenido y alcance legal del presente CONTRATO DE CONFIDENCIALIDAD, lo firman en dos (2) ejemplares, entendi??ndose que todos y cada uno de ellos forman un s??lo documento, en la Ciudad de M??xico,  al d??a {{ $date }}.  
        </p>
        
        <div class="firmas-6">                                                        
            <div class="firmas_left">
                <div class="left_s">
                    <p>OFEM VERACRUZ, S.A. DE C.V.</p>    
                </div>
                <div class="left_i">
                    <div class="parrafo"><b>LIC. NYDIA LUZ AHEDO GONZ??LEZ</b></div>
                    <div class="parrafo"><b>Representante</b></div>
                </div>
            </div>
            <div class="firmas_right">
                <div class="right_s">
                    <p>PERSONA F??SICA</p>
                </div>
                <div class="right_i">
                    <div class="parrafo"><b>{{ $data_advisers->first_name." ". $data_advisers->last_name }}</b></div>
                    <div class="parrafo"><b>Por derecho propio</b></div>
                </div>
            </div>
        </div>
    </div>
</fieldset>

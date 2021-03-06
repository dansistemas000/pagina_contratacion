<style type="text/css">
.format_3 .pdf_titulo {
    text-align: center;    
    font-weight: bold;
    font-size: 12px;
    margin-bottom: 13px;
    margin-top: 0px;  
}
.format_3 .pdf_subtitulo {
    text-align: left;
    font-weight: bold;
    font-size: 12px;
    margin-bottom: 13px;
    margin-top: 0px; 
}
.format_3 p {
    margin-top: 0px;
    margin-bottom: 13px;
    padding-left: 0px;
    text-align: justify;  
}

.format_3 .pdf_declaraciones p {
    padding-left: 0px;
    text-align: justify;
}

.format_3 .sangria {
    text-indent: 40px;
}
.format_3 .pdf_subtitulo_sub {
    text-align: center;
    font-weight: bold;
    text-decoration: underline;
    font-size: 13px;
    margin-top: 0px;
    margin-bottom: 12px;
}
.format_3 b {
    font-weight: bold;
}
.format_3 .pdf_declaraciones .num_declaracion {        
    margin-right: 50px;
    width: 10%;
    display:inline-block;
    float: left;
    font-weight: bold;
}
.format_3 .pdf_declaraciones .titulo_declaracion {    
    display:inline-block;
    float:left;
}

.format_3 .pdf_declaraciones_int {
    margin-left: 50px;
    margin-top: 0px;
    margin-bottom: 12px;
    text-align: justify;
}
.format_3 .pdf_declaraciones_int .num_declaracion {        
    margin-right: 50px;
    width: 10%;
    display:inline-block;
    float: left;
    font-weight: bold;
}
.format_3 .pdf_declaraciones_int .titulo_declaracion {    
    display:inline-block;
    float:left;
}
.format_3 .pdf_declaraciones_int p {
    padding-left: 0px;
    text-align: justify;
}
.format_3 .linea_firma { 
    width:50%;
    margin:auto;
    text-align:center;
    border-top: 2px solid #000;
    margin-top: 150px;
}
.format_3 .firma { 
    text-transform:uppercase;
}

fieldset{
    font-size: 13px;
}

.format_3 a{
    color: #18abf4;
    text-decoration: none;
}
</style>
@php
    $months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
                    "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    $today = getdate();
    $day = $today['mday'];
    $month = $today['mon'];
    $year = $today['year'];
    $date = $day ." de, ". $months[$month-1] . " del ". $year; 
@endphp
<fieldset class="format_3">
    <h6 class="pdf_titulo">
        1. T??RMINOS Y CONDICIONES DE LA APPLICACION M??VIL MANZAPP
    </h6>
    <div>                                   
        <p>
            EL PRESENTE CONTRATO LEGAL CELEBRADO ENTRE USTED (EN LO SUCESIVO EL ???USUARIO???) Y FINANCIERA MAESTRA S.A. DE C.V., SOFOM, E.N.R. (EN LO SUCESIVO ???EL PROVEEDOR???) REGULA EL USO DE LA APLICACI??N MANZAPP (EN LO SUCESIVO ???EL PRODUCTO???), LOS SERVICIOS Y LOS SITIOS WEB (DENOMINADO DE FORMA COLECTIVA ???EL SERVICIO???) DE ???EL PRODUCTO??? EN MENCION, DOCUMENTO QUE AL FIRMAR DE CONFORMIDAD EN TODAS Y CADA UNA DE SUS PARTES INCLUIDO EL AVISO DE PRIVACIDAD CONTENIDO EN EL PRESENTE ACEPTA AJUSTARCE A SUS TERMINOS Y CONDICIONES.
        </p>
        <p>
            ManzApp es una aplicaci??n prove??da por FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R. que le permitir?? acceder a m??ltiples beneficios en el desarrollo de su actividad individual  en ventas, al  obtener servicios como la identificaci??n de puntos de venta con compradores potenciales, la creaci??n y/o asignaci??n de la ruta de sus venta y/o de sus asociados en su labor de venta, comunicaci??n entre los usuarios de ???EL PRODUCTO??? por medio de comunicados, sugerencias de traslado a su destino, almacenaje de su ruta de venta diaria, registro de posici??n en puntos de ventas mediante el uso de Geocercas, seguimiento de posici??n en Geocerca en los puntos de venta, ver posici??n hist??rica en Geocerca de los puntos de venta, as?? como participar en las promociones y/o concursos realizados por ???EL PROVEEDOR???, servicios  que estar??n basados en la ubicaci??n GPS (si est?? disponible) y puntos Wi-Fi p??blicos y ubicaciones de torres de telefon??a m??vil del usuario, exclusivamente cuando el usuario se encuentre dentro del ??rea asignada a una Geocerca siempre que su estancia en la misma, exceda de 30 (treinta) minutos, de conformidad con los t??rminos y condiciones que se establecen en el presente Contrato. ManzApp se activa en dispositivos que cuenten con un sistema iOS o Android, para lo cual es necesario comunicarse con ???EL PROVEEDOR??? a fin de que se le otorgue un ID, el cual asociado a su cuenta de email ser?? necesario para activar ???EL PRODUCTO??? durante la configuraci??n del dispositivo.
        </p>
        <h6 class="pdf_subtitulo">1. DEFINICIONES.</h6>
        <div class="pdf_declaraciones">
            <p class="sangria">
                <b>1.1. ID.</b>
                Se denomina al n??mero de identificaci??n que ???EL PROVEEDOR??? generar?? a favor del Usuario, previo registro, con el cual el Usuario podr?? acceder a ???EL PRODUCTO???. Este nombre puede estar compuesto de letras, n??meros o signos y no podr?? ser modificado por ???EL PROVEEDOR???.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>1.2. Geocerca.</b>
                 ??rea geogr??fica definida por ???EL PROVEEDOR???, alrededor de la cual se crea una cerca virtual que registra cada vez que el ???USUARIO??? permanezca por m??s de 30 (treinta) minutos consecutivos.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>1.3. GPS</b>
                 Sistema de navegaci??n que env??a informaci??n sobre la posici??n de una persona u objeto.
            </p>
        </div>
        <h6 class="pdf_subtitulo">2. REQUISITOS PARA LA UTILIZACI??N DEL SERVICIO.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>2.1. Dispositivo m??vil,email yID.</b>
                Para la utilizaci??n de ???EL SERVICIO???, es necesario contar con un dispositivo m??vil con un sistema iOS o Android respectivamente, con acceso a Internet, (se podr??n aplicar cargos), y podr?? requerir actualizaciones peri??dicas para su correcto funcionamiento. Para la utilizaci??n de ???EL PRODUCTO??? ???EL PROVEEDOR??? se reserva el derecho de otorgar ID, a las personas que considere adecuadas para la utilizaci??n de ???EL PRODUCTO??? de conformidad a las pol??ticas establecidas por ???EL PROVEEDOR???.  Para el otorgamiento del ID ser?? necesario que el usuario proporcione datos personales que ser??n debidamente tratados conforme al aviso de privacidad contenido en el presente contrato y una vez otorgado el ID podr?? activar ???EL PRODUCTO??? ingresando por medio de su cuenta de email y su ID a ???EL PRODUCTO???.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>2.2. Limitaciones de Uso.</b>
                El USUARIO se compromete a usar el SERVICIO ??nica y exclusivamente para los prop??sitos permitidos por el presente Contrato y exclusivamente en la extensi??n que permita cualquier legislaci??n, regulaci??n o pr??ctica com??nmente aceptada de la jurisdicci??n aplicable. ???EL PROVEEDOR??? se reserva su derecho de cancelar su ID en caso de darse un mal manejo del PRODUCTO y/o el SERVICIO o bien de considerar que ya no se ajusta a el perfil adecuado para el uso del SERVICIO de conformidad a las pol??ticas internas de ???EL PROVEEDOR??? mismas que se le dieron a conocer al momento de ser otorgado su ID, y las cuales Usted manifiesta conocer y estar de acuerdo al momento de firmar el presente contrato, as?? como al momento de activar ???EL SERVICIO??? y/o ???EL PRODUCTO???.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>2.3. Modificaci??n del Servicio.</b>
                El PROVEEDOR se reserva el derecho de modificar el presente Contrato en cualquier momento y de imponer t??rminos o condiciones nuevas o adicionales sobre el uso que haga del SERVICIO. Dichas modificaciones y los t??rminos y condiciones adicionales se le comunicar??n y, si los acepta, entrar??n en vigor inmediatamente y quedar??n incorporados a este Contrato. En caso de que rechace aceptar dichas modificaciones, ???EL PROVEEDOR??? tendr?? el derecho a rescindir este Contrato y cancelar su cuenta. Usted acepta que ???EL PROVEEDOR??? no ser?? responsable ante usted ni ante ning??n tercero por cualquier modificaci??n o cese del Servicio.
            </p>
        </div>
        <h6 class="pdf_subtitulo">3. CARACTER??STICAS Y SERVICIOS.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>3.1. Uso de Servicios basados en la ubicaci??n.</b>
                Tanto ???EL PRODUCTO??? como ???EL SERVICIO??? se basa en la informaci??n de ubicaci??n dentro de las Geocercas establecidas ??nicamente, basada en el dispositivo mediante GPS (si est?? disponible) y puntos Wi-Fi p??blicos y ubicaciones de torres de telefon??a m??vil. Para el suministro de dichas facilidades o servicios, donde est??n disponibles, ???EL PROVEEDOR??? as?? como sus socios y licenciantes de haberlos, deben recolectar, utilizar, transmitir, procesar y mantener sus datos de ubicaci??n, incluyendo, pero no limit??ndose a, la ubicaci??n geogr??fica de su dispositivo solo cuando este dentro de las Geocercas establecidas y la informaci??n relacionada a su ID de usuario, informaci??n que al aceptar los presentes t??rminos  y condiciones usted manifiesta estar de acuerdo en otorgar en los t??rminos y condiciones detallados en el aviso de privacidad que m??s adelante se detallara.
            </p>
            <p>
                El ???USUARIO??? podr?? retirar el consentimiento a ???EL PROVEEDOR??? y a sus socios y licenciantes de la recolecci??n, utilizaci??n, transmisi??n, procesamiento y mantenimiento de datos de ubicaci??n y cuenta, en cualquier momento, en los t??rminos establecidos en el aviso de privacidad detallado m??s adelante. Los datos relativos a la ubicaci??n proporcionados por ???EL SERVICIO??? no deben ser tomados en cuenta en situaciones donde se requiera la ubicaci??n precisa de la informaci??n, o cuando la ubicaci??n de datos err??nea, imprecisa, inoportuna o incompleta pueda dar lugar a muerte, lesi??n personal o da??o a la propiedad o al medio ambiente. ???EL PROVEEDOR??? utilizar?? la habilidad y cuidado razonables para proveer ???EL SERVICIO???, pero ni ???EL PROVEEDOR??? ni ninguno de sus proveedores de contenido y/o servicios garantizan la disponibilidad, precisi??n, integridad, confianza u oportunidad de la informaci??n relativa a la ubicaci??n o de cualesquier datos visualizados por medio de ???EL SERVICIO???. (Los servicios basados en ubicaci??n no deben ser utilizados ni son apropiados como sistema de ubicaci??n de emergencia).
            </p>
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion"></div>
            <p class="sangria">
                <b>3.2. Creacion y/o asignaci??n de rutas.</b>
                Al darse de alta un grupo de personas en la aplicaci??n para realizar sus actividades de venta en una determinada zona, estos pueden acceder a una ruta opcional, asignada por la aplicaci??n, la cual les permitir?? optimizar al m??ximo su labor en venta, al aprovechar mejor su tiempo de traslado, al ubicar las mejores rutas para llegar a sus destinos de venta mediante el uso del GPS de su unidad m??vil, evitando que se concentren usuarios de mas en un punto de venta y descuiden alg??n otro punto.
            </p>
            <p>
                Las rutas utilizadas por los usuarios ser??n almacenadas por ???EL PROVEEDOR??? en una base de datos ??nicamente con fines de informaci??n comercial y al aceptar los presentes t??rminos y condiciones usted otorga pleno consentimiento para el manejo de dicha informaci??n a ???EL PROVEEDOR??? y sus filiales, subsidiarias y responsables de existir tales y asi mismo el ???USUARIO??? podr?? solicitar a ???EL PROVEEDOR??? le remita el historial de su ruta de ventas en Geocercas enviando un correo electr??nico a la siguiente direcci??n: oficialdeprivacidad@creditomaestro.com.
            </p>
            <p>
                Al ser esta una aplicaci??n dise??ada para vendedores que promocionan cr??ditos de todo tipo, a personal y pensionados del IMSS en general, las Geocercas se limitaran ??nica y exclusivamente a centros de trabajo ubicados en dichas dependencias, entendi??ndose mas no limit??ndose a Centros de Salud, Delegaciones y Centros administrativos y/o Sindicales del IMSS, a lo cual al momento de aceptar los presentes t??rminos y condiciones usted manifiesta estar de acuerdo a lo anterior. EL ???USUARIO??? puede sugerir a ???EL PROVEEDOR??? la implementaci??n de Geocercas en puntos de venta diversos a los mencionados comunic??ndose con ???EL PROVEEDOR??? por el medio mencionado en el p??rrafo que antecede, reserv??ndose su derecho ???EL PROVEEDOR??? de aplicarlos o no.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>3.3 Comunicados.</b>
                El usuario y/o los usuarios podr??n comunicarse entre si mediante comunicados previamente aprobados por ???EL PROVEEDOR???, as?? como anuncios que ???EL PROVEEDOR??? podr?? mandar a todos sus usuarios con recomendaciones para optimizar su labor de venta.
            </p>
        </div>
        <div class="pdf_declaraciones">
            <p class="sangria">
                <b>3.4. Sugerencias de traslado.</b>
                El PRODUCTO puede emitir sugerencias de traslado a un posible punto de venta mediante la utilizaci??n de el GPS (si est?? disponible) a efecto optimizar el tiempo de traslado a los diferentes puntos de venta del usuario.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>3.5. Promociones y/o concursos realizados por el PROVEEDOR.</b>
                Al ser usuario de ???EL PRODUCTO??? usted podr?? formar parte de las promociones y/o concursos que organizara el PROVEEDOR las cuales premiaran a los usuarios que en su labor de venta consigan los m??s altos niveles de venta en comparaci??n con los dem??s usuarios, promociones y/o concursos que quedaran sujetos a los t??rminos y condiciones que respectivamente les sean fijados al momento que sean notificados por medio de ???EL PRODUCTO???.
            </p>
        </div>
        <h6 class="pdf_subtitulo">4. SU USO DEL SERVICIO.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>4.1. Su ID.</b>
                Como usuario registrado del Servicio. No revele la informaci??n de su ID a nadie m??s. Usted es el ??nico responsable de mantener la confidencialidad y seguridad de su ID y de todas las actividades que ocurran en o a trav??s de su Cuenta, y usted acepta notificar inmediatamente a ???EL PROVEEDOR??? sobre cualquier violaci??n a la seguridad en su Cuenta. Tambi??n reconoce y acepta que el Servicio est?? dise??ado y destinado al uso personal de forma individual, y que no deber?? compartir la informaci??n de su Cuenta con ninguna persona. ???EL PROVEEDOR??? no ser?? responsable por ninguna p??rdida derivada del uso no autorizado de su ID, como resultado de la omisi??n por parte de usted de observar dichas normas.
                <br>
                Para utilizar el Servicio, usted debe solicitarlo a ???EL PROVEEDOR??? enviando un correo electr??nico a la siguiente direcci??n: oficialdeprivacidad@creditomaestro.com con sus datos de identificaci??n as?? como el porqu?? necesita utilizar ???EL PRODUCTO??? para efecto de que ???EL PROVEEDOR??? verifique si cumple con el perfil necesario para otorgarle un ID para el uso de la aplicaci??n de conformidad a sus pol??ticas internas, mismas que se le dar??n a conocer al momento de otorgarle su ID o negarle el mismo previa explicaci??n de la negativa, pol??ticas que desde este momento usted manifiesta conocer y aceptar en todos y cada uno de sus t??rminos al aceptar los t??rminos y condiciones contenidos en el presente contrato. Usted se compromete a suministrar informaci??n precisa y completa al solicitar su ID y hacer uso del Servicio, as?? como a actualizar su Informaci??n de Registro de Servicio para mantener dicha informaci??n precisa y completa. El hecho de no proporcionar Datos de registro exactos, actualizados y completos puede dar lugar a la suspensi??n o cancelaci??n de su ID. El ???USUARIO??? acepta que el PROVEEDOR almacene y utilice la Informaci??n de Registro de Servicio que suministra con el objetivo de mantener su Cuenta.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>4.2. Prohibici??n de Reventa del Servicio.</b>
                El USUARIO acepta que no reproducir??, copiar??, duplicar??, vender??, revender??, alquilar?? ni comercializar?? ???EL SERVICIO??? (ni cualquier parte de mismo) para ning??n fin.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>4.3. Acceso a su Cuenta y Contenido.</b>
                ???EL PROVEEDOR??? se reserva el derecho a tomar las medidas que determine necesarias o convenientes para hacer cumplir y/o comprobar el cumplimiento con cualquier disposici??n de este Contrato. Usted reconoce y acepta que  ???EL PROVEEDOR???, sin responsabilidad para usted, puede acceder, usar, conservar y/o revelar la informaci??n y el Contenido de su Cuenta a las autoridades policiales, funcionarios de gobierno, y/o terceros, en la medida que  ???EL PROVEEDOR??? determine necesaria o conveniente, si as?? se le solicita legalmente o en la creencia de buena fe de que dicho acceso, uso, revelaci??n o conservaci??n es razonablemente necesario para: (a) cumplir procesos o solicitudes legales; (b) hacer cumplir este Contrato, incluyendo la investigaci??n de cualquier posible infracci??n relacionada con las mismas; (c) detectar, impedir o de otro modo solucionar problemas de seguridad, fraudes o problemas t??cnicos; o (d) proteger los derechos, la propiedad o la seguridad de  ???EL PROVEEDOR???, sus usuarios, un tercero o el p??blico conforme a lo que exija o permita la legislaci??n.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>4.4. Informaci??n de Marca Comercial.</b>
                FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R., su logotipo y las dem??s marcas comerciales, marcas de servicio, gr??ficos y logotipos de FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R., usados en relaci??n con ???EL SERVICIO??? son marcas comerciales registradas de FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R. Las otras marcas comerciales, marcas de servicio, gr??ficos y logotipos usados en relaci??n con ???EL SERVICIO??? pueden ser marcas comerciales de sus respectivos propietarios. No se le concede ning??n derecho ni licencia sobre las marcas comerciales anteriormente mencionadas y, adem??s, usted acepta que no eliminar??, ocultar?? ni alterar?? ning??n aviso de propiedad (incluidos los avisos de marcas comerciales y de derechos de autor) que pueda insertarse o incluirse dentro del Servicio.
            </p>
        </div>
        <h6 class="pdf_subtitulo">5. Software.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>5.1. Derechos de Propiedad de FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R., </b>
                El ???USUARIO??? reconoce y acepta que ???EL PROVEEDOR??? y/o sus cedentes de licencia poseen todos los derechos e intereses legales en el Servicio, incluidos, entre otros, los gr??ficos, la interfaz del usuario y los scripts usados para implementar el Servicio, as?? como cualquier actualizaci??n que se le proporcione como parte de y/o relacionado con el Servicio, incluidos cualquiera de los derechos a la propiedad intelectual que all?? existen, est??n registrados o no, y existan en el mundo o no. Adem??s, usted acepta que el Servicio contiene informaci??n confidencial o de propiedad protegida por las leyes de propiedad intelectual aplicables y otras legislaciones, incluyendo pero no limit??ndose a la ley sobre derechos de autor. Usted acuerda que no utilizar?? dicha informaci??n o materiales privilegiados y confidenciales de modo alguno, salvo para el uso de los Servicios de conformidad con el presente Contrato. Ninguna parte de los Servicios puede ser reproducida de manera alguna o por medio alguno, salvo que dicha reproducci??n est?? permitida conforme los presentes t??rminos:
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>5.1.1. Licencia del PROVEEDOR.</b>
                El uso de ???EL PRODUCTO??? o de cualquier parte de ???EL SERVICIO???, excepto para el uso del servicio que se permite en el presente contrato, queda totalmente prohibido e infringe los derechos de la propiedad intelectual de otras personas y podr??a suponer sanciones civiles y penales, incluidos posibles da??os econ??micos, por infracci??n de copyright.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>5.1.2. Actualizaciones</b>
                Peri??dicamente, ???EL PROVEEDOR??? podr?? actualizar ???EL PRODUCTO??? utilizado para ???EL SERVICIO???. Con el fin de continuar utilizando el Servicio de una manera optima, dichas actualizaciones pueden incluir correcciones de errores, adiciones o mejoras de funciones o versiones completamente nuevas de la aplicaci??n las cuales ser??n necesarias para su correcto funcionamiento, en virtud de lo anterior desde este momento  al aceptar los presentes t??rminos y condiciones, usted se compromete a aceptar e instalar las actualizaciones subsecuentes que el PROVEEDOR pudiese generar en tanto siga teniendo la necesidad de utilizar el servicio.
            </p>
        </div>
        <h6 class="pdf_subtitulo">6. CANCELACI??N.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>6.1. Cancelaci??n voluntaria por parte de Usted.</b>
                El uso de ???EL PRODUCTO??? y ???EL SERVICIO??? es por su propia voluntad y podr?? cancelarlo en cualquier momento, previa solicitud a ???EL PROVEEDOR??? enviando un correo electr??nico a la siguiente direcci??n: oficialdeprivacidad@creditomaestro.com. para efecto de que ???EL PROVEEDOR??? pueda procesar la debida cancelaci??n de su cuenta y contrase??a en los t??rminos previstos de conformidad a las pol??ticas vigentes de ???EL PROVEEDOR???, dadas a conocer al momento de la activaci??n de su cuenta y contrase??a.
            </p>
            <p>
                ???EL PROVEEDOR??? se reserva su derecho de cancelar, la cuenta y contrase??a de cualquier usuario que a su criterio y aplicaci??n de sus pol??ticas, considere que no cumple con el perfil para utilizar dicha aplicaci??n o bien infrinja las pol??ticas dadas a conocer al usuario al momento de activar su cuenta y contrase??a.
            </p>
        </div>
        <div class="pdf_declaraciones">                                             
            <p class="sangria">
                <b>6.2. Cancelaci??n por parte del PROVEEDOR.</b>
                ???EL PROVEEDOR??? puede cancelar o suspender inmediatamente y en cualquier momento, bajo determinadas circunstancias y sin notificaci??n previa, la cuenta y contrase??a de cualquier usuario o acceso al Servicio. Entre las causas de esta cancelaci??n se incluyen las siguientes: (a) infracciones de este Contrato o de cualquier otra pol??tica o directriz a la que se haga referencia aqu?? o se publique en el Servicio; (b) una solicitud por su parte para la cancelaci??n o terminaci??n de su Cuenta; (c) una solicitud u orden de imposici??n legal, de un organismo judicial o de otra agencia estatal; (d) si la provisi??n del Servicio a usted pasa a ser ilegal; (e) problemas t??cnicos o de seguridad inesperados; (f) su participaci??n en actividades fraudulentas o ilegales.  ???EL PROVEEDOR??? realizar?? cancelaciones o suspensiones de este tipo a su entera discreci??n, y ???EL PROVEEDOR??? no se responsabiliza ante usted ni ante terceros de los da??os que puedan derivarse o surgir como consecuencia de dicha cancelaci??n o suspensi??n de su Cuenta y contrase??a o del acceso al Servicio. Adem??s, el PROVEEDOR podr?? cancelar su Cuenta con previo aviso si (a) su Cuenta ha sido inactiva por quince (15) d??as; o (b) existe una descontinuaci??n general o modificaci??n importante del Servicio o cualquier parte del mismo. ???EL PROVEEDOR??? realizar?? cancelaciones o suspensiones de este tipo a su entera discreci??n, y no se responsabiliza ante usted ni ante terceros de los da??os que puedan derivarse o surgir como consecuencia de dicha cancelaci??n o suspensi??n de su Cuenta y/o del acceso al Servicio.
            </p>
        </div>
        <h6 class="pdf_subtitulo">7. AVISO DE PRIVACIDAD.</h6>
        <h6 class="pdf_subtitulo_sub">
            Aviso de Privacidad Integralpara los Usuarios de la Aplicaci??n M??vil ManzApp
        </h6>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">I.</div>
            <div class="titulo_declaracion"> Identidad y Domicilio del Responsable.</div>
            <p>
                De conformidad con lo establecido en la Ley Federal de Protecci??n de Datos Personales en Posesi??n de los Particulares (la ???<u>Ley de Datos</u>???), su Reglamento, los Lineamientos del Aviso de privacidad y dem??s disposiciones aplicables, le informamos que Financiera Maestra, S.A. de C.V., SOFOM, E.N.R., (el ???<b>Responsable</b>???), con domicilio en Tiburcio Montiel 14, Colonia San Miguel Chapultepec, Delegaci??n Miguel Hidalgo, C.P. 11850, Ciudad de M??xico (la ???<u>Direcci??n de Contacto</u>???), tratar?? los datos personales que recabe de usted (el ???<u>Titular</u>???) en su car??cter de usuario de la aplicaci??n m??vil ManzApp  (la ???<u>Aplicaci??n</u>???), en los t??rminos del presente aviso de privacidad.
            </p>                                            
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">II.</div>
            <div class="titulo_declaracion"> Datos de Contacto del Responsable.</div>
            <p>
                El Responsable ha designado a un encargado de datos personales (el ???<u>Oficial de Privacidad</u>???). En caso de que desee cualquier informaci??n respecto del presente aviso de privacidad o en relaci??n con el ejercicio de cualesquiera de sus derechos derivados del tratamiento de sus datos personales, por favor contacte a nuestro Oficial de Privacidad, enviando un correo electr??nico a la siguiente direcci??n: oficialdeprivacidad@creditomaestro.com.
            </p>                                            
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">III.</div>
            <div class="titulo_declaracion"> Finalidades del Tratamiento de sus Datos Personales.</div>
            <p>
                Sus datos personales ser??n tratados para las siguientes finalidades necesarias para cumplir con los t??rminos y condiciones aceptados por el Titular respecto del uso de la Aplicaci??n:
            </p> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">i.</div>
                <div class="titulo_declaracion"> 
                    Establecer y mantener su cuenta como usuario registrado de la Aplicaci??n.
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">ii.</div>
                <div class="titulo_declaracion"> 
                    Proporcionarle beneficios para el desarrollo de su actividad de ventas a trav??s de la Aplicaci??n.
                </div>                                            
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">iii.</div>
                <div class="titulo_declaracion"> 
                    Rastrear su ruta de ventas diaria y llevar un registro de los puntos de venta que visite el Titular y del tiempo que permanezca en cada uno de ellos, con fines comerciales del Responsable.
                </div>                                            
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">iv.</div>
                <div class="titulo_declaracion"> 
                    Crear y asignarle una ruta opcional para la realizaci??n de sus actividades de ventas en una zona determinada, con objeto de optimizar dicha labor.
                </div>                                            
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">v.</div>
                <div class="titulo_declaracion"> 
                    Emitir sugerencias de traslado a un punto de venta con objeto de mejorar su tiempo de traslado.
                </div>                                            
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">vi.</div>
                <div class="titulo_declaracion"> 
                    Permitir la comunicaci??n entre los usuarios de la Aplicaci??n en los casos que lo apruebe el Responsable.
                </div>                                            
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">vii.</div>
                <div class="titulo_declaracion"> 
                    Enviarle anuncios con recomendaciones para optimizar su labor de ventas.
                </div>                                            
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">viii.</div>
                <div class="titulo_declaracion"> 
                    Aplicar al Titular un cuestionario de campo a efecto de conocer su experiencia en el desempe??o de sus actividades de ventas. 
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">ix.</div>
                <div class="titulo_declaracion"> 
                    Notificar sobre las promociones y concursos que organice el Responsable para premiar a los usuarios de la Aplicaci??n con base en sus niveles de venta.
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">x.</div>
                <div class="titulo_declaracion"> 
                    Verificar que se cumplan las pol??ticas y procedimientos del Responsable, sus filiales y subsidiarias.
                </div>                                            
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">xi.</div>
                <div class="titulo_declaracion"> 
                    Dar cumplimiento a obligaciones contra??das por el Responsable.
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">xii.</div>
                <div class="titulo_declaracion"> 
                    La prevenci??n, detecci??n y/o remediaci??n de fraudes, problemas de seguridad y problemas t??cnicos u otros il??citos en agravio del Responsable, los usuarios de la Aplicaci??n y/o de terceros. 
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">xiii.</div>
                <div class="titulo_declaracion"> 
                    Realizar auditor??as e investigaciones por el Responsable, sus filiales y subsidiarias y sus respectivos auditores.
                </div>                                            
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">xiv.</div>
                <div class="titulo_declaracion"> 
                    El cumplimiento de leyes, reglamentos y disposiciones legales o requerimientos de las autoridades competentes. 
                </div>                                            
            </div>                                             
        </div>
        <p>
            [No trataremos sus datos personales para finalidades que no sean necesarias para la utilizaci??n de la Aplicaci??n.]
        </p>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">IV.</div>
            <div class="titulo_declaracion"> Datos Personales que se Tratar??n.</div>
            <p>
                Para alcanzar las finalidades mencionadas en la secci??n III anterior, el Responsable tratar?? los siguientes datos personales del Titular: datos de identificaci??n, datos de contacto, datos de geolocalizaci??n y datos laborales.
            </p>
            <p>
               [No trataremos datos personales sensibles del Titular, en su car??cter de usuario de la Aplicaci??n.] 
            </p>
            <p>
                El Responsable podr?? recabar sus datos personales ya sea personal o directamente cuando as?? nos los proporcione, a trav??s de los sitios de internet del Responsable y/o indirectamente a trav??s de otros medios permitidos por la ley.
            </p>                                            
        </div> 
        <div class="pdf_declaraciones">
            <div class="num_declaracion">V.</div>
            <div class="titulo_declaracion"> Opciones para Limitar el Uso o Divulgaci??n de sus Datos Personales.</div>
            <p>
                El Titular podr?? limitar el uso o divulgaci??n de sus datos personales a fin de que ??stos no sean tratados para finalidades no necesarias para la relaci??n jur??dica entre el Titular y el Responsable.
            </p>
            <p>
                Si desea limitar el uso o divulgaci??n de sus datos personales, deber?? presentar su solicitud al Oficial de Privacidad, enviando un correo electr??nico a la siguiente direcci??n: oficialdeprivacidad@creditomaestro.com, a efecto de que se le inscriba en un listado de exclusi??n que formar?? el Responsable.
            </p>
        </div> 
        <div class="pdf_declaraciones">
            <div class="num_declaracion">VI.</div>
            <div class="titulo_declaracion"> Medios para Ejercer los Derechos Arco. </div>
            <p>
                El Titular podr?? ejercer en todo momento sus derechos de acceso, rectificaci??n, cancelaci??n u oposici??n al tratamiento que le damos a sus datos personales (los ???<u>Derechos ARCO</u>???). Es importante mencionarle que el ejercicio de cada uno de estos derechos es independiente entre s??, es decir, no es necesario agotar uno para ejercer alguno de los otros.
            </p>
            <p>
                Cada uno de los derechos respectivamente le permite:
            </p>
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">i.</div>                                            
            <p>
                <u> Acceso: </u>
                El Titular podr?? solicitar en todo momento conocer qu?? datos suyos han sido recabados y conserva el Responsable en sus bases de datos, as?? como los detalles del tratamiento de los mismos.
            </p>                                                                                
        </div> 
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">ii.</div>                                            
            <p>
                <u> Rectificaci??n: </u>
                En caso de que alguno de sus datos sea inexacto o incompleto podr?? solicitar al Responsable su correcci??n en las bases de datos, debiendo adjuntar la documentaci??n que acredite dicha modificaci??n.
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">iii.</div>                                            
            <p>
                <u> Cancelaci??n: </u>
                Podr?? solicitar en todo momento la cancelaci??n de sus datos de las bases de datos que tenga el Responsable cuando considere que no se requieren para las finalidades se??aladas en el presente aviso de privacidad, est??n siendo utilizados para finalidades no consentidas o haya finalizado nuestra relaci??n jur??dica; en caso de ser procedente la solicitud, los datos ser??n bloqueados y no podr??n ser tratados de ninguna manera.
            </p>                                                                                
        </div> 
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">iv.</div>                                            
            <p>
                <u> Oposici??n: </u>
                En todo momento el Titular podr?? oponerse a que el Responsable realice el tratamiento de sus datos para fines espec??ficos, por ejemplo, para env??os de publicidad.
            </p>                                                                                
        </div>
        <p>
            Para ejercer los Derechos ARCO, el Titular o su representante legal deber??n elaborar la "Solicitud Ejercicio de los Derechos ARCO" y enviarla escaneada al correo electr??nico oficialdeprivacidad@creditomaestro.com, o bien, presentarla en la Direcci??n de Contacto, a la atenci??n del Oficial de Privacidad, para su atenci??n y seguimiento.
        </p>
        <p>
            Es importante que considere los siguientes puntos al momento de enviar o entregar su solicitud:
        </p> 
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">i.</div>                                            
            <p>                                                
                La solicitud deber?? llenarse en todos sus campos claramente y con letra de molde.
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">ii.</div>                                     
            <p style="font-size: 12.5px;">                                                
                Indicar su nombre, domicilio y correo electr??nico para poder comunicarle la respuesta a su solicitud.
            </p>                                                                          
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">iii.</div>                                            
            <p>                                                
                Indicar los datos personales respecto de los que se busca ejercer alguno de los derechos.
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">iv.</div>                                            
            <p>                                                
                Anexar cualquier documento o informaci??n que facilite la localizaci??n de sus datos personales.
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">v.</div>                                            
            <p>                                                
                Anexar copia del documento que acredite la identidad del titular (credencial de elector, c??dula profesional o pasaporte vigente).
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">vi.</div>                                            
            <p>                                                
                Si la solicitud se tramita a trav??s de un representante legal, incluir el poder notarial en el que conste la facultad otorgada por el titular para este tr??mite, o bien, una carta poder otorgada por el titular con la firma de aceptaci??n del apoderado, ante la presencia de dos testigos, debiendo incluir el nombre, firma, domicilio y copia fotost??tica de la identificaci??n oficial de cada uno de los firmantes.
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">vii.</div>                                            
            <p>                                                
                Para el caso de rectificaci??n de datos, adjuntar la documentaci??n que acredite dicha modificaci??n.
            </p>         
        </div>
        <p>
           Una vez que el Titular haya presentado su solicitud al Responsable, le sugerimos enviar un correo electr??nico de seguimiento a: oficialdeprivacidad@creditomaestro.com.
        </p>
        <p>
           Nuestra respuesta ser?? enviada al correo electr??nico indicado en su solicitud en un plazo m??ximo de 20 d??as h??biles contados a partir del d??a en que se haya recibido su solicitud. En caso de que su solicitud se conteste de manera afirmativa o procedente, los cambios solicitados se har??n en un plazo m??ximo de 15 d??as h??biles. En caso de que usted solicite el acceso a sus datos personales, el Responsable le informar?? mediante el correo electr??nico en el que comuniquemos nuestra respuesta a su solicitud, el medio por el cual se le dar?? acceso a su informaci??n en caso de ser procedente. El Responsable podr?? ampliar los plazos referidos en este p??rrafo, por una sola vez, por un periodo igual al original, lo cual le ser?? informado. 
        </p>
        <p>
            El Responsable podr?? negar el ejercicio de sus Derechos ARCO, en los supuestos que lo permita la Ley de Datos, por lo que deber?? informar el motivo de tal decisi??n.
        </p>
        <p>
            La negativa podr?? ser parcial, en cuyo caso el Responsable efectuar?? el acceso, rectificaci??n, cancelaci??n u oposici??n en la parte procedente.
        </p>
        <p>
            El ejercicio de los Derechos ARCO ser?? gratuito, pero si el Titular reitera su solicitud en un periodo menor a doce meses, los costos ser??n de tres d??as de Salario M??nimo General Vigente en el Distrito Federal, m??s I.V.A., a menos que existan modificaciones sustanciales al presente aviso de privacidad, que motiven nuevas solicitudes. El Titular deber?? de cubrir los gastos justificados de env??o o el costo de reproducci??n de documentos en copias u otros formatos y, en su caso, el costo de la certificaci??n de los documentos.
        </p>
        <p>
           Si considera que sus derechos de protecci??n de sus datos personales han sido lesionados por alguna conducta de nuestros empleados o de nuestras actuaciones o respuestas, o presume que en el tratamiento de sus datos personales existe alguna violaci??n a las disposiciones previstas en la Ley de Datos, podr?? interponer la queja o denuncia correspondiente ante el Instituto Nacional de Transparencia, Acceso a la Informaci??n y Protecci??n de Datos Personales (INAI). 
        </p>
        <p>
            Para acceder e imprimir la "Solicitud Ejercicio de los Derechos ARCO" deber?? consultar la secci??n de Derechos ARCO en la p??gina de internet www.creditomaestro.com.mx.
        </p>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">VII.</div>
            <div class="titulo_declaracion"> Medios para Revocar el Consentimiento para el Tratamiento de los Datos Personales. </div>
            <p>
                Para revocar su consentimiento para el tratamiento de sus datos personales, deber?? presentar su solicitud al Oficial de Privacidad, enviando un correo electr??nico a la siguiente direcci??n: oficialdeprivacidad@creditomaestro.com.
            </p>
            <p>
                Si con posterioridad a la revocaci??n, solicita la confirmaci??n de la misma, el Responsable le responder?? de forma expresa.
            </p>
            <p>
                Le informamos que no en todos los casos podremos atender su solicitud o concluir el tratamiento de sus datos personales de forma inmediata, ya que es posible que por alguna obligaci??n legal requiramos seguir tratando sus datos personales. (Revocar su consentimiento para el tratamiento de sus datos personales podr?? tener como consecuencia la imposibilidad de continuar permiti??ndole la utilizaci??n de la Aplicaci??n).
            </p>
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">VIII.</div>
            <div class="titulo_declaracion"> Transferencias de sus Datos Personales. </div>
            <p>
                Le informamos que, para cumplir con las finalidades mencionadas en la secci??n III anterior, el Responsable podr?? transferir los datos personales del Titular sin su consentimiento cuando:
            </p>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">i.</div>                                            
                <p>                                                
                    La transferencia est?? prevista en una ley o tratado en los que M??xico sea parte; 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">ii.</div>                                            
                <p>                                                
                    La transferencia sea necesaria para la prevenci??n o el diagn??stico m??dico, la prestaci??n de asistencia sanitaria, tratamiento m??dico o la gesti??n de servicios sanitarios; 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">iii.</div>                                            
                <p>                                                
                    La transferencia sea efectuada a sociedades controladoras, subsidiarias o afiliadas bajo el control com??n del Responsable, o a una sociedad matriz o a cualquier sociedad del mismo grupo del Responsable que opere bajo los mismos procesos y pol??ticas internas; 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">iv.</div>                                            
                <p>                                                
                    La transferencia sea necesaria por virtud de un contrato celebrado o por celebrar en inter??s del Titular, por el Responsable y un tercero; 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">v.</div>                                            
                <p>                                                
                    La transferencia sea necesaria o legalmente exigida para la salvaguarda de un inter??s p??blico, o para la procuraci??n o administraci??n de justicia; 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">vi.</div>                                            
                <p>                                                
                    La transferencia sea precisa para el reconocimiento, ejercicio o defensa de un derecho en un proceso judicial, y 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">vii.</div>                                            
                <p>                                                
                    La transferencia sea precisa para el mantenimiento o cumplimiento de la relaci??n jur??dica entre el Responsable y el Titular.
                </p>                                                                                
            </div>                                                                                        
        </div>
        <p>
            En dichos supuestos, le informamos que, el Responsable como responsable de los datos personales, le garantiza que el presente aviso de privacidad ser?? respetado en todo momento y se adoptar??n las medidas necesarias para que las personas que tengan acceso a sus datos personales cumplan con el mismo, as?? como con los principios de protecci??n de datos personales establecidos en la Ley de Datos.  
        </p>
        <p>
           Salvo estos casos, el Responsable no compartir?? o transferir?? sus datos personales a terceros con excepci??n de los casos previstos en las leyes aplicables, o en caso de que el Titular haya consentido dicha transferencia de sus datos personales previamente. 
        </p>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">IX.</div>
            <div class="titulo_declaracion"> Uso de Tecnolog??as de Rastreo. </div>
            <p>
                Le informamos que el Responsable utilizar?? el sistema GPS (si est?? disponible), puntos Wi-Fi p??blicos y ubicaciones de torres de telefon??a m??vil para obtener su ubicaci??n geogr??fica al estar dentro del rango de las geocercas establecidas.
            </p>
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">X.</div>
            <div class="titulo_declaracion"> Medidas de Seguridad. </div>
            <p>
                Sus datos personales ser??n protegidos de conformidad con las medidas de seguridad administrativas, t??cnicas y f??sicas, que el Responsable tiene implementadas. Estas medidas incluyen pol??ticas, procedimientos, capacitaci??n a empleados, control de accesos f??sicos y elementos t??cnicos relacionados con los controles de acceso a la informaci??n.
            </p>
            <p>
                En caso de que ocurra una vulneraci??n de seguridad en cualquier fase del tratamiento de sus datos personales, que afecte de forma significativa sus derechos patrimoniales o morales, el Oficial de Privacidad le comunicar?? de forma inmediata por correo electr??nico o, si el Responsable no puede contactarlo por correo electr??nico, entonces utilizar?? el correo tradicional, para que el Titular pueda tomar las medidas necesarias correspondientes para la defensa de sus derechos.
            </p>
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">XI.</div>
            <div class="titulo_declaracion"> Cambios o Modificaciones al aviso de privacidad. </div>
            <p>
                El Responsable se reserva el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad, en el entendido de que toda modificaci??n al mismo se le dar?? a conocer al Titular a trav??s de la Aplicaci??n o mediante correo electr??nico.
            </p>                                            
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">XII.</div>
            <div class="titulo_declaracion"> Consentimiento. </div>
            <p>
                Al aceptar los t??rminos y condiciones de la Aplicaci??n, usted manifiesta su consentimiento para el tratamiento de sus datos personales en t??rminos de este aviso de privacidad (Negarse al tratamiento de sus datos personales podr?? tener como consecuencia la imposibilidad de permitirle o continuar permiti??ndole la utilizaci??n de la Aplicaci??n).
            </p>                                            
        </div>
        <h6 class="pdf_subtitulo">8. ACEPTACION Y CONOCIMIENTO.</h6>
        <div class="pdf_declaraciones">
            <p class="sangria">                                                
                Al aceptar los t??rminos y condiciones de la aplicaci??n mediante la firma del presente contrato, usted manifiesta estar de acuerdo y conocer todas y cada una de los partes del aviso de privacidad el cual forma parte integrante del presente contrato manifestando que ley?? y entiende todas y cada una de sus pates.
            </p>
        </div>
        <h6 class="pdf_subtitulo">9. LIMITACIONES DE LAS GARANT??AS; LIMITACI??N DE RESPONSABILIDAD.</h6>
        <div class="pdf_declaraciones">
            <p class="sangria">                                                
                El PROVEEDOR no garantiza ni declara que el uso que usted haga del servicio ser?? ininterrumpido o que no contendr?? errores, y usted acepta que ???EL PROVEEDOR??? podr?? peri??dicamente eliminar el servicio por un tiempo indeterminado, o cancelar los servicios en cualquier momento sin necesidad de notificaci??n alguna. usted reconoce y acepta expresamente que el uso que haga del servicio queda bajo su propia cuenta y riesgo y que el servicio se proporciona ???tal cual??? y ???en funci??n de su disponibilidad???.  ???EL PROVEEDOR??? y sus filiales, subsidiarias, responsables, directores, empleados, agentes, socios y licenciantes renuncian expresamente a todas las garant??as de cualquier tipo, ya sean expresas o impl??citas, incluidas, sin car??cter limitativo, las garant??as impl??citas de comerciabilidad, adecuaci??n para un fin particular y no infracci??n de derechos de propiedad. en particular, ???EL PROVEEDOR??? y sus filiales, subsidiarias, responsables, directores, empleados, agentes, socios y licenciantes no  otorgan garant??a alguna de que (i) el servicio vaya a cumplir con sus requisitos; (ii) el servicio vaya a funcionar de forma ininterrumpida, con puntualidad y sin errores; (iii) la informaci??n que pueda obtener del uso del servicio sea precisa o fiable, y (iv) se corrija cualquier defecto o error de la aplicaci??n o de la prestaci??n  del servicio. ???EL PROVEEDOR??? NO MANIFIESTA NI GARANTIZA QUE EL SERVICIO est?? libre de p??rdidas, da??os, ataques, virus, interferencias, pirater??a inform??tica u otras intrusiones de seguridad; asimismo, ???EL PROVEEDOR??? niega toda responsabilidad a este respecto.
            </p>
        </div>
        <h6 class="pdf_subtitulo">11. INTEGRIDAD DEL CONTRATO</h6>
        <div class="pdf_declaraciones">
            <p class="sangria">                                                
                El presente Contrato constituye el acuerdo ??ntegro entre usted y el PROVEEDOR, regula su uso del Servicio, y reemplaza todo otro acuerdo anterior que usted haya celebrado con el PROVEEDOR en relaci??n con el Servicio y al firmar el presente manifiesta su aceptaci??n a los t??rminos y condiciones as?? como del aviso de privacidad contenidos en el cuerpo del presente contrato. En el supuesto de que alguna de las disposiciones del presente Contrato resultar??n inv??lidas o inexigibles, dicha disposici??n se interpretar?? de tal modo que se ajuste con las leyes pertinentes para reflejar, en la medida lo posible, la intenci??n original de las partes y las restantes disposiciones de este Contrato permanecer??n en pleno vigor y efecto. El hecho de que ???EL PROVEEDOR??? no ejerza alg??n derecho o haga cumplir una disposici??n conforme al presente Contrato no constituir?? una renuncia a dicha disposici??n o derecho. El ???USUARIO??? acuerda que, salvo se establezca expresamente de otra manera en este Contrato, no habr?? terceros beneficiarios del presente Contrato. El presente documento cumple con las disposiciones marcadas en la Ley Federal de Telecomunicaciones y Radiodifusi??n.
            </p>
        </div>
        <p>
            Le??do el presente contrato por las partes, lo firman de conformidad, en {{ $data_advisers->branch_office }}, {{ $data_advisers->branch_office_state }}, el {{ $date }}. 
        </p>
    </div>
    <div class="linea_firma">
        <span class="firma">
            {{ $data_advisers->first_name." ".$data_advisers->last_name }}
        </span>
        <div style="text-align:center; padding-top:10px;">
            <span>
                {{ $data_advisers->branch_office }}, {{ $data_advisers->branch_office_state.", a ".$date }}.
            </span>
        </div>
    </div>                                    
</fieldset>



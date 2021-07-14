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
        1. TÉRMINOS Y CONDICIONES DE LA APPLICACION MÓVIL MANZAPP
    </h6>
    <div>                                   
        <p>
            EL PRESENTE CONTRATO LEGAL CELEBRADO ENTRE USTED (EN LO SUCESIVO EL “USUARIO”) Y FINANCIERA MAESTRA S.A. DE C.V., SOFOM, E.N.R. (EN LO SUCESIVO “EL PROVEEDOR”) REGULA EL USO DE LA APLICACIÓN MANZAPP (EN LO SUCESIVO “EL PRODUCTO”), LOS SERVICIOS Y LOS SITIOS WEB (DENOMINADO DE FORMA COLECTIVA “EL SERVICIO”) DE “EL PRODUCTO” EN MENCION, DOCUMENTO QUE AL FIRMAR DE CONFORMIDAD EN TODAS Y CADA UNA DE SUS PARTES INCLUIDO EL AVISO DE PRIVACIDAD CONTENIDO EN EL PRESENTE ACEPTA AJUSTARCE A SUS TERMINOS Y CONDICIONES.
        </p>
        <p>
            ManzApp es una aplicación proveída por FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R. que le permitirá acceder a múltiples beneficios en el desarrollo de su actividad individual  en ventas, al  obtener servicios como la identificación de puntos de venta con compradores potenciales, la creación y/o asignación de la ruta de sus venta y/o de sus asociados en su labor de venta, comunicación entre los usuarios de “EL PRODUCTO” por medio de comunicados, sugerencias de traslado a su destino, almacenaje de su ruta de venta diaria, registro de posición en puntos de ventas mediante el uso de Geocercas, seguimiento de posición en Geocerca en los puntos de venta, ver posición histórica en Geocerca de los puntos de venta, así como participar en las promociones y/o concursos realizados por “EL PROVEEDOR”, servicios  que estarán basados en la ubicación GPS (si está disponible) y puntos Wi-Fi públicos y ubicaciones de torres de telefonía móvil del usuario, exclusivamente cuando el usuario se encuentre dentro del área asignada a una Geocerca siempre que su estancia en la misma, exceda de 30 (treinta) minutos, de conformidad con los términos y condiciones que se establecen en el presente Contrato. ManzApp se activa en dispositivos que cuenten con un sistema iOS o Android, para lo cual es necesario comunicarse con “EL PROVEEDOR” a fin de que se le otorgue un ID, el cual asociado a su cuenta de email será necesario para activar “EL PRODUCTO” durante la configuración del dispositivo.
        </p>
        <h6 class="pdf_subtitulo">1. DEFINICIONES.</h6>
        <div class="pdf_declaraciones">
            <p class="sangria">
                <b>1.1. ID.</b>
                Se denomina al número de identificación que “EL PROVEEDOR” generará a favor del Usuario, previo registro, con el cual el Usuario podrá acceder a “EL PRODUCTO”. Este nombre puede estar compuesto de letras, números o signos y no podrá ser modificado por “EL PROVEEDOR”.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>1.2. Geocerca.</b>
                 Área geográfica definida por “EL PROVEEDOR”, alrededor de la cual se crea una cerca virtual que registra cada vez que el “USUARIO” permanezca por más de 30 (treinta) minutos consecutivos.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>1.3. GPS</b>
                 Sistema de navegación que envía información sobre la posición de una persona u objeto.
            </p>
        </div>
        <h6 class="pdf_subtitulo">2. REQUISITOS PARA LA UTILIZACIÓN DEL SERVICIO.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>2.1. Dispositivo móvil,email yID.</b>
                Para la utilización de “EL SERVICIO”, es necesario contar con un dispositivo móvil con un sistema iOS o Android respectivamente, con acceso a Internet, (se podrán aplicar cargos), y podrá requerir actualizaciones periódicas para su correcto funcionamiento. Para la utilización de “EL PRODUCTO” “EL PROVEEDOR” se reserva el derecho de otorgar ID, a las personas que considere adecuadas para la utilización de “EL PRODUCTO” de conformidad a las políticas establecidas por “EL PROVEEDOR”.  Para el otorgamiento del ID será necesario que el usuario proporcione datos personales que serán debidamente tratados conforme al aviso de privacidad contenido en el presente contrato y una vez otorgado el ID podrá activar “EL PRODUCTO” ingresando por medio de su cuenta de email y su ID a “EL PRODUCTO”.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>2.2. Limitaciones de Uso.</b>
                El USUARIO se compromete a usar el SERVICIO única y exclusivamente para los propósitos permitidos por el presente Contrato y exclusivamente en la extensión que permita cualquier legislación, regulación o práctica comúnmente aceptada de la jurisdicción aplicable. “EL PROVEEDOR” se reserva su derecho de cancelar su ID en caso de darse un mal manejo del PRODUCTO y/o el SERVICIO o bien de considerar que ya no se ajusta a el perfil adecuado para el uso del SERVICIO de conformidad a las políticas internas de “EL PROVEEDOR” mismas que se le dieron a conocer al momento de ser otorgado su ID, y las cuales Usted manifiesta conocer y estar de acuerdo al momento de firmar el presente contrato, así como al momento de activar “EL SERVICIO” y/o “EL PRODUCTO”.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>2.3. Modificación del Servicio.</b>
                El PROVEEDOR se reserva el derecho de modificar el presente Contrato en cualquier momento y de imponer términos o condiciones nuevas o adicionales sobre el uso que haga del SERVICIO. Dichas modificaciones y los términos y condiciones adicionales se le comunicarán y, si los acepta, entrarán en vigor inmediatamente y quedarán incorporados a este Contrato. En caso de que rechace aceptar dichas modificaciones, “EL PROVEEDOR” tendrá el derecho a rescindir este Contrato y cancelar su cuenta. Usted acepta que “EL PROVEEDOR” no será responsable ante usted ni ante ningún tercero por cualquier modificación o cese del Servicio.
            </p>
        </div>
        <h6 class="pdf_subtitulo">3. CARACTERÍSTICAS Y SERVICIOS.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>3.1. Uso de Servicios basados en la ubicación.</b>
                Tanto “EL PRODUCTO” como “EL SERVICIO” se basa en la información de ubicación dentro de las Geocercas establecidas únicamente, basada en el dispositivo mediante GPS (si está disponible) y puntos Wi-Fi públicos y ubicaciones de torres de telefonía móvil. Para el suministro de dichas facilidades o servicios, donde estén disponibles, “EL PROVEEDOR” así como sus socios y licenciantes de haberlos, deben recolectar, utilizar, transmitir, procesar y mantener sus datos de ubicación, incluyendo, pero no limitándose a, la ubicación geográfica de su dispositivo solo cuando este dentro de las Geocercas establecidas y la información relacionada a su ID de usuario, información que al aceptar los presentes términos  y condiciones usted manifiesta estar de acuerdo en otorgar en los términos y condiciones detallados en el aviso de privacidad que más adelante se detallara.
            </p>
            <p>
                El “USUARIO” podrá retirar el consentimiento a “EL PROVEEDOR” y a sus socios y licenciantes de la recolección, utilización, transmisión, procesamiento y mantenimiento de datos de ubicación y cuenta, en cualquier momento, en los términos establecidos en el aviso de privacidad detallado más adelante. Los datos relativos a la ubicación proporcionados por “EL SERVICIO” no deben ser tomados en cuenta en situaciones donde se requiera la ubicación precisa de la información, o cuando la ubicación de datos errónea, imprecisa, inoportuna o incompleta pueda dar lugar a muerte, lesión personal o daño a la propiedad o al medio ambiente. “EL PROVEEDOR” utilizará la habilidad y cuidado razonables para proveer “EL SERVICIO”, pero ni “EL PROVEEDOR” ni ninguno de sus proveedores de contenido y/o servicios garantizan la disponibilidad, precisión, integridad, confianza u oportunidad de la información relativa a la ubicación o de cualesquier datos visualizados por medio de “EL SERVICIO”. (Los servicios basados en ubicación no deben ser utilizados ni son apropiados como sistema de ubicación de emergencia).
            </p>
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion"></div>
            <p class="sangria">
                <b>3.2. Creacion y/o asignación de rutas.</b>
                Al darse de alta un grupo de personas en la aplicación para realizar sus actividades de venta en una determinada zona, estos pueden acceder a una ruta opcional, asignada por la aplicación, la cual les permitirá optimizar al máximo su labor en venta, al aprovechar mejor su tiempo de traslado, al ubicar las mejores rutas para llegar a sus destinos de venta mediante el uso del GPS de su unidad móvil, evitando que se concentren usuarios de mas en un punto de venta y descuiden algún otro punto.
            </p>
            <p>
                Las rutas utilizadas por los usuarios serán almacenadas por “EL PROVEEDOR” en una base de datos únicamente con fines de información comercial y al aceptar los presentes términos y condiciones usted otorga pleno consentimiento para el manejo de dicha información a “EL PROVEEDOR” y sus filiales, subsidiarias y responsables de existir tales y asi mismo el “USUARIO” podrá solicitar a “EL PROVEEDOR” le remita el historial de su ruta de ventas en Geocercas enviando un correo electrónico a la siguiente dirección: oficialdeprivacidad@creditomaestro.com.
            </p>
            <p>
                Al ser esta una aplicación diseñada para vendedores que promocionan créditos de todo tipo, a personal y pensionados del IMSS en general, las Geocercas se limitaran única y exclusivamente a centros de trabajo ubicados en dichas dependencias, entendiéndose mas no limitándose a Centros de Salud, Delegaciones y Centros administrativos y/o Sindicales del IMSS, a lo cual al momento de aceptar los presentes términos y condiciones usted manifiesta estar de acuerdo a lo anterior. EL “USUARIO” puede sugerir a “EL PROVEEDOR” la implementación de Geocercas en puntos de venta diversos a los mencionados comunicándose con “EL PROVEEDOR” por el medio mencionado en el párrafo que antecede, reservándose su derecho “EL PROVEEDOR” de aplicarlos o no.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>3.3 Comunicados.</b>
                El usuario y/o los usuarios podrán comunicarse entre si mediante comunicados previamente aprobados por “EL PROVEEDOR”, así como anuncios que “EL PROVEEDOR” podrá mandar a todos sus usuarios con recomendaciones para optimizar su labor de venta.
            </p>
        </div>
        <div class="pdf_declaraciones">
            <p class="sangria">
                <b>3.4. Sugerencias de traslado.</b>
                El PRODUCTO puede emitir sugerencias de traslado a un posible punto de venta mediante la utilización de el GPS (si está disponible) a efecto optimizar el tiempo de traslado a los diferentes puntos de venta del usuario.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>3.5. Promociones y/o concursos realizados por el PROVEEDOR.</b>
                Al ser usuario de “EL PRODUCTO” usted podrá formar parte de las promociones y/o concursos que organizara el PROVEEDOR las cuales premiaran a los usuarios que en su labor de venta consigan los más altos niveles de venta en comparación con los demás usuarios, promociones y/o concursos que quedaran sujetos a los términos y condiciones que respectivamente les sean fijados al momento que sean notificados por medio de “EL PRODUCTO”.
            </p>
        </div>
        <h6 class="pdf_subtitulo">4. SU USO DEL SERVICIO.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>4.1. Su ID.</b>
                Como usuario registrado del Servicio. No revele la información de su ID a nadie más. Usted es el único responsable de mantener la confidencialidad y seguridad de su ID y de todas las actividades que ocurran en o a través de su Cuenta, y usted acepta notificar inmediatamente a “EL PROVEEDOR” sobre cualquier violación a la seguridad en su Cuenta. También reconoce y acepta que el Servicio está diseñado y destinado al uso personal de forma individual, y que no deberá compartir la información de su Cuenta con ninguna persona. “EL PROVEEDOR” no será responsable por ninguna pérdida derivada del uso no autorizado de su ID, como resultado de la omisión por parte de usted de observar dichas normas.
                <br>
                Para utilizar el Servicio, usted debe solicitarlo a “EL PROVEEDOR” enviando un correo electrónico a la siguiente dirección: oficialdeprivacidad@creditomaestro.com con sus datos de identificación así como el porqué necesita utilizar “EL PRODUCTO” para efecto de que “EL PROVEEDOR” verifique si cumple con el perfil necesario para otorgarle un ID para el uso de la aplicación de conformidad a sus políticas internas, mismas que se le darán a conocer al momento de otorgarle su ID o negarle el mismo previa explicación de la negativa, políticas que desde este momento usted manifiesta conocer y aceptar en todos y cada uno de sus términos al aceptar los términos y condiciones contenidos en el presente contrato. Usted se compromete a suministrar información precisa y completa al solicitar su ID y hacer uso del Servicio, así como a actualizar su Información de Registro de Servicio para mantener dicha información precisa y completa. El hecho de no proporcionar Datos de registro exactos, actualizados y completos puede dar lugar a la suspensión o cancelación de su ID. El “USUARIO” acepta que el PROVEEDOR almacene y utilice la Información de Registro de Servicio que suministra con el objetivo de mantener su Cuenta.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>4.2. Prohibición de Reventa del Servicio.</b>
                El USUARIO acepta que no reproducirá, copiará, duplicará, venderá, revenderá, alquilará ni comercializará “EL SERVICIO” (ni cualquier parte de mismo) para ningún fin.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>4.3. Acceso a su Cuenta y Contenido.</b>
                “EL PROVEEDOR” se reserva el derecho a tomar las medidas que determine necesarias o convenientes para hacer cumplir y/o comprobar el cumplimiento con cualquier disposición de este Contrato. Usted reconoce y acepta que  “EL PROVEEDOR”, sin responsabilidad para usted, puede acceder, usar, conservar y/o revelar la información y el Contenido de su Cuenta a las autoridades policiales, funcionarios de gobierno, y/o terceros, en la medida que  “EL PROVEEDOR” determine necesaria o conveniente, si así se le solicita legalmente o en la creencia de buena fe de que dicho acceso, uso, revelación o conservación es razonablemente necesario para: (a) cumplir procesos o solicitudes legales; (b) hacer cumplir este Contrato, incluyendo la investigación de cualquier posible infracción relacionada con las mismas; (c) detectar, impedir o de otro modo solucionar problemas de seguridad, fraudes o problemas técnicos; o (d) proteger los derechos, la propiedad o la seguridad de  “EL PROVEEDOR”, sus usuarios, un tercero o el público conforme a lo que exija o permita la legislación.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>4.4. Información de Marca Comercial.</b>
                FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R., su logotipo y las demás marcas comerciales, marcas de servicio, gráficos y logotipos de FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R., usados en relación con “EL SERVICIO” son marcas comerciales registradas de FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R. Las otras marcas comerciales, marcas de servicio, gráficos y logotipos usados en relación con “EL SERVICIO” pueden ser marcas comerciales de sus respectivos propietarios. No se le concede ningún derecho ni licencia sobre las marcas comerciales anteriormente mencionadas y, además, usted acepta que no eliminará, ocultará ni alterará ningún aviso de propiedad (incluidos los avisos de marcas comerciales y de derechos de autor) que pueda insertarse o incluirse dentro del Servicio.
            </p>
        </div>
        <h6 class="pdf_subtitulo">5. Software.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>5.1. Derechos de Propiedad de FINANCIERA MAESTRA, S.A. DE C.V., SOFOM, E.N.R., </b>
                El “USUARIO” reconoce y acepta que “EL PROVEEDOR” y/o sus cedentes de licencia poseen todos los derechos e intereses legales en el Servicio, incluidos, entre otros, los gráficos, la interfaz del usuario y los scripts usados para implementar el Servicio, así como cualquier actualización que se le proporcione como parte de y/o relacionado con el Servicio, incluidos cualquiera de los derechos a la propiedad intelectual que allí existen, estén registrados o no, y existan en el mundo o no. Además, usted acepta que el Servicio contiene información confidencial o de propiedad protegida por las leyes de propiedad intelectual aplicables y otras legislaciones, incluyendo pero no limitándose a la ley sobre derechos de autor. Usted acuerda que no utilizará dicha información o materiales privilegiados y confidenciales de modo alguno, salvo para el uso de los Servicios de conformidad con el presente Contrato. Ninguna parte de los Servicios puede ser reproducida de manera alguna o por medio alguno, salvo que dicha reproducción esté permitida conforme los presentes términos:
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>5.1.1. Licencia del PROVEEDOR.</b>
                El uso de “EL PRODUCTO” o de cualquier parte de “EL SERVICIO”, excepto para el uso del servicio que se permite en el presente contrato, queda totalmente prohibido e infringe los derechos de la propiedad intelectual de otras personas y podría suponer sanciones civiles y penales, incluidos posibles daños económicos, por infracción de copyright.
            </p>
        </div>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>5.1.2. Actualizaciones</b>
                Periódicamente, “EL PROVEEDOR” podrá actualizar “EL PRODUCTO” utilizado para “EL SERVICIO”. Con el fin de continuar utilizando el Servicio de una manera optima, dichas actualizaciones pueden incluir correcciones de errores, adiciones o mejoras de funciones o versiones completamente nuevas de la aplicación las cuales serán necesarias para su correcto funcionamiento, en virtud de lo anterior desde este momento  al aceptar los presentes términos y condiciones, usted se compromete a aceptar e instalar las actualizaciones subsecuentes que el PROVEEDOR pudiese generar en tanto siga teniendo la necesidad de utilizar el servicio.
            </p>
        </div>
        <h6 class="pdf_subtitulo">6. CANCELACIÓN.</h6>
        <div class="pdf_declaraciones">                                            
            <p class="sangria">
                <b>6.1. Cancelación voluntaria por parte de Usted.</b>
                El uso de “EL PRODUCTO” y “EL SERVICIO” es por su propia voluntad y podrá cancelarlo en cualquier momento, previa solicitud a “EL PROVEEDOR” enviando un correo electrónico a la siguiente dirección: oficialdeprivacidad@creditomaestro.com. para efecto de que “EL PROVEEDOR” pueda procesar la debida cancelación de su cuenta y contraseña en los términos previstos de conformidad a las políticas vigentes de “EL PROVEEDOR”, dadas a conocer al momento de la activación de su cuenta y contraseña.
            </p>
            <p>
                “EL PROVEEDOR” se reserva su derecho de cancelar, la cuenta y contraseña de cualquier usuario que a su criterio y aplicación de sus políticas, considere que no cumple con el perfil para utilizar dicha aplicación o bien infrinja las políticas dadas a conocer al usuario al momento de activar su cuenta y contraseña.
            </p>
        </div>
        <div class="pdf_declaraciones">                                             
            <p class="sangria">
                <b>6.2. Cancelación por parte del PROVEEDOR.</b>
                “EL PROVEEDOR” puede cancelar o suspender inmediatamente y en cualquier momento, bajo determinadas circunstancias y sin notificación previa, la cuenta y contraseña de cualquier usuario o acceso al Servicio. Entre las causas de esta cancelación se incluyen las siguientes: (a) infracciones de este Contrato o de cualquier otra política o directriz a la que se haga referencia aquí o se publique en el Servicio; (b) una solicitud por su parte para la cancelación o terminación de su Cuenta; (c) una solicitud u orden de imposición legal, de un organismo judicial o de otra agencia estatal; (d) si la provisión del Servicio a usted pasa a ser ilegal; (e) problemas técnicos o de seguridad inesperados; (f) su participación en actividades fraudulentas o ilegales.  “EL PROVEEDOR” realizará cancelaciones o suspensiones de este tipo a su entera discreción, y “EL PROVEEDOR” no se responsabiliza ante usted ni ante terceros de los daños que puedan derivarse o surgir como consecuencia de dicha cancelación o suspensión de su Cuenta y contraseña o del acceso al Servicio. Además, el PROVEEDOR podrá cancelar su Cuenta con previo aviso si (a) su Cuenta ha sido inactiva por quince (15) días; o (b) existe una descontinuación general o modificación importante del Servicio o cualquier parte del mismo. “EL PROVEEDOR” realizará cancelaciones o suspensiones de este tipo a su entera discreción, y no se responsabiliza ante usted ni ante terceros de los daños que puedan derivarse o surgir como consecuencia de dicha cancelación o suspensión de su Cuenta y/o del acceso al Servicio.
            </p>
        </div>
        <h6 class="pdf_subtitulo">7. AVISO DE PRIVACIDAD.</h6>
        <h6 class="pdf_subtitulo_sub">
            Aviso de Privacidad Integralpara los Usuarios de la Aplicación Móvil ManzApp
        </h6>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">I.</div>
            <div class="titulo_declaracion"> Identidad y Domicilio del Responsable.</div>
            <p>
                De conformidad con lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (la “<u>Ley de Datos</u>”), su Reglamento, los Lineamientos del Aviso de privacidad y demás disposiciones aplicables, le informamos que Financiera Maestra, S.A. de C.V., SOFOM, E.N.R., (el “<b>Responsable</b>”), con domicilio en Tiburcio Montiel 14, Colonia San Miguel Chapultepec, Delegación Miguel Hidalgo, C.P. 11850, Ciudad de México (la “<u>Dirección de Contacto</u>”), tratará los datos personales que recabe de usted (el “<u>Titular</u>”) en su carácter de usuario de la aplicación móvil ManzApp  (la “<u>Aplicación</u>”), en los términos del presente aviso de privacidad.
            </p>                                            
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">II.</div>
            <div class="titulo_declaracion"> Datos de Contacto del Responsable.</div>
            <p>
                El Responsable ha designado a un encargado de datos personales (el “<u>Oficial de Privacidad</u>”). En caso de que desee cualquier información respecto del presente aviso de privacidad o en relación con el ejercicio de cualesquiera de sus derechos derivados del tratamiento de sus datos personales, por favor contacte a nuestro Oficial de Privacidad, enviando un correo electrónico a la siguiente dirección: oficialdeprivacidad@creditomaestro.com.
            </p>                                            
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">III.</div>
            <div class="titulo_declaracion"> Finalidades del Tratamiento de sus Datos Personales.</div>
            <p>
                Sus datos personales serán tratados para las siguientes finalidades necesarias para cumplir con los términos y condiciones aceptados por el Titular respecto del uso de la Aplicación:
            </p> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">i.</div>
                <div class="titulo_declaracion"> 
                    Establecer y mantener su cuenta como usuario registrado de la Aplicación.
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">ii.</div>
                <div class="titulo_declaracion"> 
                    Proporcionarle beneficios para el desarrollo de su actividad de ventas a través de la Aplicación.
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
                    Crear y asignarle una ruta opcional para la realización de sus actividades de ventas en una zona determinada, con objeto de optimizar dicha labor.
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
                    Permitir la comunicación entre los usuarios de la Aplicación en los casos que lo apruebe el Responsable.
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
                    Aplicar al Titular un cuestionario de campo a efecto de conocer su experiencia en el desempeño de sus actividades de ventas. 
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">ix.</div>
                <div class="titulo_declaracion"> 
                    Notificar sobre las promociones y concursos que organice el Responsable para premiar a los usuarios de la Aplicación con base en sus niveles de venta.
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">x.</div>
                <div class="titulo_declaracion"> 
                    Verificar que se cumplan las políticas y procedimientos del Responsable, sus filiales y subsidiarias.
                </div>                                            
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">xi.</div>
                <div class="titulo_declaracion"> 
                    Dar cumplimiento a obligaciones contraídas por el Responsable.
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">xii.</div>
                <div class="titulo_declaracion"> 
                    La prevención, detección y/o remediación de fraudes, problemas de seguridad y problemas técnicos u otros ilícitos en agravio del Responsable, los usuarios de la Aplicación y/o de terceros. 
                </div>                                            
            </div> 
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">xiii.</div>
                <div class="titulo_declaracion"> 
                    Realizar auditorías e investigaciones por el Responsable, sus filiales y subsidiarias y sus respectivos auditores.
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
            [No trataremos sus datos personales para finalidades que no sean necesarias para la utilización de la Aplicación.]
        </p>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">IV.</div>
            <div class="titulo_declaracion"> Datos Personales que se Tratarán.</div>
            <p>
                Para alcanzar las finalidades mencionadas en la sección III anterior, el Responsable tratará los siguientes datos personales del Titular: datos de identificación, datos de contacto, datos de geolocalización y datos laborales.
            </p>
            <p>
               [No trataremos datos personales sensibles del Titular, en su carácter de usuario de la Aplicación.] 
            </p>
            <p>
                El Responsable podrá recabar sus datos personales ya sea personal o directamente cuando así nos los proporcione, a través de los sitios de internet del Responsable y/o indirectamente a través de otros medios permitidos por la ley.
            </p>                                            
        </div> 
        <div class="pdf_declaraciones">
            <div class="num_declaracion">V.</div>
            <div class="titulo_declaracion"> Opciones para Limitar el Uso o Divulgación de sus Datos Personales.</div>
            <p>
                El Titular podrá limitar el uso o divulgación de sus datos personales a fin de que éstos no sean tratados para finalidades no necesarias para la relación jurídica entre el Titular y el Responsable.
            </p>
            <p>
                Si desea limitar el uso o divulgación de sus datos personales, deberá presentar su solicitud al Oficial de Privacidad, enviando un correo electrónico a la siguiente dirección: oficialdeprivacidad@creditomaestro.com, a efecto de que se le inscriba en un listado de exclusión que formará el Responsable.
            </p>
        </div> 
        <div class="pdf_declaraciones">
            <div class="num_declaracion">VI.</div>
            <div class="titulo_declaracion"> Medios para Ejercer los Derechos Arco. </div>
            <p>
                El Titular podrá ejercer en todo momento sus derechos de acceso, rectificación, cancelación u oposición al tratamiento que le damos a sus datos personales (los “<u>Derechos ARCO</u>”). Es importante mencionarle que el ejercicio de cada uno de estos derechos es independiente entre sí, es decir, no es necesario agotar uno para ejercer alguno de los otros.
            </p>
            <p>
                Cada uno de los derechos respectivamente le permite:
            </p>
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">i.</div>                                            
            <p>
                <u> Acceso: </u>
                El Titular podrá solicitar en todo momento conocer qué datos suyos han sido recabados y conserva el Responsable en sus bases de datos, así como los detalles del tratamiento de los mismos.
            </p>                                                                                
        </div> 
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">ii.</div>                                            
            <p>
                <u> Rectificación: </u>
                En caso de que alguno de sus datos sea inexacto o incompleto podrá solicitar al Responsable su corrección en las bases de datos, debiendo adjuntar la documentación que acredite dicha modificación.
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">iii.</div>                                            
            <p>
                <u> Cancelación: </u>
                Podrá solicitar en todo momento la cancelación de sus datos de las bases de datos que tenga el Responsable cuando considere que no se requieren para las finalidades señaladas en el presente aviso de privacidad, estén siendo utilizados para finalidades no consentidas o haya finalizado nuestra relación jurídica; en caso de ser procedente la solicitud, los datos serán bloqueados y no podrán ser tratados de ninguna manera.
            </p>                                                                                
        </div> 
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">iv.</div>                                            
            <p>
                <u> Oposición: </u>
                En todo momento el Titular podrá oponerse a que el Responsable realice el tratamiento de sus datos para fines específicos, por ejemplo, para envíos de publicidad.
            </p>                                                                                
        </div>
        <p>
            Para ejercer los Derechos ARCO, el Titular o su representante legal deberán elaborar la "Solicitud Ejercicio de los Derechos ARCO" y enviarla escaneada al correo electrónico oficialdeprivacidad@creditomaestro.com, o bien, presentarla en la Dirección de Contacto, a la atención del Oficial de Privacidad, para su atención y seguimiento.
        </p>
        <p>
            Es importante que considere los siguientes puntos al momento de enviar o entregar su solicitud:
        </p> 
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">i.</div>                                            
            <p>                                                
                La solicitud deberá llenarse en todos sus campos claramente y con letra de molde.
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">ii.</div>                                     
            <p style="font-size: 12.5px;">                                                
                Indicar su nombre, domicilio y correo electrónico para poder comunicarle la respuesta a su solicitud.
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
                Anexar cualquier documento o información que facilite la localización de sus datos personales.
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">v.</div>                                            
            <p>                                                
                Anexar copia del documento que acredite la identidad del titular (credencial de elector, cédula profesional o pasaporte vigente).
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">vi.</div>                                            
            <p>                                                
                Si la solicitud se tramita a través de un representante legal, incluir el poder notarial en el que conste la facultad otorgada por el titular para este trámite, o bien, una carta poder otorgada por el titular con la firma de aceptación del apoderado, ante la presencia de dos testigos, debiendo incluir el nombre, firma, domicilio y copia fotostática de la identificación oficial de cada uno de los firmantes.
            </p>                                                                                
        </div>
        <div class="pdf_declaraciones_int">
            <div class="num_declaracion">vii.</div>                                            
            <p>                                                
                Para el caso de rectificación de datos, adjuntar la documentación que acredite dicha modificación.
            </p>         
        </div>
        <p>
           Una vez que el Titular haya presentado su solicitud al Responsable, le sugerimos enviar un correo electrónico de seguimiento a: oficialdeprivacidad@creditomaestro.com.
        </p>
        <p>
           Nuestra respuesta será enviada al correo electrónico indicado en su solicitud en un plazo máximo de 20 días hábiles contados a partir del día en que se haya recibido su solicitud. En caso de que su solicitud se conteste de manera afirmativa o procedente, los cambios solicitados se harán en un plazo máximo de 15 días hábiles. En caso de que usted solicite el acceso a sus datos personales, el Responsable le informará mediante el correo electrónico en el que comuniquemos nuestra respuesta a su solicitud, el medio por el cual se le dará acceso a su información en caso de ser procedente. El Responsable podrá ampliar los plazos referidos en este párrafo, por una sola vez, por un periodo igual al original, lo cual le será informado. 
        </p>
        <p>
            El Responsable podrá negar el ejercicio de sus Derechos ARCO, en los supuestos que lo permita la Ley de Datos, por lo que deberá informar el motivo de tal decisión.
        </p>
        <p>
            La negativa podrá ser parcial, en cuyo caso el Responsable efectuará el acceso, rectificación, cancelación u oposición en la parte procedente.
        </p>
        <p>
            El ejercicio de los Derechos ARCO será gratuito, pero si el Titular reitera su solicitud en un periodo menor a doce meses, los costos serán de tres días de Salario Mínimo General Vigente en el Distrito Federal, más I.V.A., a menos que existan modificaciones sustanciales al presente aviso de privacidad, que motiven nuevas solicitudes. El Titular deberá de cubrir los gastos justificados de envío o el costo de reproducción de documentos en copias u otros formatos y, en su caso, el costo de la certificación de los documentos.
        </p>
        <p>
           Si considera que sus derechos de protección de sus datos personales han sido lesionados por alguna conducta de nuestros empleados o de nuestras actuaciones o respuestas, o presume que en el tratamiento de sus datos personales existe alguna violación a las disposiciones previstas en la Ley de Datos, podrá interponer la queja o denuncia correspondiente ante el Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales (INAI). 
        </p>
        <p>
            Para acceder e imprimir la "Solicitud Ejercicio de los Derechos ARCO" deberá consultar la sección de Derechos ARCO en la página de internet www.creditomaestro.com.mx.
        </p>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">VII.</div>
            <div class="titulo_declaracion"> Medios para Revocar el Consentimiento para el Tratamiento de los Datos Personales. </div>
            <p>
                Para revocar su consentimiento para el tratamiento de sus datos personales, deberá presentar su solicitud al Oficial de Privacidad, enviando un correo electrónico a la siguiente dirección: oficialdeprivacidad@creditomaestro.com.
            </p>
            <p>
                Si con posterioridad a la revocación, solicita la confirmación de la misma, el Responsable le responderá de forma expresa.
            </p>
            <p>
                Le informamos que no en todos los casos podremos atender su solicitud o concluir el tratamiento de sus datos personales de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando sus datos personales. (Revocar su consentimiento para el tratamiento de sus datos personales podrá tener como consecuencia la imposibilidad de continuar permitiéndole la utilización de la Aplicación).
            </p>
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">VIII.</div>
            <div class="titulo_declaracion"> Transferencias de sus Datos Personales. </div>
            <p>
                Le informamos que, para cumplir con las finalidades mencionadas en la sección III anterior, el Responsable podrá transferir los datos personales del Titular sin su consentimiento cuando:
            </p>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">i.</div>                                            
                <p>                                                
                    La transferencia esté prevista en una ley o tratado en los que México sea parte; 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">ii.</div>                                            
                <p>                                                
                    La transferencia sea necesaria para la prevención o el diagnóstico médico, la prestación de asistencia sanitaria, tratamiento médico o la gestión de servicios sanitarios; 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">iii.</div>                                            
                <p>                                                
                    La transferencia sea efectuada a sociedades controladoras, subsidiarias o afiliadas bajo el control común del Responsable, o a una sociedad matriz o a cualquier sociedad del mismo grupo del Responsable que opere bajo los mismos procesos y políticas internas; 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">iv.</div>                                            
                <p>                                                
                    La transferencia sea necesaria por virtud de un contrato celebrado o por celebrar en interés del Titular, por el Responsable y un tercero; 
                </p>                                                                                
            </div>
            <div class="pdf_declaraciones_int">
                <div class="num_declaracion">v.</div>                                            
                <p>                                                
                    La transferencia sea necesaria o legalmente exigida para la salvaguarda de un interés público, o para la procuración o administración de justicia; 
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
                    La transferencia sea precisa para el mantenimiento o cumplimiento de la relación jurídica entre el Responsable y el Titular.
                </p>                                                                                
            </div>                                                                                        
        </div>
        <p>
            En dichos supuestos, le informamos que, el Responsable como responsable de los datos personales, le garantiza que el presente aviso de privacidad será respetado en todo momento y se adoptarán las medidas necesarias para que las personas que tengan acceso a sus datos personales cumplan con el mismo, así como con los principios de protección de datos personales establecidos en la Ley de Datos.  
        </p>
        <p>
           Salvo estos casos, el Responsable no compartirá o transferirá sus datos personales a terceros con excepción de los casos previstos en las leyes aplicables, o en caso de que el Titular haya consentido dicha transferencia de sus datos personales previamente. 
        </p>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">IX.</div>
            <div class="titulo_declaracion"> Uso de Tecnologías de Rastreo. </div>
            <p>
                Le informamos que el Responsable utilizará el sistema GPS (si está disponible), puntos Wi-Fi públicos y ubicaciones de torres de telefonía móvil para obtener su ubicación geográfica al estar dentro del rango de las geocercas establecidas.
            </p>
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">X.</div>
            <div class="titulo_declaracion"> Medidas de Seguridad. </div>
            <p>
                Sus datos personales serán protegidos de conformidad con las medidas de seguridad administrativas, técnicas y físicas, que el Responsable tiene implementadas. Estas medidas incluyen políticas, procedimientos, capacitación a empleados, control de accesos físicos y elementos técnicos relacionados con los controles de acceso a la información.
            </p>
            <p>
                En caso de que ocurra una vulneración de seguridad en cualquier fase del tratamiento de sus datos personales, que afecte de forma significativa sus derechos patrimoniales o morales, el Oficial de Privacidad le comunicará de forma inmediata por correo electrónico o, si el Responsable no puede contactarlo por correo electrónico, entonces utilizará el correo tradicional, para que el Titular pueda tomar las medidas necesarias correspondientes para la defensa de sus derechos.
            </p>
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">XI.</div>
            <div class="titulo_declaracion"> Cambios o Modificaciones al aviso de privacidad. </div>
            <p>
                El Responsable se reserva el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad, en el entendido de que toda modificación al mismo se le dará a conocer al Titular a través de la Aplicación o mediante correo electrónico.
            </p>                                            
        </div>
        <div class="pdf_declaraciones">
            <div class="num_declaracion">XII.</div>
            <div class="titulo_declaracion"> Consentimiento. </div>
            <p>
                Al aceptar los términos y condiciones de la Aplicación, usted manifiesta su consentimiento para el tratamiento de sus datos personales en términos de este aviso de privacidad (Negarse al tratamiento de sus datos personales podrá tener como consecuencia la imposibilidad de permitirle o continuar permitiéndole la utilización de la Aplicación).
            </p>                                            
        </div>
        <h6 class="pdf_subtitulo">8. ACEPTACION Y CONOCIMIENTO.</h6>
        <div class="pdf_declaraciones">
            <p class="sangria">                                                
                Al aceptar los términos y condiciones de la aplicación mediante la firma del presente contrato, usted manifiesta estar de acuerdo y conocer todas y cada una de los partes del aviso de privacidad el cual forma parte integrante del presente contrato manifestando que leyó y entiende todas y cada una de sus pates.
            </p>
        </div>
        <h6 class="pdf_subtitulo">9. LIMITACIONES DE LAS GARANTÍAS; LIMITACIÓN DE RESPONSABILIDAD.</h6>
        <div class="pdf_declaraciones">
            <p class="sangria">                                                
                El PROVEEDOR no garantiza ni declara que el uso que usted haga del servicio será ininterrumpido o que no contendrá errores, y usted acepta que “EL PROVEEDOR” podrá periódicamente eliminar el servicio por un tiempo indeterminado, o cancelar los servicios en cualquier momento sin necesidad de notificación alguna. usted reconoce y acepta expresamente que el uso que haga del servicio queda bajo su propia cuenta y riesgo y que el servicio se proporciona “tal cual” y “en función de su disponibilidad”.  “EL PROVEEDOR” y sus filiales, subsidiarias, responsables, directores, empleados, agentes, socios y licenciantes renuncian expresamente a todas las garantías de cualquier tipo, ya sean expresas o implícitas, incluidas, sin carácter limitativo, las garantías implícitas de comerciabilidad, adecuación para un fin particular y no infracción de derechos de propiedad. en particular, “EL PROVEEDOR” y sus filiales, subsidiarias, responsables, directores, empleados, agentes, socios y licenciantes no  otorgan garantía alguna de que (i) el servicio vaya a cumplir con sus requisitos; (ii) el servicio vaya a funcionar de forma ininterrumpida, con puntualidad y sin errores; (iii) la información que pueda obtener del uso del servicio sea precisa o fiable, y (iv) se corrija cualquier defecto o error de la aplicación o de la prestación  del servicio. “EL PROVEEDOR” NO MANIFIESTA NI GARANTIZA QUE EL SERVICIO esté libre de pérdidas, daños, ataques, virus, interferencias, piratería informática u otras intrusiones de seguridad; asimismo, “EL PROVEEDOR” niega toda responsabilidad a este respecto.
            </p>
        </div>
        <h6 class="pdf_subtitulo">11. INTEGRIDAD DEL CONTRATO</h6>
        <div class="pdf_declaraciones">
            <p class="sangria">                                                
                El presente Contrato constituye el acuerdo íntegro entre usted y el PROVEEDOR, regula su uso del Servicio, y reemplaza todo otro acuerdo anterior que usted haya celebrado con el PROVEEDOR en relación con el Servicio y al firmar el presente manifiesta su aceptación a los términos y condiciones así como del aviso de privacidad contenidos en el cuerpo del presente contrato. En el supuesto de que alguna de las disposiciones del presente Contrato resultarán inválidas o inexigibles, dicha disposición se interpretará de tal modo que se ajuste con las leyes pertinentes para reflejar, en la medida lo posible, la intención original de las partes y las restantes disposiciones de este Contrato permanecerán en pleno vigor y efecto. El hecho de que “EL PROVEEDOR” no ejerza algún derecho o haga cumplir una disposición conforme al presente Contrato no constituirá una renuncia a dicha disposición o derecho. El “USUARIO” acuerda que, salvo se establezca expresamente de otra manera en este Contrato, no habrá terceros beneficiarios del presente Contrato. El presente documento cumple con las disposiciones marcadas en la Ley Federal de Telecomunicaciones y Radiodifusión.
            </p>
        </div>
        <p>
            Leído el presente contrato por las partes, lo firman de conformidad, en {{ $data_advisers->branch_office }}, {{ $data_advisers->branch_office_state }}, el {{ $date }}. 
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



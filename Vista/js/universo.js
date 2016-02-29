
$(document).ready(function() {        
    
    });

var posicionSecuencia= parseInt(1);//maneja la posicion de la secuancia de la ova
var limiteOva; // almacena cuantos niveles de navegacion tiene la ova
var script=document.createElement('script');//script que se cargara dinamicamente, segun la ova seleccionada
var head=document.getElementsByTagName('head').item(0);//posicion del script cargado dinamicamente
var posicionAvatar=0; //indica la imagen dinamica que debe cargarse en el avatar
var limiteAvatar = 3; //limite de acciones de animacion del avatar



/**
 * Carga el script respectivo de la ova
 * 
 * @param {String} tema : El tema de la ova que se va a buscar
 * @return {String} Nothing.
 */
function cargarScript(tema){
    
    document.getElementById("divOvaSeleccionada").innerHTML="";//limpia el codigo cargado de la ova anterior
    document.getElementById("ovaSeleccionada").value=tema;//borra el tema seleccionado
    
    try{
        $.fancybox.showActivity();//ventana de cargado
        $("#divOvaSeleccionada").load('Vista/ovas/'+tema+'.php',function() {//carga el archivo para la ova
            $.fancybox.hideActivity();//cierra el cargar
            calcularLimite();                               
        }); 
    }catch(elError){
        $.fancybox.hideActivity();//si sucedio algun error cierra el mensaje de cargado
    }
        
    //configuracion del js de la ova
    script.src = 'Vista/js/ovas/'+tema+'.js'; 
    script.type = 'text/javascript';
    script.defer = true;
    script.id = 'scriptID'; // Esto es para poder borrar el objeto despues for removal
    // Ahora se inserta el objeto creado en el elemento HEAD del html                        
    head.appendChild(script);      
}


/**
 * Restablece la posicion del nivel de navegacion de una ova, ademas quita el script de dicha ova
 * 
 * 
 * @return {String} Nothing.
 */
function cerrar(){        
    posicionSecuencia=parseInt(1);//posicion de navegacion
    // se elimina el js de la ova cargada
    var old = document.getElementById('scriptID');
    if (old) head.removeChild(old);
}




/**
 * Calcula cuantas paginas hay de la ova
 * 
 * @param {String} tema : El tema de la ova que se va a buscar
 * @return {String} Nothing.
 */
function calcularLimite(tema){
    var cont=1;    
    try{
        while(cont<100){
            myvar = document.getElementById('div'+cont).value;
            cont++;
        }
    }catch(elError){
        limiteOva = --cont;        
        try{
            secuenciaOva();//se trata de cargar la secuencia de la ova
        }catch(elError){//si el archivo no ha sido cargado se llaman nuevamente la funcion mientras carga el archivo
            calcularLimite(tema);
        }               
    }
}




/**
 * Define cual es la siguiente pagina a la cual debemos avanzar
 *  
 * @return {String} Nothing.
 */
function avanzar(){    
    if(posicionSecuencia<limiteOva){
        posicionSecuencia++;
    }else{
        apprise('Hasta la proxima!!!', {
            'animate':true
        });
        $.fancybox.close();
    }    
    secuenciaOva();
}

/**
 * Define cual es la anterior pagina a la cual debemos avanzar
 *  
 * @return {String} Nothing.
 */
function retroceder(){
    if(posicionSecuencia>1){
        posicionSecuencia--;
        secuenciaOva();
    }else{
        $.fancybox.close();
    }    
    
}


/**
 * Abre una determinada pagina, segun la opcion que hallan seleccionado
 * 
 * @param {String} accion : El boton que han seleccionado
 * @return {String} Nothing.
 */
function abrirVentana(accion){   
    switch(accion){
        case "bienvenidos":
                                
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'autoScale':true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divBienvenidos',
                'onComplete':function () {            
                    startAnimacionInicio();
                },
                'onClosed': function () {  
                    stopAnimacionInicio();
                }
            });
            
            break;
            
        case "inicio":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divInicio',
                'onClosed': function () {            
                }
            });
            
            break;
            
            
        case "requerimientos":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divRequerimientos',
                'onClosed': function () {            
                }
            });            
            break;
            
        case "contenido":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divContenido',
                'onClosed': function () {            
                }
            });            
            break;
            
        case "objetivos":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divObjetivos',
                'onClosed': function () {            
                }
            });            
            break;
            
            
        case "documentos":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divDocumentos',
                'onClosed': function () {            
                }
            });            
            break;
            
            
        case "creditos":
            
            $.fancybox({
                'overlayShow'	: true,//fondo negro
                'showCloseButton': true, //boton de cerrar
                'transitionIn': 'elastic', //efecto al abrir
                'transitionOut'	: 'elastic',//efecto al cerrar
                'scrolling': 'no',
                'opacity': true,
                'hideOnOverlayClick':false, //bloquear click externo
                'href': '#divCreditos',
                'onClosed': function () {            
                }
            });            
            break;
            
    }
    
}



/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionInicio=null; // variable que controlara el intervalo de movimiento del avatar

/**
 * Inicia la animacion del avatar del universo para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionInicio() {  // use a one-off timer
    stopAnimacionInicio();
    animacionInicio= setInterval(function(){
        moverAvatar();
    },250);
}

/**
 * Detiene la animacion del avatar del universo para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionInicio() {
    clearTimeout(animacionInicio);
}


/**
 * Cambia la animacion del avatar.
 *  
 * @return {String} Nothing.
 */
function moverAvatar(){    
    
    if(posicionAvatar>=limiteAvatar){
        posicionAvatar =0;
    }
    
    switch(posicionAvatar){
        case 0:
            document.getElementById('avatarInicio').src = "Vista/imagenes/menu/avatarNubeBocaCerrada.png";            
            
            break;
            
        case 1:
            document.getElementById('avatarInicio').src = "Vista/imagenes/menu/avatarNube.png";
            break;  
                                                 
        case 2:
            document.getElementById('avatarInicio').src = "Vista/imagenes/menu/avatarNubeBocaAbierta.png";            
            break;                             
    }           
    posicionAvatar++;            
}




/***********************************************************/
/*************INTERACTIVIDAD OVA****************************/
/***********************************************************/



/**
 * Muestra un mensaje en pantalla
 * 
 * @param {String} mensaje : El mensaje que se desea mostrat
 * @return {String} Nothing.
 */
function mensajeGeneral(mensaje){
    apprise(mensaje, {
        'animate':true                    
    });
}

/**
 * Muestra un mensaje en pantalla con un icono de error
 * 
 * @param {String} mensaje : El mensaje que se desea mostrat
 * @return {String} Nothing.
 */
function mensajeError(mensaje){
    jAlert(mensaje, "Te equivocaste");      
}

/**
 * Muestra un mensaje en pantalla con un icono de correcto
 * 
 * @param {String} mensaje : El mensaje que se desea mostrat
 * @return {String} Nothing.
 */
function mensajeCorrecto(mensaje){
    jAlert2(mensaje,"Muy bien");
}


/**
 * Reproduce un audio
 * 
 * @param {String} id : ID de la etiqueta audio
 * @return {String} Nothing.
 */
function reproducirAudio(id){    
    try{
        document.getElementById(id).load();
        document.getElementById(id).play();    
    }catch(elError){
        
    }
}

/**
 * Detiene un audio
 * 
 * @param {String} id : ID de la etiqueta audio
 * @return {String} Nothing.
 */
function detenerAudio(id){    
    document.getElementById(id).pause();    
}

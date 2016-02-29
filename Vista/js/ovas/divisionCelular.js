var posicionAvatarOVA=0; // almacena la posicion del avatar de la ova para su animacion

/***********************************************************/
/***********************************************************/
/***********************************************************/
/**********************ANIMACIONES**************************/
/***********************************************************/
/***********************************************************/


var animacionAvatarOVA=null; // almacena la animacion del avatar de biologia

/**
 * Inicia la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function startAnimacionInicioOVA() {  // use a one-off timer
    stopAnimacionInicioOVA();
    animacionAvatarOVA= setInterval(function(){
        moverAvatarOVA();
    },200);
}

/**
 * Detiene la animacion del avatar de la ova de division celular para el mensaje de bienvenida
 * 
 * 
 * @return {String} Nothing.
 */
function stopAnimacionInicioOVA() {
    clearTimeout(animacionAvatarOVA);
}



/**
 * Cambia la animacion del avatar de biologia.
 *  
 * @return {String} Nothing.
 */
function moverAvatarOVA(){    
    
    if(posicionAvatarOVA>=limiteAvatar){
        posicionAvatarOVA =0;
    }
    
    switch(posicionAvatarOVA){
        case 0:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/biologia/avatarBocaCerrada.png";            
            
            break;
        
        case 1:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/biologia/avatarNube.png";
            break;  
        
        case 2:
            document.getElementById('avatarBienvenidaCelula').src = "Vista/imagenes/universo/biologia/avatarNube.png";            
            break;                             
    }           
    posicionAvatarOVA++;            
}





/**
 * Muestra con efecto una determinada imagen oculta con extension png, a partir de su clase
 * 
 * @param {String} clase : Clase del elemento oculto
 * @return {String} Nothing.
 * @description para mas informacion visitar el siguiente enlace http://vagabundia.blogspot.com/2010/01/efectos-elementales-con-jquery.html
 */
function verEtapasMitosis(clase){       
    $('.'+clase).attr('src', 'Vista/imagenes/secuenciacion/divisionCelular/'+clase+'.png');    
    $('.'+clase).fadeIn();
//$('.'+clase).css('display', 'inline');    
}





/******************************************************/
/******************************************************/
/**************PREGUNTAS SELECCION*********************/
/******************************************************/
/******************************************************/



/**
 * Determina si la pregunta contestada es correcta o no
 * 
 * @param {int} pregunta : Numero de la pregunta
 * @return {String} Mensaje de si es correcta la respuesta o no.
 */
function calificarPreguntaCelulas(pregunta){
    
    switch(pregunta){
        case 1:
            if($("input[name='preguntaCelulas']:checked").val()==2){//respuesta correcta la B                
                mensajeGeneral('Muy bien. Ya sabes que los espermatozoides y el ovulo son células haploides. Descubre mucho más sobre la meiosis en este modulo.');                             
                correcto.playclip();
                avanzar('celulas');
            }else{                
                mensajeError("Incorrecto. En este modulo aprenderás que la meiosis asegura la producción de células haploides para permitir la reproducción sexual.");
                error.playclip();
            //avanzar('celulas');
            }
            
            break;
        
        case 2:
            if($("input[name='preguntaCelulas']:checked").val()==4){//respuesta correcta la D
                mensajeGeneral('Muy bien. Ya sabes que la división de células somáticas sirve para mantener nuestro organismo funcionando. Descubre mucho más sobre la mitosis en este modulo.');
                correcto.playclip();
                avanzar('celulas');
            }else{
                mensajeError('Incorrecto. En este modulo aprenderás que la mitosis es la división que utilizan casi todas de células del cuerpo.');
                error.playclip();
            //avanzar('celulas');
            }
            break;
        
        
        case 3:
            if($("input[name='preguntaCelulas']:checked").val()==3){//respuesta correcta la C
                mensajeGeneral('Muy bien. Reconoces que la recombinación genética es la responsable de que los rasgos varíen entre hermanos, ya que se produce totalmente por azar.');
                correcto.playclip();
                avanzar('celulas');
            }else{
                mensajeError('Incorrecto. Más adelante encontraras en este modulo la importancia de la recombinación genética para permitir la variación de los rasgos entre hermanos.');
                error.playclip();
            //avanzar('celulas');
            }
            break;
        
        
        case 4:
            if($("input[name='preguntaCelulas']:checked").val()==1){//respuesta correcta la A
                mensajeGeneral('¡Muy bien!');
                correcto.playclip();
                avanzar('celulas');
            }else{
                mensajeError(' ¡vuelve a intentarlo!');
                error.playclip();
            }
            break;
        
        
        case 5:
            if($("input[name='preguntaCelulas']:checked").val()==3){//respuesta correcta la C
                mensajeGeneral('¡Muy bien!');
                correcto.playclip();
                avanzar('celulas');
            }else{
                mensajeError(' ¡vuelve a intentarlo!');
                error.playclip();
            }
            break;
        
        case 6:
            if($("input[name='preguntaCelulas']:checked").val()==4){//respuesta correcta la D
                mensajeGeneral('¡Muy bien!');
                correcto.playclip();
                avanzar('celulas');
            }else{
                mensajeError(' ¡vuelve a intentarlo!');
                error.playclip();
            }
            break;
        
        case 7:
            if($("input[name='preguntaCelulas']:checked").val()==3){//respuesta correcta la C
                mensajeGeneral('¡Muy bien!');
                correcto.playclip();
                avanzar('celulas');
            }else{
                mensajeError(' ¡vuelve a intentarlo!');
                error.playclip();
            }
            break;
        
        
        
        case 8:
            if($("input[name='preguntaCelulas']:checked").val()==2){//respuesta correcta la B
                mensajeGeneral('¡Muy bien!');
                correcto.playclip();
                avanzar('celulas');
            }else{
                mensajeError(' ¡vuelve a intentarlo!');
                error.playclip();
            }
            break;
    }

}
















/**************************************/
/**************************************/
/***********VENTANAS INDEPENDIENTES****/
/**************************************/
/**************************************/


/**
 * Abre un fancybox en especifico
 * 
 * 
 * @return {String} Nothing.
 */
function abrirZoomMitosis(){
    $.fancybox({
        'showCloseButton': false,
        'transitionIn': 'fade',
        'hideOnOverlayClick':false, //bloquear click externo
        'scrolling': 'no',
        'href': '#divZoomMitosis',
        'onClosed': function () {            
        }
    });
}




function navegacionMenu(pagina,tema){        
    posicionSecuencia= parseInt(pagina);
    secuenciaOva(tema);    
} 























/**
 * Abre una determinada pagina de una ova, segun el tema y la pagina en la que se encuentre.
 * 
 * @param {String} tema : El tema de la OVA que se ha seleccionado.
 * @return {String} Nothing.
 */
function secuenciaOva(){            
    
    var tema = document.getElementById("ovaSeleccionada").value; 
    
    switch(tema){
                  
            
        case "divisionCelular":
            
            switch(posicionSecuencia){
                case 1:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'true',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                            //mensajeok();
                        },
                        'onClosed': function () {  
                            
                            cerrar();
                        }
                        
                    });
                    break;
                    
                    
                case 2:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                            startAnimacionInicioOVA();
                        },
                        'onClosed': function () {  
                            stopAnimacionInicioOVA();
                            cerrar();                             
                        }                        
                    });
                    break;
                    
                    
                    
                case 3:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                             
                        }                        
                    });
                    break;
                    
                    
                    
                case 4:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;
                    
                    
                     
                case 5:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                             
                        }                        
                    });
                    break;
                    
                    
                    
                case 6:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                           
                        },
                        'onClosed': function () {  
                            cerrar();                              
                        }                        
                    });
                    break;
                    
                    
                    
                    
                    
                    
                case 7:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {           
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;
                    
                                   
                    
                    
                    
                    
                    
                    
                case 8:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;
                    
                    
                case 9:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                             
                        }                        
                    });
                    break;
                    
                case 10:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;     
                    
                case 11:
                                                           
                    
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'centerOnScroll':true,
                        'onComplete':function () {                               
                            
                            $('.profase').css('display', 'none');
                            $('.metafase').css('display', 'none');
                            $('.anafase').css('display', 'none');
                            $('.telofase').css('display', 'none');
                            $('.citocinesis').css('display', 'none');
                            
                            
                            setTimeout(verEtapasMitosis,1000,'profase');
                            setTimeout(verEtapasMitosis,3000,'metafase');
                            setTimeout(verEtapasMitosis,5000,'anafase');
                            setTimeout(verEtapasMitosis,7000,'telofase');
                            setTimeout(verEtapasMitosis,9000,'citocinesis');
                            
                        },
                        'onClosed': function () {  
                            cerrar();                             
                        }                        
                    });
                    break;     
                    


                case 12:
                                                           
                    
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'centerOnScroll':true,
                        'onComplete':function () {                               
                            
                            $('.profaseGrafica').css('display', 'none');
                            $('.metafaseGrafica').css('display', 'none');
                            $('.anafaseGrafica').css('display', 'none');
                            $('.telofaseGrafica').css('display', 'none');
                            $('.citocinesisGrafica').css('display', 'none');
                            
                            
                            setTimeout(verEtapasMitosis,1000,'profaseGrafica');
                            setTimeout(verEtapasMitosis,3000,'metafaseGrafica');
                            setTimeout(verEtapasMitosis,5000,'anafaseGrafica');
                            setTimeout(verEtapasMitosis,7000,'telofaseGrafica');
                            setTimeout(verEtapasMitosis,9000,'citocinesisGrafica');
                            
                        },
                        'onClosed': function () {  
                            cerrar();                            
                        }                        
                    });
                    break;     


                case 13:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {                                        
                        },
                        'onClosed': function () {  
                            cerrar();                           
                        }                        
                    });
                    break;     
                    
                    
                case 14:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {                                        
                        },
                        'onClosed': function () {  
                            cerrar();                           
                        }                        
                    });
                    break;    
                    
                case 15:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {                                        
                        },
                        'onClosed': function () {  
                            cerrar();                           
                        }                        
                    });
                    break;    
                    
                    
                case 16:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {                                        
                        },
                        'onClosed': function () {  
                            cerrar();                           
                        }                        
                    });
                    break;    
                    
                    
                case 17:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {                                        
                        },
                        'onClosed': function () {  
                            cerrar();                           
                        }                        
                    });
                    break;    
                    
                    
                    
                case 18:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {                                        
                        },
                        'onClosed': function () {  
                            cerrar();                           
                        }                        
                    });
                    break; 
                    
                case 19:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                           
                        },
                        'onClosed': function () {  
                            cerrar();                              
                        }                        
                    });
                    break;
                    
                    
                case 20:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                           
                        },
                        'onClosed': function () {  
                            cerrar();                              
                        }                        
                    });
                    break;
                    
                    
                    
                case 21:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                           
                        },
                        'onClosed': function () {  
                            cerrar();                              
                        }                        
                    });
                    break;
                    
                    
                case 22:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                           
                        },
                        'onClosed': function () {  
                            cerrar();                              
                        }                        
                    });
                    break;
                    
                case 23:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                           
                        },
                        'onClosed': function () {  
                            cerrar();                              
                        }                        
                    });
                    break;
                    
                    
                    
                case 24:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                           
                        },
                        'onClosed': function () {  
                            cerrar();                              
                        }                        
                    });
                    break;
                    
                    
                case 25:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                           
                        },
                        'onClosed': function () {  
                            posicionSecuencia=parseInt(1);
                            cerrar();                              
                        }                        
                    });
                    break;         
                    
                    
                    
                case 26:
                    $.fancybox({
                        'showCloseButton': true,
                        'transitionIn': 'fade',
                        'hideOnOverlayClick':false, //bloquear click externo
                        'scrolling': 'no',
                        'href': '#div'+posicionSecuencia,
                        'onComplete':function () {            
                           
                        },
                        'onClosed': function () {  
                            posicionSecuencia=parseInt(1);
                            cerrar();                              
                        }                        
                    });
                    break;         
            }            
            break;   
    }
}


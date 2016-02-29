
/**
* Función que se ejecuta al arrastrar el elemento. 
**/
function start(e) {
    e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
    e.dataTransfer.setData("Text", e.target.id); // Coje el elemento que se va a mover
    e.target.style.opacity = '0.4'; 
}

/**
* Función que se ejecuta se termina de arrastrar el elemento. 
**/
function end(e){
    e.target.style.opacity = ''; // Restaura la opacidad del elemento			
    e.dataTransfer.clearData("Data");			
}

/**
* Función que se ejecuta cuando un elemento arrastrable entra en el elemento desde del que se llama. 
**/
function enter(e) {
    return true;
}

/**
* Función que se ejecuta cuando un elemento arrastrable esta sobre el elemento desde del que se llama. 
* Devuelve false si el objeto se puede soltar en ese elemento y true en caso contrario.
**/
function over(e) {
    if ((e.target.className == "contenedorPieza") || (e.target.id == "contenedorPiezas"))
        return false;
    else
        return true;
}
    
/**
* Muestra un mensaje de advertencia si el navegador no soporta Drag & Drop. (En Windows no lo soportan ni IE ni Safari)
**/
function comprobarnavegador() {
    if( 
        (navigator.userAgent.toLowerCase().indexOf('msie ') > -1) || 
        ((navigator.userAgent.toLowerCase().indexOf('safari') > -1) && (navigator.userAgent.toLowerCase().indexOf('chrome') == -1)))
        {
        alert("Tu navegador no soporta correctamente las funciones Drag & Drop de HTML5. Prueba con otro navegador.");
    }

}



/*******************************************/
/*******************************************/
/**************ACCIONES POR OVA*************/
/*******************************************/
/*******************************************/


/**********************DIVISION CELULAR******************************/


/**
* Función que se ejecuta cuando un elemento arrastrable se suelta sobre el elemento desde del que se llama. 
**/
function dropDivisionCelular(e){
    e.preventDefault(); // Evita que se ejecute la accion por defecto del elemento soltado.
    var elementoArrastrado = e.dataTransfer.getData("Text");
    e.target.appendChild(document.getElementById(elementoArrastrado)); // Coloca el elemento soltado sobre el elemento desde el que se llamo esta funcion
    comprobarPuzzleDivisionCelular(1);
}



/**
 * Comprueba si el puzzle se ha completado correctamente
 *  
 * @param {int} tipo indica si vamos a comprobarlo cuando colocamos una ficha o por si van a pasar de ventana
 * @return {String} Mensaje informando que completo del rompecabezas.
 */
function comprobarPuzzleDivisionCelular(tipo){
    
    if(tipo==1){//comprueba despues de colocar una pieza
        if((document.getElementById('pieza1DivisionCelular').parentNode.id=='unoDivisionCelular') &&
            (document.getElementById('pieza2DivisionCelular').parentNode.id=='dosDivisionCelular') &&
            (document.getElementById('pieza3DivisionCelular').parentNode.id=='tresDivisionCelular') &&
            (document.getElementById('pieza4DivisionCelular').parentNode.id=='cuatroDivisionCelular') &&
            (document.getElementById('pieza5DivisionCelular').parentNode.id=='cincoDivisionCelular') &&
            (document.getElementById('pieza6DivisionCelular').parentNode.id=='seisDivisionCelular') &&
            (document.getElementById('pieza7DivisionCelular').parentNode.id=='sieteDivisionCelular') &&
            (document.getElementById('pieza8DivisionCelular').parentNode.id=='ochoDivisionCelular'))
        
            {
            mensajeGeneral('Felicidades, has terminado la secuencia.');
            correcto.playclip();
        }
    }else{//comprueba si va a pasar de pagina
        if((document.getElementById('pieza1DivisionCelular').parentNode.id=='unoDivisionCelular') &&
            (document.getElementById('pieza2DivisionCelular').parentNode.id=='dosDivisionCelular') &&
            (document.getElementById('pieza3DivisionCelular').parentNode.id=='tresDivisionCelular') &&
            (document.getElementById('pieza4DivisionCelular').parentNode.id=='cuatroDivisionCelular') &&
            (document.getElementById('pieza5DivisionCelular').parentNode.id=='cincoDivisionCelular') &&
            (document.getElementById('pieza6DivisionCelular').parentNode.id=='seisDivisionCelular') &&
            (document.getElementById('pieza7DivisionCelular').parentNode.id=='sieteDivisionCelular') &&
            (document.getElementById('pieza8DivisionCelular').parentNode.id=='ochoDivisionCelular'))        
            {
                
            mensajeGeneral('Completaste la actividad satisfactoriamente.');            
            
        }else{
            mensajeGeneral('Recuerda que no terminaste la actividad satisfactoriamente');
            error.playclip();
        }
    }
}
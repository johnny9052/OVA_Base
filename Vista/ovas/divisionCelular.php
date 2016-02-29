<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--        <script type="text/javascript" src="../js/ovas/divisionCelular.js"></script>-->
        <title></title>
    </head>
    <body>
        <!--OVA DIVISION CELULAR-->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->
        <!----------------------------------------------------------------->

        <!--PRIMER NIVEL-->
        <div style="display: none;">
            <div id="div1" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>

                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>


                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">INFORMACIÓN OVA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar(); clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="1" class="alineacionIzquierda">
                                <label class="subtituloDorado">Título:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">División celular</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Descripción:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"></label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Idioma:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Español</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Autor:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Luisa Fernanda Osorio Mejía</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Entidad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Universidad de Caldas y Ministerio de Educación Nacional</label>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                <label class="titulo">PROCESOS FORMATIVOS</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Auto aprendizaje.</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Tipo <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto"> 
                                    &nbsp;&nbsp;&nbsp;*Activa (para los contenidos interactivos)<br/>
                                    &nbsp;&nbsp;&nbsp;*Expositiva <br/>
                                    &nbsp;&nbsp;&nbsp;*Mixto</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Recurso:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Es de distintos tipos: ejercicio,texto y autoevaluación.</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Nivel <br/> Interactividad:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Medio</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Población:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Estudiantes de primer y segundo semestre de Biología</label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="1" class="alineacionIzquierda"> 
                                <label class="subtituloDorado">Contexto:</label>
                            </td>
                            <td colspan="2" class="alineacionIzquierda">
                                <label class="texto">Educación superior</label>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--SEGUNDO NIVEL-->
        <div style="display: none;">
            <div id="div2" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">BIENVENIDO</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3">
                                <img id="avatarBienvenidaCelula" src="Vista/imagenes/universo/biologia/avatarNube.png" class="avatar"/>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>






        <!--TERCER NIVEL-->
        <div style="display: none;">
            <div id="div3" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">OBJETIVOS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>                            
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="texto">
                                    &nbsp;&nbsp;&nbsp;* Comprender las etapas de la meiosis y la mitosis, estableciendo relación con la reproducción y el crecimiento. <br/>
                                    &nbsp;&nbsp;&nbsp;* Comprender los procesos de entrecruzamiento y segregación al azar como fuentes de variabilidad genética.<br/>
                                    &nbsp;&nbsp;&nbsp;* Comprender las diferencias entre la mitosis y la meiosis</label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--CUARTO NIVEL-->
        <div style="display: none;">
            <div id="div4" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEST DE SELECCIÓN MULTIPLE CON ÚNICA RESPUESTA</span><br/>
                                <span class="titulo">PREGUNTA #1</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntaCelulas(1);clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">1. ¿Por qué los bebes presentan rasgos (color de ojos, color de piel o tipo de cabello) tanto del padre como de la madre?</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="1">

                                            <label class="texto">A. Porque las células de la madre son las que aporta toda la información genética.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="2">
                                            <label class="texto">B. Porque cada una de las células germinales aportadas por cada parental contienen la mitad del número de cromosomas.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="3">
                                            <label class="texto">C. Porque durante el embarazo, el feto toma las características del padre mas no las de la madre.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="4">
                                            <label class="texto">D. Porque cada una de las células somáticas aportadas por cada parental contienen el número completo de cromosomas.</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--QUINTO NIVEL-->
        <div style="display: none;">
            <div id="div5" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEST DE SELECCIÓN MULTIPLE CON ÚNICA RESPUESTA</span><br/>
                                <span class="titulo">PREGUNTA #2</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntaCelulas(2);clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">2. ¿Por qué sanan las heridas?</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="1">

                                            <label class="texto">A. Debido a que las células de la sangre llegan a la herida y la cierran.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="2">
                                            <label class="texto">B. Porque el cuerpo siempre cura todo lo que no está bien.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="3">
                                            <label class="texto">C. Como las células germinales se dividen, dan como resultado 4 células hijas con el mismo contenido genético</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="4">
                                            <label class="texto">D. Como las células germinales se dividen, dan como resultado 2 células hijas con el mismo contenido genético</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--SEXTO NIVEL-->
        <div style="display: none;">
            <div id="div6" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEST DE SELECCIÓN MULTIPLE CON ÚNICA RESPUESTA</span><br/>
                                <span class="titulo">PREGUNTA #3</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntaCelulas(3);clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">3. ¿Por qué los hermanos que son hijos de los mismos padres, son diferentes en sus rasgos?</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="1">

                                            <label class="texto">A. Porque las células de la madre se expresan en un hijo y las del padre en el otro hijo</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="2">
                                            <label class="texto">B. Porque la información genética está en la sangre y cada hijo debe ser diferente</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="3">
                                            <label class="texto">C. Porque las células sexuales contienen información genética diferente a la de los padres y cada vez que se unen salen características al azar.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="4">
                                            <label class="texto">D. Porque las células sexuales contienen una copia idéntica de la información genética de los padres, y cuando se unen, se expresan características iguales.</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--SEPTIMO NIVEL-->
        <div style="display: none;">
            <div id="div7" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="0">
                                <img src="Vista/imagenes/otros/general/ovo.png">
                                <span class="titulo">PARA RECORDAR…</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3">
                                <span class="texto">
                                    El núcleo es un orgánulo que se encuentra en las células eucariotas y su función más importante es proteger la 
                                    información genética, organizada en moléculas de ADN.

                                    El ácido desoxirribonucleico abreviado en ADN, se encuentra en filamentos llamados cromatina. Cuando la célula 
                                    inicia la división, la cromatina se condensa formando los cromosomas. Los cromosomas se componen de dos hebras 
                                    llamadas cromátidas hermanas. Algunas células sólo tienen un juego de cromosomas o la mitad (n, haploide) del 
                                    número normal de cromosomas en células diploides (2n,diploide).
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>













        <!--CUARTO NIVEL-->
        <div style="display: none;">
            <div id="div8" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEMA 1: DIVISIÓN CELULAR (Eucariotas)</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3">
                                <label class="subtituloDorado">“Omnis cellula ex cellula”</label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    No se encuentra nunca una célula donde no exista otra anterior, es decir, todas las células provienen de otras pre-existentes, y la posibilidad de generar nuevas células 
                                    ocurre mediante un proceso llamado división celular.La división celular es necesaria en un organismo pluricelular como el ser humano: por crecimiento o 
                                    por reproducción. Así, cuando el organismo ya está maduro requiere una enorme producción celular para el mantenimiento de las actividades en ciertos tejidos
                                    durante toda la vida, como por ejemplo las células que se encuentran dentro de la medula de los huesos o recubriendo el intestino; en este caso el tipo de división 
                                    es la mitosis.Cuando el organismo necesita reproducirse de forma sexual lo hace con el proceso de división llamado meiosis, formando células especiales que luego 
                                    de un proceso de maduración se denominan gametos.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--QUINTO NIVEL-->
        <div style="display: none;">
            <div id="div9" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">DIVISIÓN CELULAR (Eucariotas)</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Sin embargo, no todas las células de mi cuerpo están todo el tiempo en proceso de división; algunas se encuentran en estado de no división y se denominan “quiescentes”, las células que sí se encuentran en proceso de división, iniciando el ciclo celular se denominan “proliferantes”.
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3" class="alineacionCentro" >
                                <table border="0" width="100%">
                                    <tr>
                                        <td rowspan="4" class="alineacionDerecha">
                                            <img class="efectoAumento"  onmouseover="mouseoversound.playclip();" src="Vista/imagenes/universo/biologia/humanoBiologia.png">
                                        </td>                                       

                                        <td rowspan="4" width="50%">
                                            <table border="0">

                                                <tr>
                                                    <td class="alineacionIzquierda">                                                        
                                                        <a class="tooltip texto" href="#">Células somáticas
                                                            <span class="custom info"><em>¿Qué es?</em>Células que conforman los tejidos y
                                                                Los órganos. Poseen un número idéntico de cromosomas
                                                                (Diploide: 2n : 46 cromosomas en el ser humano) y se
                                                                presentan por pares. Realiza su división celular por Mitosis
                                                            </span>                                                            
                                                        </a><br/>
                                                        <img  onmouseover="mouseoversound.playclip();" src="Vista/imagenes/otros/general/manito2.png" class="efectoAumento">
                                                    </td>


                                                </tr>
                                                <tr>
                                                    <td>
                                                        <br/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <br/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="alineacionIzquierda">                                                                                                                
                                                    </td>
                                                </tr>       
                                            </table>
                                        </td>









                                        <td rowspan="4" class="alineacionDerecha">
                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/universo/biologia/germinales.png">
                                        </td>                                       

                                        <td rowspan="4" width="50%" height="350px">
                                            <table border="0">

                                                <tr>
                                                    <td class="alineacionIzquierda">                                                       
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <br/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="alineacionIzquierda">                                                             
                                                        <a class="tooltip texto" href="#">Células germinales<span class="custom info"><em>¿Qué es?</em>Células sexuales que se dividen por Meiosis. Contienen la mitad del número normal de cromosomas (Haploide: n: 23 en el ser humano) y da origen a los gametos (espermatozoides y óvulos).</span></a><br/>
                                                        <img  onmouseover="mouseoversound.playclip();" src="Vista/imagenes/otros/general/manito2.png" class="efectoAumento">
                                                    </td>
                                                </tr>  
                                                <tr>
                                                    <td>
                                                        <br/>
                                                    </td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>                                                                     
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--SEXTO NIVEL-->
        <div style="display: none;">
            <div id="div10" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEMA 2: MITOSIS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    La mitosis es el proceso de división nuclear de las células somáticas, es decir, todas aquellas que no serán células
                                    sexuales (espermatozoide y ovulo). En este proceso las dos células hijas resultantes tienen un contenido genético 
                                    idéntico entre si y al de la célula madre de la que provienen.Por tanto, la función del proceso de mitosis es generar
                                    nuevas células para el crecimiento y mantenimiento del organismo.La mitosis hace parte de un conjunto ordenado de sucesos 
                                    que cumplen las células llamado ciclo celular. Antes de iniciar la fase de mitosis la célula debe pasar por las fases G1, 
                                    S, y G2. En estas fases la célula aumenta su tamaño y duplica su ADN, quedando lista para iniciar la fase de mitosis.
                                    Al iniciar la mitosis el ADN se encuentra en el núcleo en filamentos largos llamados cromatina.
                                </label>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <video poster controls width="600px" height="400px" preload="none">
                                    <source src="Vista/videos/divisionCelular/mitosis.mp4" type="video/mp4">
                                </video>

                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--SEPTIMO NIVEL-->
        <div style="display: none;">
            <div id="div11" style="overflow: hidden;" class="ventana">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">MITOSIS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  

                        <tr>
                            <td colspan="3">
                                <div border="1" class="contenedorSecuencia">
                                    <table border="0">
                                        <tr>
                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="profase elementoSecuencia" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>

                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="metafase" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>  

                                            <td>                                            
                                                <br/>
                                            </td>

                                            <td> 
                                                <br/>
                                            </td>                                      
                                        </tr>
                                        <tr>
                                            <td>
                                                <br/>
                                            </td>

                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="anafase" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>

                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="telofase" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>

                                            <td >
                                                <img  onmouseover="mouseoversound.playclip();" class="citocinesis" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>

                                        </tr>                                     
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--OCTAVO NIVEL-->

        <div style="display: none;">
            <div id="div12" style="overflow: hidden;" class="ventana">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">MITOSIS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>  


                        <tr>                            
                            <td class="alineacionIzquierda" colspan="3">
<!--                                <img src="Vista/imagenes/universo/sabias.png">        -->
                                <a class="tooltip" href="#">
                                    <label class="subtitulo">¿SABÍAS QUÉ?</label>
                                    <span class="custom info">Todo el proceso desde las fases G1, S y G2 dura alrededor de 60 minutos en llevarse a cabo. En este momento tu cuerpo puede estar realizando una división mitótica.
                                    </span>
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td colspan="3">
                                <div border="0" class="contenedorSecuencia">
                                    <table border="0">
                                        <tr>
                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="profaseGrafica" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>

                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="metafaseGrafica" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>  

                                            <td>                                            
                                                <br/>
                                            </td>

                                            <td> 
                                                <br/>
                                            </td>                                      
                                        </tr>
                                        <tr>
                                            <td>
                                                <br/>
                                            </td>

                                            <td>
                                                <img  onmouseover="mouseoversound.playclip();" class="anafaseGrafica" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>

                                            <td>
                                                <img   onmouseover="mouseoversound.playclip();" class="telofaseGrafica" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>

                                            <td >
                                                <img  onmouseover="mouseoversound.playclip();" class="citocinesisGrafica" src="Vista/imagenes/secuenciacion/blanco.png">
                                            </td>

                                        </tr>                                     
                                    </table>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--NOVENO NIVEL-->
        <div style="display: none;">
            <div id="div13" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">MITOSIS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     


                        <tr>
                            <td colspan="3">
                                <table>
                                    <tr>
                                        <td>
                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/otros/general/mano.png" onclick="abrirZoomMitosis();">
                                        </td>
                                        <td colspan="2">
            <!--                                <canvas id="lienzo1" width="600" height="600"></canvas>-->

                                            <img width="600px" height="500px" src="Vista/imagenes/universo/biologia/mitosis.png">
                                        </td>    
                                    </tr>
                                </table>                                
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--TRECEAVO NIVEL, SUB NIVEL 1-->
        <div style="display: none;">
            <div id="divZoomMitosis" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>     
<!--                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                        <?php
                        //include("../menusNavegacion/menuDivisionCelular.php");
                        ?>

                            </td>
                        </tr>-->

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3">
                                <img  onmouseover="mouseoversound.playclip();" src="Vista/imagenes/universo/biologia/zoomMitosis.png"/>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                <img src="Vista/imagenes/otros/general/regresar.png" onclick="secuenciaOva('celulas')"/>
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--CATORCEAVO NIVEL-->
        <div style="display: none;">
            <div id="div14" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD #1</span>
                            </td>    
                            <td>
                                <img onclick="comprobarPuzzleDivisionCelular(2);avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td>
                                <br/>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3" width="100%" height="100%">
                                <table class="fondoJuego01">
                                    <tr>
                                        <td colspan="1" width="100%" height="100%">
                                            <table border="0">
                                                <tr>
                                                    <td >
                                                        <div id="puzzle">
                                                            <table border="0">
                                                                <tr>
                                                                    <td>
                                                                        <div class="contenedorPieza" id="unoDivisionCelular" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropDivisionCelular(event)">
                                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza1DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/tabla/1.png" alt="pieza1DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)" style="">
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/juegos/biologia/juego01/tabla/derecha.png" >
                                                                    </td>

                                                                    <td>
                                                                        <a class="tooltip" href="#">
                                                                            <div  class="contenedorPieza" id="dosDivisionCelular" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropDivisionCelular(event)">
                                                                                <span class="custom info"><em>Pista</em>Recuerda que en la 
                                                                                    fase S se da la 
                                                                                    duplicación  del ADN, 
                                                                                    proceso  fundamental 
                                                                                    para repartir  el 
                                                                                    contenido idéntico en 
                                                                                    cada célula hija</span>
                                                                            </div>
                                                                        </a>
                                                                    </td>

                                                                    <td>
                                                                        <img   src="Vista/imagenes/juegos/biologia/juego01/tabla/derecha.png" >
                                                                    </td>

                                                                    <td>
                                                                        <div class="contenedorPieza" id="tresDivisionCelular" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropDivisionCelular(event)">
                                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza3DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/tabla/2.png" alt="pieza3DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="texto alineacionCentro">FASE 1</td>
                                                                    <td></td>
                                                                    <td class="texto alineacionCentro">FASE 2</td>
                                                                    <td></td>
                                                                    <td class="texto alineacionCentro">FASE 3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><img  src="Vista/imagenes/juegos/biologia/juego01/tabla/abajo.png" ></td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <a class="tooltip" href="#">
                                                                            <div class="contenedorPieza" id="cuatroDivisionCelular" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropDivisionCelular(event)">
                                                                                <span class="custom info"><em>Pista</em>En esta etapa, cada 
                                                                                    cromátide hermana del 
                                                                                    cromosoma se va 
                                                                                    hacia el polo.</span>
                                                                            </div>
                                                                        </a>
                                                                    </td>

                                                                    <td>
                                                                        <img   onmouseover="mouseoversound.playclip();" src="Vista/imagenes/juegos/biologia/juego01/tabla/izquierda.png" >
                                                                    </td>
                                                                    <td>
                                                                        <div class="contenedorPieza" id="cincoDivisionCelular" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropDivisionCelular(event)">
                                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza5DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/tabla/4.png" alt="pieza5DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <img src="Vista/imagenes/juegos/biologia/juego01/tabla/izquierda.png" >
                                                                    </td>

                                                                    <td>
                                                                        <div class="contenedorPieza" id="seisDivisionCelular" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropDivisionCelular(event)">
                                                                            <img   onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza6DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/tabla/3.png" alt="pieza6DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="texto alineacionCentro">FASE 4</td>
                                                                    <td></td>
                                                                    <td class="texto alineacionCentro">FASE 5</td>
                                                                    <td></td>
                                                                    <td class="texto alineacionCentro">FASE 6</td>
                                                                </tr>

                                                                <tr>
                                                                    <td><img src="Vista/imagenes/juegos/biologia/juego01/tabla/abajo.png" ></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>                                                        
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div  class="contenedorPieza" id="sieteDivisionCelular" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropDivisionCelular(event)">
                                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza7DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/tabla/5.png" alt="pieza7DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <img src="Vista/imagenes/juegos/biologia/juego01/tabla/derecha.png" >
                                                                    </td>
                                                                    <td>
                                                                        <a class="tooltip" href="#">
                                                                            <div class="contenedorPieza" id="ochoDivisionCelular" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropDivisionCelular(event)">
                                                                                <span class="custom info"><em>Pista</em>Aquí se completa la 
                                                                                    división, partiendo la 
                                                                                    célula en dos hijas, 
                                                                                    cada  una  con el 
                                                                                    material genético 
                                                                                    idéntico</span>
                                                                            </div>
                                                                        </a>
                                                                    </td>                                                                                                                                                                          
                                                                </tr>

                                                                <tr>
                                                                    <td class="texto alineacionCentro">FASE 7</td>
                                                                    <td></td>
                                                                    <td class="texto alineacionCentro">FASE 8</td>                                                        
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>                                 
                                            </table>                            
                                        </td>



                                        <td>
                                            <!--DIVISION DE TABLA Y LAS OPCIONES A PASAR-->
                                        </td>




                                        <td colspan="1">
                                            <table>                                                                                                       
                                                <tr>
                                                    <td>
                                                        <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return dropDivisionCelular(event)">                                                
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza10DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/opciones/1.png" alt="pieza10DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza8DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/opciones/2.png" alt="pieza8DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                                                                                                                
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza4DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/opciones/3.png" alt="pieza4DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                

                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza11DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/opciones/4.png" alt="pieza11DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza2DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/opciones/5.png" alt="pieza2DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">                                                                
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza9DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/opciones/6.png" alt="pieza9DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">


                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza12DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/opciones/7.png" alt="pieza12DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza13DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/opciones/8.png" alt="pieza13DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                            <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" id="pieza14DivisionCelular" src="Vista/imagenes/juegos/biologia/juego01/opciones/9.png" alt="pieza14DivisionCelular" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>                            
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--DIECISEIAVO NIVEL-->
        <div style="display: none;">
            <div id="div15" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">TEMA 3: MEIOSIS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <span class="texto">
                                    La meiosis se constituye como una de las formas de reproducción celular que, a diferencia de la 
                                    mitosis, da como resultado células sexuales.
                                    En este tipo de división celular, una célula diploide (2n) experimenta dos divisiones celulares 
                                    sucesivas obteniéndose como resultado final cuatro células haploides (n), que luego de un proceso 
                                    de maduración constituirán las gametas.   Este proceso implica dos divisiones nucleares y 
                                    citoplasmáticas, llamadas primera y segunda división meiótica o meiosis I y meiosis II. Están 
                                    constituidas por las mismas fases que la mitosis y se identifican como profase I, metafase I, 
                                    anafase I y telofase I, para la meiosis I; y profase II, metafase II, anafase II y telofase II, en el caso 
                                    de la meiosis II.

                                    Los procesos de entrecruzamiento o “crossing over” y de segregación al azar que involucran a los 
                                    cromosomas y ocurren durante la meiosis constituyen  una fuente importante de variabilidad, que 
                                    es un aspecto clave en el proceso evolutivo de los seres vivos.
                                    Durante la interfase previa a la meiosis I, el ADN se duplica en la fase S. Por lo  tanto, al comenzar 
                                    la meiosis I, cada cromosoma del par homólogo está compuesto por dos cromátidas hermanas.
                                    Durante la  profase I  los cromosomas comienzan a
                                    condensarse y en un evento característico de este  proceso los 
                                    cromosomas homólogos se aparean y  entre las cromátidas no 
                                    hermanas  se produce el  intercambio de  material genético. 
                                    Este proceso es  conocido como  entrecruzamiento  o crossing-over. 
                                    Ahora, las cromátidas hermanas de un cromosoma ya  no 
                                    tienen una copia idéntica de la molécula de ADN.
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--DIECICIETEAVO NIVEL-->
        <div style="display: none;">
            <div id="div16" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">MEIOSIS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>        

                        <tr>
                            <td colspan="3">
                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/universo/biologia/meiosis1.png">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    En la etapa siguiente la metafase I, los cromosomas  homólogos apareados se alinean en la placa 
                                    ecuatorial  y durante la  anafase I, los microtúbulos del huso tiran  de los cromosomas homólogos 
                                    hacia los polos  opuestos. En la  telofase I  el huso desaparece y se  comienza a formar la envoltura 
                                    nuclear sobre un juego haploide de cromosomas. Luego tiene lugar la citocinesis.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/universo/biologia/meiosis2.png">
                            </td>
                        </tr>


                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--DIECIOCHOAVO NIVEL-->
        <div style="display: none;">
            <div id="div17" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">MEIOSIS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    Como resultado de la meiosis I se han formado dos  células con la mitad de cromosomas que la 
                                    célula madre. Sin embargo, cada cromosoma aún está formado por dos cromátidas.

                                    Durante la intercinesis entre la meiosis I y II no hay duplicación de ADN Una vez que ha concluido 
                                    la primera división meiótica, la célula puede ingresar en período similar a la interfase, que se 
                                    denomina intercinesis, pero durante la misma no se produce la duplicación del ADN.
                                    La célula se prepara para la segunda división meiótica que se produce en un plano perpendicular al 
                                    de la meiosis I.
                                    En la meiosis II se separan las cromátidas hermanas.  La meiosis II es casi idéntica a la mitosis de 
                                    una célula haploide. Durante la  profase II se desintegra el núcleo. Se forma el huso y las 
                                    cromátidas de los cromosomas se enganchan al mismo a través del cinetocoro.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/universo/biologia/meiosis3.png">
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    En la metafase II encontramos a los cromosomas alineados en la placa ecuatorial y, al comenzar la 
                                    anafase II las cromátidas hermanas se separan y  pueden comenzar a ser llamadas cromosomas 
                                    hijos, que se  dirigen hacia polos  opuestos de la célula. La  telofase II  y la  citocinesis  son los 
                                    procesos finales de la meiosis II.
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>



        <!--DIECINUEVEAVO NIVEL-->
        <div style="display: none;">
            <div id="div18" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">MEIOSIS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <label class="texto">
                                    El resultado final del proceso de meiosis es la formación de cuatro células hijas  con la mitad del 
                                    número de cromosomas que la célula madre (haploides). La reducción del número de cromosomas 
                                    se produce en la meiosis I, y por tal  razón se la denomina etapa reduccional. En tanto, en la 
                                    meiosis II como no hay cambio en la cantidad de cromosomas se la llama etapa ecuacional.
                                    Además, las cuatro células hijas son genéticamente diferentes como resultado  del 
                                    entrecruzamiento de la profase I, la segregación (separación) al azar de los  cromosomas 
                                    homólogos de la meiosis I y la segregación al azar de las cromátidas hermanas de la meiosis II.
                                    Todos estos eventos generan diferentes combinaciones de genes en las  células sexuales o 
                                    gametas, aportando mayor variabilidad genética en la  descendencia. Dado que el 
                                    entrecruzamiento es un proceso de intercambio  entre cromatidas  hermanas que se produce al 
                                    azar (cada vez que se realiza es  diferente) es probable que un progenitor nunca genere dos 
                                    gametas completamente idénticas.
                                </label>
                            </td>
                        </tr>



                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--VEINTEAVO NIVEL-->
        <div style="display: none;">
            <div id="div19" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">MEIOSIS</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>   

                        <tr>
                            <td colspan="3">
                                <img  onmouseover="mouseoversound.playclip();" class="imagenOvaSinEfecto"  src="Vista/imagenes/universo/biologia/meiosis4.png">
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>













        <!--VEINTEAVO NIVEL-->
        <div style="display: none;">
            <div id="div20" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">ACTIVIDAD #2</span><br/>
                                <span class="titulo">CUESTIONARIO</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntaCelulas(4);clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <span class="subtitulo">De acuerdo a la lectura, responde las siguientes preguntas:</span>
                            </td>                                
                        </tr>

                        <tr>
                            <td>
                                <br/>
                                <br/>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">1. La siguiente figura representa el esquema de una célula que va a dividirse por meiosis:</label>
                            </td>                            
                        </tr>


                        <tr>
                            <td colspan="3">
                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/universo/biologia/meiosis5.png">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">I. ¿Cuál es el número diploide de cromosomas de la célula representada?</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="1">

                                            <label class="texto">A. 2n: 4</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="2">
                                            <label class="texto">B. 2n: 2</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="3">
                                            <label class="texto">C. 2n: 8</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="4">
                                            <label class="texto">D. n:8</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--VEINTIUNOAVO NIVEL-->
        <div style="display: none;">
            <div id="div21" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">CUESTIONARIO</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntaCelulas(5);clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3">
                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/universo/biologia/meiosis5.png">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">II. ¿Cuántos pares de cromosomas homólogos y cuántas cromátidas contiene?</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="1">

                                            <label class="texto">A. 2 pares de cromosomas y 4 cromatidas</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="2">
                                            <label class="texto">B. 4 pares de cromosomas y 8 cromatidas</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="3">
                                            <label class="texto">C. 2 pares de cromosomas y 8 cromatidas</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="4">
                                            <label class="texto">D. 4 pares de cromosomas y 4 cromatidas</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>




        <!--VEINTIDOSAVO NIVEL-->
        <div style="display: none;">
            <div id="div22" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">CUESTIONARIO</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntaCelulas(6);clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     
                        <tr>
                            <td colspan="3">
                                <img  onmouseover="mouseoversound.playclip();" class="efectoAumento" src="Vista/imagenes/universo/biologia/meiosis5.png">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">III. ¿Esta célula ya atravesó la fase S de la interfase?</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="1">

                                            <label class="texto">A. No ha atravesado por la fase S, ya que sus cromosomas se encuentran unidos por el 
                                                centromero.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="2">
                                            <label class="texto">B. Si atravesó por la fase S porque la cromatina se encuentra organizada en cromosomas</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="3">
                                            <label class="texto">C. No ha atravesado por la fase S, ya que sus cromosomas se encuentran unidos por el 
                                                centromero.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="4">
                                            <label class="texto">D. Si atravesó por la fase S porque sus cromosomas están duplicados, poseen dos cromatidas 
                                                hermanas cada uno.</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>








        <!--VEINTITRESAVO NIVEL-->
        <div style="display: none;">
            <div id="div23" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">CUESTIONARIO</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntaCelulas(7);clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">2.  ¿Qué hechos de la meiosis dan como resultado gametos con diferentes cromosomas?</label>
                            </td>                            
                        </tr>

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="1">

                                            <label class="texto">A.  La duplicación del material genético en la interfase y la segregación al azar de las 
                                                cromatidas hermanas en la meiosis II. </label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="2">
                                            <label class="texto">B.  El crossing over en la profase I, y la duplicación del material genético en la fase S.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="3">
                                            <label class="texto">C.  El entrecruzamiento en la profase I, la segregación al azar de las cromatidas hermanas en 
                                                la meiosis II</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="4">
                                            <label class="texto">D.  La duplicación del material genético en las células somáticas.</label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>







        <!--VEINTICUATROSAVO NIVEL-->
        <div style="display: none;">
            <div id="div24" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">CUESTIONARIO</span>
                            </td>    
                            <td>
                                <img onclick="calificarPreguntaCelulas(8);clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>     

                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">3. Los cromosomas, estructuras que contienen los genes, se encuentran formados por dos 
                                    cadenas llamadas cromatidas, las cuales se encuentran unidas por el centromero. El esquema 
                                    representa una pareja de cromosomas homologas A y B.</label>
                            </td>                            
                        </tr>


                        <tr>
                            <td colspan="3">
                                <img onmouseover="mouseoversound.playclip();"  class="efectoAumento" src="Vista/imagenes/universo/biologia/meiosis6.png">
                            </td>
                        </tr>



                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <label class="subtitulo">Si la célula a la que pertenece sufre un proceso de meiosis, se espera que una vez finalice este 
                                    proceso:</label>
                            </td>                            
                        </tr> 

                        <tr>
                            <td colspan="3">
                                <table class="alineacionIzquierda">
                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="1">

                                            <label class="texto">A. Cada uno de los cromosomas se dirija a cada una de las dos células resultantes</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="2">
                                            <label class="texto">B. Se obtengan cuatro células, dos de las cuales contienen cada una cromatide A y las otras 
                                                una B.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="3">
                                            <label class="texto">C. Se obtengan cuatro células, dos con el cromosoma A y dos con el cromosoma B</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="preguntaCelulas" value="4">
                                            <label class="texto">D. Las cuatro células resultantes, presenten cada una dos cromatides una A y una B 
                                                simultáneamente. </label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>

        <!--VEINTICINCOAVO NIVEL-->
        <div style="display: none;">
            <div id="div25" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">EVALUACION</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>    
                        <tr>
                            <td colspan="3" class="alineacionIzquierda">
                                <span class="subtitulo">A partir del dibujo, completa el cuadro comparativo de la Mitosis – Meiosis</span>
                            </td>    
                        </tr>

                        <tr>
                            <td colspan="3">
                                <img  class="imagenOvaSinEfecto" src="Vista/imagenes/universo/biologia/meiosis7.png">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3" class="alineacionJustificafa">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>

                                            </td>

                                            <td>
                                                <span class="subtitulo">MITOSIS</span>
                                            </td>

                                            <td>
                                                <span class="subtitulo">MEIOSIS</span>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <span class="subtitulo">Celula madre </span>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech placeholder="1, diploide ">
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <span class="subtitulo">Celulas hijas</span>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <span class="subtitulo">Divisiones celulares</span>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <span class="subtitulo">Intercambio de material 
                                                    genético?</span>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <span class="subtitulo">Las fases son: profase, <br/> 
                                                    metafase, anafase y telofase</span>
                                            </td>

                                            <td>
                                                <input type="text"  x-webkit-speech placeholder="Metafase">
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech placeholder="Metafase I y Metafase II">
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <span class="subtitulo">Se produce el apareamiento y<br/> 
                                                    separación de cromosomas  homólogos</span>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <span class="subtitulo">Ocurre el “crossing over”</span>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <span class="subtitulo">Se duplica el material 
                                                    genético.</span>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>
                                        </tr>



                                        <tr>
                                            <td>
                                                <span class="subtitulo">Ocurre la segregación al azar <br/>
                                                    de las cromátidas hermanas</span>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>

                                            <td>
                                                <input type="text" x-webkit-speech>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <div style="display: none;">
            <div id="div26" style="overflow: hidden;" class="ventana">
                <table border="0">
                    <tbody>
                        <tr>
                            <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
                                <?php
                                include("../menusNavegacion/menuDivisionCelular.php");
                                ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                <label class="texto">Anterior</label>
                            </td> 
                            <td colspan="1">
                                <span class="titulo">DOCUMENTOS DE AYUDA</span>
                            </td>    
                            <td>
                                <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                <label class="texto">Siguiente</label>
                            </td>
                        </tr>    
                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr> 

                        <tr>
                            <td colspan="3" class="alineacionIzquierda" width="100%" height="100%">
                                <table class="fondoDocumentosExternos imagenOvaSinEfecto" border="0">
                                    <tr>
                                        <td heigth="30%"></td>
                                        <td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.juntadeandalucia.es/averroes/manuales/materiales_tic/Cell_anim_archivos/Cell_anim_archivos/mitosis_Medina.swf"><span>1. http://www.juntadeandalucia.es/averroes/manuales/materiales_tic/Cell_an </span></a> <br/>                                
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="textoBlancoGrande efectoAumento" href="http://www.santillana.cl/bio2/biologia2u1a2.htm"><span>2. http://www.santillana.cl/bio2/biologia2u1a2.htm </span></a> <br/> 
                                        </td>
                                    </tr>                                  
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="linea" colspan="3">
                                -----------------------------------------------------------------------------------------------------------
                            </td>
                        </tr>
                </table>
            </div>
        </div>


        <!--XXX NIVEL-->
        <!--        <div style="display: none;">
                    <div id="div?" style="overflow: hidden;">
                        <table border="0">
                            <tbody>
                                <tr>
                                    <td  colspan="3" class="alineacionCentro" width="100%" height="100%">
        <?php
        include("Vista/menusNavegacion/nombreOva.php");
        ?>
        
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>
                                        <img onclick="retroceder();clicksound.playclip();" src="Vista/imagenes/otros/general/retroceder.png" class="botonNavegacion"><br/>
                                        <label class="texto">Anterior</label>
                                    </td> 
                                    <td colspan="1">
                                        <span class="titulo">TITULO</span>
                                    </td>    
                                    <td>
                                        <img onclick="avanzar();clicksound.playclip();" src="Vista/imagenes/otros/general/avanzar.png" class="botonNavegacion"><br/>
                                        <label class="texto">Siguiente</label>
                                    </td>
                                </tr>  
        
                                <tr>
                                    <td>
                                        <audio id="audioxOrganica" preload="none">
                                            <source src="Vista/audio/nombreOva/Trackx.mp3">
                                        </audio>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>                                           
                                <tr>
                                    <td class="linea" colspan="3">
                                        -----------------------------------------------------------------------------------------------------------
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>-->




<!--    <tr>
        <td colspan="3">
            <video poster controls width="600px" height="400px" preload="none">
                <source src="http://bancoovas.campusvirtualudecaldas.edu.co/ovaQuimica/Vista/videos/organica/combustion.mp4" type="video/mp4">
            </video>
        </td>
    </tr>-->

    </body>
</html>

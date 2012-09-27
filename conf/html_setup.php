<?php

/* Configuración predeterminada para todas las paginas del sistema, si se va
 * 
 * a utilizar un css diferente para cada seccion, se debe configurar justo antes
 * 
 * de imprimir el resultado es decir despues de que el controlador termine de
 * 
 * ejecutarse.
 * 
 * 
 */

global $html;

$html = new AgHTML();

/*Configuramos los css a utilizar*/
$html->set("style.css","css");

/*Configuramos los js a utilizar*/

$html->set("html5shiv.js","js");
$html->set("jquery-1.8.0.min.js","js");

/*Configuramos el flujo del documento*/

$html->set("header","flow");
$html->set("navigation","flow");
$html->set("AgOutput","flow");
$html->set("footer","flow");

?>

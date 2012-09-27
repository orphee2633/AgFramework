<?php

/* Función : __autoload($classname) Regresa : nada
 * 
 * Descripción : carga automaticamente el archivo con la clase asociada al 
 * 
 * objeto que se instancie
 * 
 */

function __autoload($classname)
{
    #Buscamos en el directorio de controladores
    if(is_file(CONTROLLER_DIR.$classname.".php")) 

        require_once(CONTROLLER_DIR.$classname.".php");
    #Buscamos en el directorio de clases
    elseif(is_file(CLASS_DIR.$classname.".php"))
            
        require_once(CLASS_DIR.$classname.".php");
    #Buscamos en el directorio de clases Ag
    elseif(is_file(AG_DIR.$classname.".php"))
            
        require_once(AG_DIR.$classname.".php");
    #Clase no encontrada
    else
    
        throw new Exception("La clase ".$classname." no pudo ser encontrada");
}

?>

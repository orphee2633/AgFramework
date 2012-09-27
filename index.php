<?php

try
{
    /* 
     * Preparamos el entorno de ejecucion, llamando librerias y demas funciones.
     */

    if(!is_file("conf/setup.php")) throw new Exception("El archivo conf/setup.php no pudo ser encontrado!");

    require_once("conf/setup.php");

    /*
    * Tomamos las variables para definir a que controlador vamos a llamar por
    * 
    * defecto se llama al controlador main y la accion index las cuales son
    * 
    * solamente para llamar a la primera pagina de la aplicacion.
    */
    if(is_file(CONTROLLER_DIR."callController.php"))
    {
        include(CONTROLLER_DIR."callController.php");

        return;
    }
}
catch(Exception $E)
{
    echo $E->getTraceAsString();
}
?>

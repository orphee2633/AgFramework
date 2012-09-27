<?php
   
/* Incluir a todos los archivos de configuracion, y lanzar una excepcion 
* 
* si alguno no se encuentra, se lanzara una excepción  debido a  que el 
* 
* codigo no puede funcionar sin alguno de estos.
* 
*/
    
if(!is_file("conf/db_conf.php")) 
{
    throw new Exception("No se encuentra el archivo conf/db_conf.php");
}
else 
{
    require_once("conf/db_conf.php");
}
    
if(!is_file("conf/php_conf.php"))
{
    throw new Exception("No se encuentra el archivo conf/php_conf.php");
}
else 
{
    require_once("conf/php_conf.php");
       
    #Configuramos la zona horaria
    date_default_timezone_set(DATE_TIME_ZONE);
    
    #configuramos si se muestran o no los errores de ejecucion con DEBUG
    if(DEBUG_MODE)
        
        ini_set('display_errors', "On");
    
    else
        
        ini_set('display_errors', "Off");
}
   
if(!is_file("conf/dir_conf.php"))
{
    throw new Exception("No se encuentra el archivo conf/dir_conf.php");
}
else
{
    require_once("conf/dir_conf.php");
       
    #incluir dinamicamente las librerias que esten en la carpeta LIBRARY_DIR
       
    if(!$op = opendir(LIBRARY_DIR)) throw new Exception("No se pudo abrir el directorio de librerias");
       
    while($file = readdir($op))
    {
        if($file != "." && $file != "..")
        {
            require_once(LIBRARY_DIR.$file);
        }
    }
       
    closedir($op);
}
      
#Se declaran las variables globales del sistema
   
/* 
 * 
 * 
 * $db -> es el objeto representativo de la base de datos, si se requiere se
 * 
 *        pueden declarar mas, sin embargo es responsabilidad del usuario el
 *   
 *        verificar la conexión de los demas.
 * 
 * $html -> es el objeto responsable de imprimir datos en pantalla, se debe
 * 
 *          configurar en conf/html_setup.php en el cual se especifica el 
 * 
 *          flujo del documento asi como que areas seran por default.
 * 
 * 
 */
   
if(!is_file("conf/db_setup.php"))
{   
    throw new Exception("No se encuentra el archivo conf/db_setup.php");
}
else
{
    require_once("conf/db_setup.php");
}
   
if(!is_file("conf/html_setup.php"))
{
    throw new Exception("No se encuentra el archivo conf/html_setup.php");
}
else
{
    require_once("conf/html_setup.php"); 
}

?>

<?php
/*
 * En esta sección se definen los parametros para la configuracion global  de
 * 
 * php, es importante declarar aqui todas las constantes para editar aspectos
 * 
 * en cuanto al comportamiento de php
 * 
 */
#Define el lenguaje de la aplicacion
define("LANG","es");

#Define el modo de verificacion de la base de datos
define("MODE","simple");

#Define la base de datos a utilizar
define("DB", "MySQL");

#Define la zona horaria predeterminada
define("DATE_TIME_ZONE", "America/Chihuahua");

#Define el conjunto de carateres para ser utilizado en esta aplicacion
define("DEFAULT_CHARSET", "UTF-8");

#Define el conjunto de caracteres para ser utilizado por la base de datos
define("DEFAULT_DB_CHARSET","UTF8");

#Define si se mostraran errores al ejecutarse la aplicación
define("DEBUG_MODE", true);

?>

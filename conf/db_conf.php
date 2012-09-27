<?php

/* Configuración  para la base de datos,  si no existe una base datos con el 
 * 
 * nombre especificado, se creara. Es importante especificar en esta sección
 * 
 * los datos para todas las configuraciones, asi se utilicen multiples bases
 * 
 * de datos.
 *
 */
#Define el servidor donde se hospeda la base de datos predeterminada
define("DEFAULT_DB_HOST", "127.0.0.1");

#Define el usuario a validar en la base de datos predeterminada
define("DEFAULT_DB_USER","root");

#Define el password para validar al usuario en la base de datos predeterminada
define("DEFAULT_DB_PASSWORD","");

#Define el nombre de la base de datos predeterminada
define("DEFAULT_DB_NAME","orm");

?>

<?php

/* Inicializar el objeto $db, el cual se encarga de manejar todo lo referente a
 * 
 * la base de datos
 * 
 */

global $db;

switch(DB) #Utiliza un switch para buscar la base de datos que se utilizara
{
    case "MySQL":
        $db = new AgDatabase(DEFAULT_DB_HOST,DEFAULT_DB_USER,DEFAULT_DB_PASSWORD);
        break;
    
    default: #por default sera MySQL
        $db = new AgDatabase(DEFAULT_DB_HOST,DEFAULT_DB_USER,DEFAULT_DB_PASSWORD);
}

/*
 * Sea  cual  sea  la  base  de  datos,  debe ser una extension de la clase de
 * 
 * la misma es decir 'Agdatabase extends MySQLi' por ejemplo, debe contener el
 * 
 * metodo 'boolean' llamado checkup($mode) el cual revisara si existe la base 
 * 
 * de datos, asi como sus tablas. Comportamiento de la variable $mode :
 * 
 * -> 'instalar' : verificara que la base de datos exista, si no existe creara 
 * 
 *                 la base de datos, tablas y procedimientos almacenados para 
 * 
 *                 todo el sistema, haciendo una purga de todos los datos.
 * 
 * -> 'simple' : verifica que la base de datos exista, si no existe, lanzara
 * 
 *               una excepción y el programa terminara
 * 
 * Para el entorno de desarrollo se recomienda utilizar 'instalar' hasta que la
 * 
 * aplicacion este terminada, despues utilizar simple como una medida de 
 * 
 * precaución para no alentizar el sistema. El valor de $mode debe estar el la
 * 
 * constante MODE definida en conf/php_conf.php
 * 
 */

$db->checkup(MODE);

?>

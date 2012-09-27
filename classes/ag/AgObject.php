<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Descripcion : 
 * 
 * Modelo basico de una aplicación Ag, la idea es declarar los datos en este 
 * 
 * apartado
 * 
 *
 * @author Arnoldo Iglesias Ramos
 */
abstract class AgObject 
{
    #objeto de base de datos para hacer la conexion
    public $db;
    
    #arreglo de variables ocultas al usuario
    public static $secret = array("secret","db");
    
    #identificador del objeto en la base de datos
    public $id;
    
    public final function __construct($params = array(), $values = array())
    {
        if(!empty($values))
        {
            $vars = array_keys(get_object_vars($this));
        
            foreach($vars as $key) $this->$key = $values[$key];
        }
        
        $this->init($params);
    }
    
    /* Funcion __construct($params, $values) regresa nada, se encarga de 
     * 
     * inicializar al objeto, la base de datos, verificar que la tabla del
     * 
     * objeto exista y finalmente que los metodos almacenados necesarios del
     * 
     * objeto existan. 
     */
    
    public function init();
}

?>

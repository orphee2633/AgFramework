<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Descripcion : 
 * 
 * 
 *
 * @author Arnoldo Iglesias Ramos
 */
class AgMessage {
    
    private $mensaje;
    private $tipo;
    
    public function __construct($mensaje, $tipo)
    {
        $this->mensaje = $mensaje;
        $this->tipo = $tipo;
    }
    
    public function __toString(){ return $this->mensaje; }
    
}

?>

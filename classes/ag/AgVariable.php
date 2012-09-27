<?php
/**
 * Descripcion : 
 * 
 * 
 *
 * @author Arnoldo Iglesias Ramos
 */
class AgVariable 
{
    /* datos generales de la variable */
    public $mode;  #describe como sera tratada la variable
    public $name;  #el nombre de la variable
    public $value; #el valor de la variable
    
    /* datos para base de datos */
    public $nullable;
    public $size;
    public $type;
    public $unsigned;
    public $zerofill;
    public $default;
    
    /*datos para verificar patron*/
    public $regex;
        
    public function __construct($name)
    {
        /*datos generales de la variable*/
        $this->name     = $name;
        $this->value    = null;
        $this->mode     = "AsVariable";
        
        /*datos para base de datos*/
        $this->nullable = false;
        $this->size     = 40;
        $this->type     = "VARCHAR";
        $this->unsigned = false;
        $this->zerofill = false;
        $this->default  = "";
        
        /*datos para verificar patron*/
        $this->regex = "";
    }
    
    public function set($name, $value){ $this->$name = $value; }
    
    public function asVariable()
    {
        return $this->value;
    }
}

?>

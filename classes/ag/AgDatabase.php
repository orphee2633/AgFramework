<?php

/**
 * Descripcion : Clase AgDatabase para MySQLi
 * 
 * Utiliza las funciones ya incluidas en MySQLi y añade otras nuevas :
 * 
 * tablaExiste($tabla) -> verifica que la tabla '$tabla' existe, regresa 'true' 
 * 
 * en caso afirmativo o 'false' en caso contrario.
 * 
 *
 * @author Arnoldo Iglesias Ramos
 */

class AgDatabase extends mysqli implements AgDatabaseInterface
{
    public function tableExists($tabla)
    {
        $q = "SHOW TABLES LIKE \"".$this->real_escape_string($tabla)."\"";
                
        $result = $this->query($q);
        
        $tablas = $result->num_rows;
        
        $result->free();
        
        if($tablas > 0)
            
            return true;
        
        else
            
            return false;
    }
    
    public function doProcedure($nombre, $args = array())
    {          
        
    }
    
    public function doQuery($query, $resultmode = MYSQLI_STORE_RESULT){ return $this->query($query, $resultmode); }
    
    public function checkup($mode) 
    { 
        switch($mode)
        {
            case "simple":
                
                if(!$this->select_db(DEFAULT_DB_NAME)) 
           
                    throw new Exception("La base de datos ".DEFAULT_DB_NAME." no pudo ser encontrada");

                return true;
                
                break;
            
            case "instalar":
                
                if($this->select_db(DEFAULT_DB_NAME)) return true;
        
                $q = "CREATE DATABASE ".DEFAULT_DB_NAME;
        
                if(!$this->query($q)) throw new Exception("La base de datos ".DEFAULT_DB_NAME." no pudo ser creada");
        
                return true;
                
                break;
            
            default:
                
                return $this->simple_checkup();
        }
    }
}

?>

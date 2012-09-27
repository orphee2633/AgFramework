<?php

/**
 * Descripcion : Objeto de html para imprimir resultados en pantalla desde
 * 
 * un controlador, tiene como objetivo reducir la cantidad de codigo a escribir
 * 
 * en HTML asi como dar un orden o estructura al sistema, puede imprimir tags
 * 
 * de html o bien traer e incluir framentos de html segun sea necesario.
 * 
 * 
 *
 * @author Arnoldo Iglesias Ramos
 */
class AgHTML {
    
    public $titulo;
    public $css;
    public $js;
    public $flow;
    public $messages;
    public $display_data;
    
    function __construct()
    {
        $this->titulo = "Pagina Ag";
        
        $this->css = array();
        
        $this->js = array();
    }
        
    function template($string, $controller = "")
    {
        if(is_file(VIEW_DIR.$string.".php") && empty($controller))
        {
            include(VIEW_DIR.$string.".php");
            
            return;
        }
        
        elseif(is_file(VIEW_DIR.$controller."/".$string.".php") && !empty($controller))
        {   
                include(VIEW_DIR.$controller."/".$string.".php");
                
                return;
        }

    }
    
    function set($item, $flag = "titulo")
    {
        switch($flag)
        {
            case "titulo":
                $this->titulo = $item;
                break;
            
            case "css":
                $this->css[] = $item;
                break;
            
            case "js":
                $this->js[] = $item;
                break;
            
            case "flow":
                $this->flow[] = $item;
                break;
            
            default:
                $this->titulo = $item;
                break;
                
        }
    }
    
    function setCSS()
    {
        foreach($this->css as $file)
        {
            if(is_file(RESOURCE_DIR."css/".$file))
            {
                echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".RESOURCE_DIR."css/".$file."\" />\n";
            }
        }
    }
    
    function setJS()
    {
        foreach($this->js as $file)
        {
            if(is_file(RESOURCE_DIR."js/".$file))
            {
                echo "<script type=\"text/javascript\" src=\"".RESOURCE_DIR."js/".$file."\"></script>\n";
            }
        }
    }
    
    public function callview($controlador = "main", $action = "index")
    {   
        foreach($this->flow as $template)
        {    
            if($template == "AgOutput")
            {
                if(is_file(VIEW_DIR.$controlador."/".$action.".php"))
                            
                    $this->template($action, $controlador);
            }   
            else
            {   
                $this->template($template);   
            }
        }
    }
    
    public function addMessage($message, $type){ $this->messages[] = new AgMessage($message, $type); }
    
    public function a($nombre, $que){$this->display_data[$nombre] = $que;}
    
    public function d($que){return $this->display_data[$que];}
}

?>

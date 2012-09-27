<?php

    $controller = isset($_GET["controller"]) ? $_GET["controller"] : "main";

    $action     = isset($_GET["action"])     ? $_GET["action"]     : "index";
    
    /* se anexa la palabra controller debido a que las peticiones son con el
     * 
     * nombre de la clase sin la palabra 'controller'
     */
    
    $controller = $controller."controller";
    
    $ctrl = new $controller();
    
    $funciones = get_class_methods($controller);
        
    if(in_array($action, $funciones))
    {
        $ctrl->$action();
    }
    
    else
        
        throw new Exception("La acción solicitada no existe");

?>

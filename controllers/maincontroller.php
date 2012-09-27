<?php
/**
 * Descripcion : Controlador para ir a la pagina principal
 * 
 * 
 *
 * @author Arnoldo Iglesias Ramos
 */
class maincontroller 
{
    function index()
    {
        global $html;
        
        $html->set("Mi nuevo titulo");
        
        $html->callView();
    }
}

?>

<?php

/* AgDatabaseInt
 * 
 * Descripcion : Interfaz para la clase AgDatabase, con las funciones
 * 
 * necesarias para utilizar dentro del sistema, por el objeto de base
 * 
 * de datos
 * 
 */

interface AgDatabaseInterface
{
    public function checkup($mode);
    
    /* Funcion checkup($mode), regresa 'true' en caso de que la revision que
     * 
     * $mode haya solicitado, haya sido exitosa, 'false' en caso contrario.
     * 
     * verifica que la base datos este lista para hacer consultas y dependiendo
     * 
     * de $mode, crearla y configurarla.
     * 
     */

    public function doProcedure($nombre, $args = array());
    
    /* Funcion doProcedure($nombre, $args = []) regresa 'true' en caso de que
     * 
     * el procedimiento se haya ejecutado con exito, 'false' en caso contrario 
     * 
     * o bien puede regresar un 'resource' dependiendo del procedimiento que 
     * 
     * haya sido usado. $args es la variable en la cual se ponen los parametros
     * 
     * o argumentos que usa el procedimiento. 
     * 
     */
    
    public function tableExists($tabla);
    
    /* Funcion tableExists($tabla) regresa 'true' en caso de que la tabla 
     * 
     * '$tabla' exista, 'false' en caso contrario.
     * 
     */
}

?>

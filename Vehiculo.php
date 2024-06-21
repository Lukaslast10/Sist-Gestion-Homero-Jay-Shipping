<?php
include_once "./Autopartes.php";

abstract class Vehiculo 
{
    protected $empresa; 
    protected $matricula;
    protected $capacidad;
    public $ruta = array();
    public $carga = array();
    function __construct($empresa, $matricula, $capacidad){
        $this->$empresa;
        $this->$matricula;
        $this->$capacidad;
    }
    
    function asignar_ruta($ruta){
        # validar entrada de datos
        
        # asignar a propiedad ruta

    }
    function eliminar_ruta($ruta){
        # validar entrada de datos
    }
    function asignar_carga($carga){
        # validar entrada de datos
        
        # asignar a propiedad carga
    }
    function eliminar_carga($carga){
        # validar entrada de datos
    }
    function ver_empresa (){
        return
    }
    function ver_matricula(){
        return
    }
    function ver_capacidad (){
        return
    }
    function realizar_mantenimiento (){
        return
    }
   
}

?>
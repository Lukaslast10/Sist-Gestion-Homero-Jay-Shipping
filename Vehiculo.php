<?php
include_once "./Autopartes.php";
include_once "./Direccion.php";
include_once "./utils.php";


abstract class Vehiculo 
{
    protected $empresa; 
    protected $matricula;
    protected $capacidad;
    public $ruta;
    public $carga;
    function __construct(String $empresa, String $matricula, String $capacidad){
        
        $this->$empresa;
        $this->$matricula;
        $this->$capacidad;
    }
    
    function asignar_ruta($ruta){

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
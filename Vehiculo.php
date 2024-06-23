<?php
include_once "Autoparte.php";
include_once "./utils.php";


abstract class Vehiculo
{
    protected $empresa; 
    protected $matricula;
    protected $capacidad;
    public $ruta;
    public $carga;
    public $propio;
    function __construct(String $empresa, String $matricula, String $capacidad, Lista $ruta, Lista $carga){
        
        $this->$empresa;
        $this->$matricula;
        $this->$capacidad;
        $this->$ruta;
        $this->$carga;
    }
    
    function ver_empresa (){
        return $this->empresa;
    }
    function ver_matricula(){
        return $this->matricula;
    }
    function ver_capacidad (){
        return $this->capacidad;
    }
    function realizar_mantenimiento (){
        return $this->empresa;
    }

    abstract function salir_a_reparto();
}

?>
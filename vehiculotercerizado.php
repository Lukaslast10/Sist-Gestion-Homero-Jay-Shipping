<?php

class VehiculoTercerizado extends Vehiculo {
    private $nombreEmpresa;

    public function __construct($nombreEmpresa, $matricula, $capacidad) {
        parent::__construct($nombreEmpresa, $matricula, $capacidad);
        $this->nombreEmpresa = $nombreEmpresa;
    }

    // Crea un array para almacenar los datos de inicio y termino del contrato.
    public function asignarContrato($fechaInicio, $fechaFin) {
        $this->contrato = [
            "fechaInicio" => $fechaInicio,
            "fechaFin" => $fechaFin,
        ];
    }
}
?>


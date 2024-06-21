<?php

class VehiculoPropio extends Vehiculo {
    private $autopartes;

    public function __construct($empresa, $matricula, $capacidad, $autopartes) {
        parent::__construct($empresa, $matricula, $capacidad);
        $this->autopartes = $autopartes;
    }

    public function agregarPieza($autopartes) {
        $this->autopartes = array_merge($this->autopartes, $autopartes);
    }

    public function quitarPieza($autopartes) {
        foreach ($autopartes as $pieza) {
            if (in_array($pieza, $this->autopartes)) {
                array_splice($this->autopartes, array_search($pieza, $this->autopartes), 1);
            }
        }
    }

    public function cambiarPieza($piezaVieja, $piezaNueva) {
        if (in_array($piezaVieja, $this->autopartes)) {
            array_splice($this->autopartes, array_search($piezaVieja, $this->autopartes), 1, $piezaNueva);
        } else {
            echo "No se pudo cambiar la pieza " . $piezaVieja . " porque no está en el vehículo.\n";
        }
    }
}
?>


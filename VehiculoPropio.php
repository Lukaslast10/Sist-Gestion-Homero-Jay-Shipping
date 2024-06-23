<?php

include_once './Vehiculo.php';

class VehiculoPropio extends Vehiculo {
    private $autopartes;

    public function salir_a_reparto(){
        # codigo de comportamiento
        //agregado a salir a reparto 
        echo "Vehiculo salio a reparto "
    }

    public function __construct($empresa, $matricula, $capacidad, $autopartes) {
        parent::__construct($empresa, $matricula, $capacidad);

        // Validación de la empresa
        if (empty($empresa)) {
            throw new Exception("La empresa del vehículo no puede estar vacía");
        }

        // Validación de la matrícula
        if (empty($matricula)) {
            throw new Exception("La matrícula del vehículo no puede estar vacía");
        }

        // Validación de la capacidad
        if (!is_numeric($capacidad) || $capacidad <= 0) {
            throw new Exception("La capacidad del vehículo debe ser un número positivo");
        }

        // Validación de las autopartes
        if (empty($autopartes)) {
            throw new Exception("El vehículo debe tener al menos una autopieza");
        }

        foreach ($autopartes as $pieza) {
            if (!$pieza instanceof Autoparte) {
                throw new Exception("Las autopartes del vehículo deben ser instancias de la clase Autoparte");
            }
        }

        $this->autopartes = $autopartes;
    }

    public function agregarPieza($autopartes) {
        foreach ($autopartes as $pieza) {
            if (!$pieza instanceof Autoparte) {
                throw new Exception("Las piezas que se agregan al vehículo deben ser instancias de la clase Autoparte");
            }
        }

        $this->autopartes = array_merge($this->autopartes, $autopartes);
    }

    public function quitarPieza($autopartes) {
        foreach ($autopartes as $pieza) {
            if (!$pieza instanceof Autoparte) {
                throw new Exception("Las piezas que se quitan del vehículo deben ser instancias de la clase Autoparte");
            }
        }

        foreach ($autopartes as $pieza) {
            if (in_array($pieza, $this->autopartes)) {
                array_splice($this->autopartes, array_search($pieza, $this->autopartes), 1);
            }
        }
    }

    public function cambiarPieza($piezaVieja, $piezaNueva) {
        if (!$piezaVieja instanceof Autoparte) {
            throw new Exception("La pieza vieja debe ser una instancia de la clase Autoparte");
        }

        if (!$piezaNueva instanceof Autoparte) {
            throw new Exception("La pieza nueva debe ser una instancia de la clase Autoparte");
        }

        if (in_array($piezaVieja, $this->autopartes)) {
            array_splice($this->autopartes, array_search($piezaVieja, $this->autopartes), 1, $piezaNueva);
        } else {
            echo "No se pudo cambiar la pieza " . $piezaVieja->getNombre() . " porque no está en el vehículo.\n";
        }
    }
}

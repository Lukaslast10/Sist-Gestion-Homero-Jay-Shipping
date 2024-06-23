<?php

include_once "./VehiculoTercerizado.php";
include_once "./VehiculoPropio.php";

class Camiones {
    private $vehiculoPropio;
    private $vehiculoTercerizado;
    private $carga;

    public function __construct($empresa, $matricula, $capacidad, $autopartes) {
        $this->vehiculoPropio = new VehiculoPropio($empresa, $matricula, $capacidad, $autopartes);
        $this->vehiculoTercerizado = new VehiculoTercerizado($empresa, $matricula, $capacidad);
        $this->carga = [];
    }

    public function asignar_carga($productos) {
        try {
            foreach ($productos as $producto) {
                // Validación de tipo de dato para $producto
                if (!$producto instanceof Producto) {
                    throw new Exception("El parámetro $productos debe ser un array de objetos Producto.");
                }

                $this->carga[] = $producto;
            }
        } catch (Exception $e) {
            echo "No se pudo asignar la carga: " . $e->getMessage();
        }
    }

    public function asignar_carga_productos_refrigerados($productos_refrigerados) {
        try {
            foreach ($productos_refrigerados as $producto_refrigerado) {
                // Validación de tipo de dato para $producto_refrigerado
                if (!$producto_refrigerado instanceof Producto) {
                    throw new Exception("El parámetro $productos_refrigerados debe ser un array de objetos Producto.");
                }

                $this->carga[] = $producto_refrigerado;
            }
        } catch (Exception $e) {
            echo "No se pudo asignar la carga: " . $e->getMessage();
        }
    }
}
?>
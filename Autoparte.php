<?php

class Autoparte {
    private $nombre;
    private $desgaste;

    public function __construct($nombre) {
        if (empty($nombre)) {
            throw new Exception("El nombre de la autopieza no puede estar vacío");
        }
    
        if (!preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ_ ]+$/', $nombre)) {
            throw new Exception("El nombre de la autopieza solo puede contener caracteres alfanuméricos, guiones bajos y espacios");
        }
    
        $this->nombre = $nombre;
        $this->desgaste = 0;
    }
    
    // Restaura el desgaste a 0 (como nuevo).
    public function cambiar() {
        $this->desgaste = 0;
    }
    // Aumenta el desgaste en 1.
    public function usar() {
        if ($this->desgaste < 0) {
            throw new Exception("El desgaste de la autopieza no puede ser negativo");
        }
    
        $this->desgaste++;
    }
}
?>

<?php

class Autoparte {
    public $nombre;
    public $desgaste;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->desgaste = 0;
    }
    
    // Restaura el desgaste a 0 (como nuevo).
    public function cambiar() {
        $this->desgaste = 0;
    }
    // Aumenta el desgaste en 1.
    public function usar() {
        $this->desgaste++;
    }
}
?>

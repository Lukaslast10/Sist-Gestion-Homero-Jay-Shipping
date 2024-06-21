<?php

class Autoparte {
    private $nombre;
    private $desgaste;

    public function __construct($nombre, $desgaste) {
        $this->nombre = $nombre;
        $this->desgaste = $desgaste;
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

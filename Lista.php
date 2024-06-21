<?php
    class Lista(){
        public $lista = array();
        function __construct(...$elementos){
            $this->lista = $elementos;
        }

        function agregar(Object $elemento){
            array_push($this->lista, $elemento);
        }


        function buscar (String $propiedad, $valor_buscado){
            foreach ($this->lista as $index => $elemento) {
                if ($elemento[$propiedad] === $valor_buscado) {
                    return $elemento;
                }
            }
        }

        function reemplazar (Object $objeto_viejo, Object $objeto_nuevo){
            array_replace($objeto_viejo, $objeto_nuevo)
        }
        function eliminar (Object $objeto_a_eliminar){
            array_diff($this->lista, array($objeto_a_eliminar));
        }
    }
    
    $lista = new Lista([])
?>
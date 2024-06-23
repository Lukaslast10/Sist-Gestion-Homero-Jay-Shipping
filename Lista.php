<?php
    class Lista{
        protected $contenido = array();
        function __construct(Object ...$elementos){
            $this->contenido = $elementos;
        }
        function ver(){
            return $this->contenido;
        }

        function agregar(Object $elemento){
            array_push($this->contenido, $elemento);
            return $this->ver();
        }


        public function buscar($propiedad, $valor, $posicion = 0) {
            $resultados = []; // Array para almacenar los objetos encontrados
    
            foreach ($this->contenido as $indice=>$objeto) {
                // Verifica si la propiedad existe en el objeto
                if (property_exists($objeto, $propiedad)) {
                    // Compara el valor de la propiedad con el valor buscado
                    if ($objeto->$propiedad === $valor) {
                        $resultados[] = [$indice, $objeto]; // Agrega el objeto al array de resultados
                    }
                }
            }
            if($posicion-1 >= 0){
                return $resultados[$posicion-1];
            }else{
                if(count($resultados) == 1){
                    return $resultados[0]; // Devuelve el array con los objetos encontrados
                }
                return $resultados; // Devuelve el array con los objetos encontrados

            }
        }

        function reemplazar ($objeto_viejo, $objeto_nuevo){
            if(!is_array($objeto_viejo)){
                $posicion = array_search($objeto_viejo, $this->contenido);
            } else {
                [$posicion, $objeto_viejo] = $objeto_viejo;
            }

            if ($posicion !== false) {
                $this->contenido[$posicion] = $objeto_nuevo;
            }
                
            return $this->ver();
        }


        function eliminar ($objeto_a_eliminar){
            switch (gettype($objeto_a_eliminar)) {
                case 'array':
                    [$posicion, $objeto_a_eliminar] = $objeto_a_eliminar;
                    break;
                
                case 'integer':
                    $posicion = $objeto_a_eliminar;
                    break;
                
                case 'object':
                    $posicion = array_search($objeto_a_eliminar, $this->contenido);
                    break;
                
                default:
                    # code...
                    break;
            }

            unset($this->contenido[$posicion]);
            return $this->ver();
        }
    }
    
?>
<?php #daniela

class Producto{
    //propiedades de la clase
    public $nombre;
    public $cantidad;
    public $peso_unitario;
    public $peso_total;
    public $unidad_de_medida;
    public $refrigerado;
    
    //constructor para iniciar la clase
    function __construct($nombre, $cantidad, $peso_unitario, $refrigerado) {
       $this ->nombre = $nombre;
       $this ->cantidad = $cantidad;
       $this -> peso_unitario = $peso_unitario;
       $this -> refrigerado = $refrigerado;
       $this -> peso_total = $peso_unitario * $cantidad;

    }
        
    //método para agregar producto
    public function agregar_producto ($cantidad) {
        if ($cantidad <0) {
            throw new Exception("la cantidad agregar no puede ser negativa"); 

            }
            $this->cantidad += $cantidad;
         
         //método para quitar producto 
         
        }
        function quitar_producto($cantidad){
          if ($cantidad > $this->cantidad) {
              throw new Exception("no se puede quitar más cantidad de la disponible");
          
          }
          $this->cantidad -=$cantidad;
        }

         //método para obtener el estado de refrigeración
         function get_refrigerado() {
           return $this -> refrigerado ? "SI" : "NO";
         }
         
         // método para mostrar información del producto
         function mostrarinformación () { #debe retornar un
           echo "nombre: " . $this ->nombre . "<br>".
                "cantidad: " . $this ->cantidad . " * " . $this->peso_unitario . " kg" ."<br>".
                "refrigerado: " .  $this ->get_refrigerado() . "<br>";

         }
      }
      // crear una instancia de la clase Producto
      $producto = new producto("helado1" , 10 , 3 ,true); //
     
      // crear una instancia de la clase Producto
      $producto = new producto("helado2" , 5 , 3 ,true); //
      
      //mostrar información del producto
      $producto->mostrarInformación();
      
      //agregar cantidad al producto
      $producto->agregar_producto (5);

      //mostrar información actualizada del producto 
      echo "<br>información actualizada despues de agregar : <br>";
      $producto->mostrarinformación();
    
?>

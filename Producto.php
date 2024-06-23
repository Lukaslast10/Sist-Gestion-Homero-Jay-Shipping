<?<p>

class Producto{
    //propiedades de la clase
    public $nombre;
    public $cantidad;
    public $peso_unitario;
    private $refrigerado;
    
    //constructor para iniciar la clase
    public function __construct($nombre,$cantidad,$peso_unitario,$refrigerado) {
       $this ->nombre = $nombre;
       $this ->cantidad = $cantidad;
       $this -> peso_unitario = $peso_unitario;
       $this -> refrigerado = $refrigerado;

    }
        
    //método para agregar producto
    public function agregar_producto ($cantidad) {
        if ($cantidad <0) {
            throw new Exception("la cantidad agregar no puede ser negativa"); 

            }
            $this->cantidad += cantidad;
         
         //método para quitar producto 
          public function quitar_producto($cantidad){
            if ($cantidad > $this->cantidad) {
                throw new Exception(no se puede quitar más cantidad de la disponible");
            
            }
            $this->cantidad -=$cantidad;
          }

           //método para obtener el estado de refrigeración
           public function get_refrigerado() {
             return $this -> refrigerado ? "SI" : "NO";
           }
           
           método para mostrar información del producto
           public function mostrarinformación () {
             echo "nombre" . $this ->nombre . "<br>";
             echo "cantidad" . $this ->cantidad . "  " . $this->peso_unitario . "<br>";
             echo "refrigerado: " .  $this ->get_refrigerado() . "<br>";

           }

        }
       // crear una instancia de la clase Producto
       $producto = new producto("vehiculo" , 10, , true); preguntar a Joel
       
       //mostrar información del producto
       $producto->mostrarInformación();
       
       //agregar cantidad al producto
       $producto->agregar_producto (5);

       //mostrar información actualizada del producto 
       echo "<br>información actualizada despues de agregar : <br">;
       $producto->mostrarinformación();

    )
    
    }
    
</p>

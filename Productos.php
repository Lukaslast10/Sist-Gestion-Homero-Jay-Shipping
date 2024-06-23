<?php # Lucas

class Producto {
    public $nombre; # buenas practicas: cuando es public no hace falta poner setters y getters
    public $cantidad; 
    private $peso; # error: el peso debe calcularse dinamicamente en funcion del peso unitario y devolver un string uniendo el peso con la unidad de medida
    public $unidad_de_medida; #debe ser private
    private $refrigerado; # debe ser public para que la clase vehiculos pueda leerlo

    public function __construct(string $nombre, int $cantidad, int $peso, string $unidad_de_medida, bool $refrigerado) {
        $this->setNombre($nombre); # buenas practicas: en el constructor no se usan setters, se asigna directamente
        $this->setCantidad($cantidad);
        $this->setPeso($peso);
        $this->setUnidadDeMedida($unidad_de_medida);
        $this->setRefrigerado($refrigerado);
    }

    // Getters y setters para Nombre
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        if (!empty($nombre)) {
            $this->nombre = $nombre;
        } else {
            throw new Exception("Nombre inválido debe ser string");
        }
    }

    // Getters y setters para Cantidad
    public function getCantidad(): int {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): void {
        if ($cantidad > 0) {
            $this->cantidad = $cantidad;
        } else {
            throw new Exception("Cantidad inválida debe ser int");
        }
    }

    // Getters y setters para Peso
    public function getPeso(): int {
        return $this->peso;
    }

    public function setPeso(int $peso): void { 
        if ($peso > 0) {
            $this->peso = $peso;
        } else {
            throw new Exception("Peso inválido debe ser int");
        }
    }

    // Getters y setters para Unidad de Medida
    public function getUnidadDeMedida(): string {
        return $this->unidad_de_medida;
    }

    public function setUnidadDeMedida(string $unidad_de_medida): void {
        if (!empty($unidad_de_medida)) {
            $this->unidad_de_medida = $unidad_de_medida;
        } else {
            throw new Exception("Unidad de medida inválida debe ser string");
        }
    }

    // Getters y setters para Refrigerado
    public function getRefrigerado(): bool {
        return $this->refrigerado;
    }

    public function setRefrigerado(bool $refrigerado): void {
        $this->refrigerado = $refrigerado;
    }
}
#instancia
$producto = new Producto();

#getters
function getNombre(); # string
function setNombre(string $nombre); 
function getCantidad(); # int
function setCantidad(int $cantidad); #
function getPeso(); # int
function setPeso(int $peso); #
function getUnidadDeMedida(); # string
function setUnidadDeMedida(string $unidad_de_medida); #
function getRefrigerado(); # booolean
function setRefrigerado(bool $refrigerado); #
#setters
?>
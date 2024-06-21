<?php
    include_once "./Lista.php"
    include_once "./Autoparte.php"

    $autopartes = new Lista(
        Autoparte("motor"), 
        Autoparte("transmision"),
        Autoparte("rueda"),
        Autoparte("rueda"),
        Autoparte("rueda"),
        Autoparte("rueda"),
        Autoparte("chasis"),
        Autoparte("freno"),
        Autoparte("freno"),
        Autoparte("freno")
    )

    $autopartes->agregar(Autoparte("freno"));
    var_dump($autopartes)
    $autopartes->buscar("nombre", "freno");
    var_dump($autopartes)
    $autopartes->reemplazar(buscar("nombre", "freno"), Autoparte("freno Brandstorm"));
    var_dump($autopartes)
    $autopartes->eliminar(Autoparte("freno Brandstorm"));
    var_dump($autopartes)
?>
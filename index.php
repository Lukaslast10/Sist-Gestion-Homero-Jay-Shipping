<?php

  include_once "./Flota";

  // 1- flota
  $flota = new Flota();
  //   a- ver listado de vehiculos
  print_r($flota->get_contenido());
  //   b- agregar vehiculo
  print_r($flota->comprar(new VehiculoPropio()));
  //   c- eliminar vehiculo

  //   d- gestionar las piezas
  //     - agregar, cambiar, eliminar piezas
  //   e- gestionar las cargas
  //     a- crear cargas, 
  //     b- modificar productos
  //     c- eliminar cargas
  //   f- gestionar las rutas
  //     a- crear rutas, 
  //     b- modificar direcciones
  //     c- eliminar rutas
  //       a- crear
  //       b- modificar direcciones
  //       c- eliminar cargas

?>
@extends ('layout')

@section ('header')

<style type="text/css">
.big th, .big, table, th { border:1px solid; }
.big td, .small th, td { border:1px solid lightgray; }
.small { border-collapse: collapse; }
</style>

<?php 

  function order_link ($name, $display) {
    return link_to(route('materiales.index', ['order' => $name]), $display);
  }

 ?>

@stop

@section ('content')

<?php 

  $table = array();

  $table['names'] = array(
    'Nombre',
    'Categoria',
    'Precio de Compra',
    'Costo',
    'Flete',
    'Alto',
    'Ancho',
    'Cantidad',
    'Rendimiento',
    'Desperdicio',
    'Vinculaciones',
    'Opciones',
  );

  $table['order'] = array(
    'Nombre' => 'nombre',
    'Precio de Compra' => 'precio_compra',
    'Costo' => 'costo',
  );

  $table['function'] = function ($material) {
    return array(
      $material->nombre,
      $material->categoria->nombre,
      $material->precio_compra,
      $material->costo,
      $material->flete,
      $material->alto,
      $material->ancho,
      $material->cantidad,
      $material->rendimiento,
      $material->desperdicio,
      $material->vinculaciones()->count(),
      link_to('#', 'Borrar'),
    );
  };

  $table['data'] = $materiales;
 ?>

@include ('table')

{{link_to(route('materiales.create') ,'Nuevo Material')}}

@stop
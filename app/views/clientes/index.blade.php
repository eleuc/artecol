@extends ('layout')

@section ('header')
<style type="text/css">
table, th { border:1px solid; }
td { border:1px solid lightgray; }
</style>
@stop

@section ('content')
<h1>Clientes</h1>
<?php 
  
  $table = array();

  $table['names'] = array(
    'Nombre',
    'Apellido',
    'Identificacion',
    'Persona',
    'Representante',
  );

  $table['function'] = function ($cliente) {
    return array(
      $cliente->nombre,
      $cliente->apellido,
      $cliente->identificacion,
      $cliente->personaCompleto(),
      $cliente->representante_id,
    );
  };

  $table['data'] = $clientes;

 ?>
{{link_to(route('clientes.create'), 'Nuevo Cliente')}}

@include ('table')



@stop
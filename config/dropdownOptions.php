<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Opciones fijas en dropdown inputs
    |--------------------------------------------------------------------------
    |
    | Simplifica la definición de opciones fijas para distintos dropdowns del
    | sitio.
    | Organización: Feature > Componente > Input > Opciones
    */
  'actividad' => [
      'filtroInscripciones' => [
          'campos' => [
              ['id' => 'nombre','campo' => 'Nombre'],
              ['id' => 'apellido', 'campo' => 'Apellido'],
              ['id' => 'dni', 'campo' => 'DNI/Pasaporte'],
              ['id' => 'email', 'campo' => 'e-mail'],
              ['id' => 'estado', 'campo' => 'Estado (No disponible)'],
              ['id' => 'punto' , 'campo' =>  'Punto de Encuentro (No disponible)'],
              ['id' => 'rol' , 'campo' =>  'Rol (No disponible)'],
              ['id' => 'grupo' , 'campo' =>  'Grupo (No disponible)'],
              ['id' => 'cantidadActividades' , 'campo' =>  'Cantidad Actividades (No disponible)'],
              ['id' => 'tipoActividad' , 'campo' =>  'Tipo de Actividad Anterior (No disponible)'],
              ['id' => 'promedioEvaluacion' , 'campo' =>  'Promedio Evaluación (No disponible)']
          ],
          'condiciones' => [
              ['value' => '>', 'label' => 'mayor que'],
              ['value' => '>=', 'label' => 'mayor o igual que'],
              ['value' => '<', 'label' => 'menor que'],
              ['value' => '<=', 'label' => 'menor o igual que'],
              ['value' => '=', 'label' => 'igual a'],
              ['value' => '<>', 'label' => 'distinto de'],
              ['value' => 'like', 'label' => 'contiene'],
              ['value' => 'in', 'label' => 'está en lista']
          ]
      ]
  ]
];
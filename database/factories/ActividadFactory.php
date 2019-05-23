<?php

use Faker\Generator as Faker;

$factory->define(App\Actividad::class, function (Faker $faker) {
    return [
      'idTipo' => 11,
      'fechaCreacion' => "2018-11-07 00:00:00",
      'fechaModificacion' => "2018-11-07 14:08:56",
      'fechaInicio' => "2018-11-10 00:00:00",
      'fechaFin' => "2018-11-11 23:59:00",
      'fechaInicioFinFormato' => null,
      'fechaInicioInscripciones' => "2018-11-07 00:00:00",
      'fechaFinInscripciones' => "2018-11-08 23:59:00",
      'limiteInscripciones' => "0",
      'idUnidadOrganizacional' => 1,
      'idOficina' => 1,
      'nombreActividad' => $faker->name,
      'descripcion' => $faker->name,
      'lugar' => "",
      'casasPlanificadas' => "0",
      'casasConstruidas' => "0",
      'comentarios' => "",
      'tipoConstruccion' => "",
      'estadoConstruccion' => "Abierta",
      'idPrograma' => null,
      'mensajeInscripcion' => $faker->name,
      'idEncuestaDinamica' => 0,
      'numConstruccion' => null,
      'pApMat' => 1,
      'pDNI' => 1,
      'pFonoMovil' => 1,
      'pUniversidad' => 1,
      'pCarrera' => 1,
      'pAnoEstudio' => 1,
      'pAcompanante' => 0,
      'tPortugues' => 0,
      'enviarMail' => 1,
      'actividadSecundaria' => 1,
      'compromiso' => 1,
      'idListaCTCT' => "",
      'mostrarFB' => 0,
      'presupuesto' => null,
      'inscripcion' => null,
      'inscripcionInterna' => 0,
      'idPersonaCreacion' => 1,
      'idPersonaModificacion' => 1,
      'idEmpresa' => null,
      'costo' => null,
      'moneda' => "ARS",
      'estadoDefault' => null,
      'puntosEnvio' => null,
      'captaciones' => null,
      'pAcompanantePost' => null,
      'mailBeca' => null,
      'idFormulario' => null,
      'fechaInicioEvaluaciones' => "2018-11-12 00:00:00",
      'fechaFinEvaluaciones' => "2018-11-18 23:59:00",
      'idAsentamiento' => null,
      'idZona' => null,
      'linkFormularioEvaluacion' => null,
      'statusMailSeguimiento' => null,
      'mailSeguimiento' => null,
      'destacada' => null,
      'EnviarMailPago' => null,
      'MailPago' => null,
      'CostoConMoneda' => null,
      'LinkPago' => null,
      'PuntosEnvioUL' => null,
      'CaptacionesUL' => null,
      'idPais' => factory(App\Pais::class)->create(),
      'idProvincia' => factory(App\Provincia::class)->create(),
      'idLocalidad' => factory(App\Localidad::class)->create(),
      'idCoordinador' => factory(App\Persona::class)->create(),
      'beca' => null,
      'montoMin' => "100.00",
      'montoMax' => "0.00"
        //
    ];
});

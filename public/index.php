<?php
require __DIR__ . '/../vendor/autoload.php';
//instanciar
$objmiAuto=new App\Http\Auto;
$objtuAuto=new \App\Http\Auto;


// asignar valores a los objetos
$objmiAuto ->Color="blanco";
$objmiAuto ->modelo="camioneta";
$objmiAuto ->año="1999";
$objmiAuto ->funcional=false;

$objtuAuto ->Color="rojo";
$objtuAuto ->modelo="automovil";
$objtuAuto ->año="2022";
$objtuAuto ->funcional=true;
// llamar a los metodos
$objmiAuto-> mostrar();
$objtuAuto-> mostrar();

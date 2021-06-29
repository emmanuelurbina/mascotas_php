<?php
date_default_timezone_set('US/Central');
require_once './animal.php';

$animal = new Animal();

$animal->name = 'Thor';
$animal->specie = 'Gato';
$animal->breed = 'Gato';
$animal->genre = 'Macho';
$animal->color = 'Atigrado';
$animal->age = 4;

//$animal->create();

$results = $animal->get_all();
echo json_encode($results);
$animal->id = 2;
$animal->name = 'Salem';
$animal->update();



$results = $animal->get_all();
echo json_encode($results);

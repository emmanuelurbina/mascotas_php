<?php
date_default_timezone_set('US/Central');
require_once './animal.php';
require_once './user.php';
require_once './adoption.php';



$adoption= new Adoption();
$result = $adoption->get_by_id(1);
$animal = new Animal();
$user = new User();
$idUser = 0;
$idAnimal = 0;

echo json_encode($result);
echo "<br>";
/** data adoption */
foreach($result as $value){
  $idAnimal = $value->idAnimal;
  $idUser = $value->idUser;
}

echo json_encode($user->get_by_id($idUser));
echo "<br>";
echo "<br>";
echo json_encode($animal->get_by_id($idAnimal));


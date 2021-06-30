<?php
require_once "model/animal.php";

class AnimalController
{
  private $model;
  public function __construct()
  {
    $this->model = new Animal();
  }
  public function index()
  {
    require_once "view/animal.php";
  }
  public function show_by_id()
  {
    $animal = new Animal();
    if (isset($_REQUEST['id'])) {
      $animal = $this->model->get_by_id($_REQUEST['id']);
    }
    require_once "view/animal_form.php";
  }

  public function save()
  {
    $animal = new Animal();
    $animal->id = $_REQUEST['id'];
    $animal->name = $_REQUEST['name'];
    $animal->specie = $_REQUEST['specie'];
    $animal->breed = $_REQUEST['breed'];
    $animal->genre = $_REQUEST['genre'];
    $animal->color = $_REQUEST['color'];
    $animal->age = $_REQUEST['age'];

    if($animal->id > 0 ) {
      $animal->update();
    } else {
      $animal->create();
    }
    header('Location: index.php');
  }

  public function quit()
  {
    $this->model->delete($_REQUEST['id']);
    header('Location: index.php');
  }
}

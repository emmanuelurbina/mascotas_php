<?php
require_once 'core/crud.php';

class Animal extends Crud
{
  public $id;
  public $name;
  public $specie;
  public $breed;
  public $genre;
  public $color;
  public $age;
  const TABLE = 'animal';
  private $pdo;
  public function __construct()
  {
    parent::__construct(self::TABLE);
    $this->pdo = parent::connect();
  }


  public function create()
  {
    try {
      //code...
      $stm = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (name, specie, breed, genre, color, age) VALUES (?,?,?,?,?,?)");
      $stm->execute(array(
        $this->name,
        $this->specie,
        $this->breed,
        $this->genre,
        $this->color,
        $this->age
      ));
    } catch (PDOException $e) {
      //throw $e;
      echo $e->getMessage();
    }
  }
  public function update()
  {
    try {
      //code...
      $stm = $this->pdo->prepare("UPDATE " . self::TABLE . " SET name=?, specie=?, breed=?, genre=?, color=?, age=? WHERE id=?");
      $stm->execute(array(
        $this->name,
        $this->specie,
        $this->breed,
        $this->genre,
        $this->color,
        $this->age,
        $this->id
      ));
    } catch (PDOException $e) {
      //throw $e;
      echo $e->getMessage();
    }
  }
}

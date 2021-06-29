<?php
require_once './crud.php';

class Adoption extends Crud
{
  public $id;
  public $idAnimal;
  public $idUser;
  public $dateAdoption;
  public $reason;
  const TABLE = 'adoption';
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
      $stm = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (idAnimal, idUser, dateAdoption, reason) values(?,?,?,?)");
      $stm->execute(array(
        $this->idAnimal,
        $this->idUser,
        $this->dateAdoption,
        $this->reason
      ));
    } catch (\PDOException $e) {
      //throw $e;
      echo $e->getMessage();
    }
  }
  public function update()
  {
    try {
      //code...
      $stm = $this->pdo->prepare("UPDATE " . self::TABLE . " idAnimal=?, idUser=?, dateAdoption=?, reason=? WHERE id=?");
      $stm->execute(array(
        $this->idAnimal,
        $this->idUser,
        $this->dateAdoption,
        $this->reason,
        $this->id
      ));
    } catch (\PDOException $e) {
      //throw $e;
      echo $e->getMessage();
    }
  }
}

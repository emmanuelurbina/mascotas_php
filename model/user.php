<?php
require_once 'core/crud.php';
class User extends Crud
{
  private $pdo;
  public $id;
  public $name;
  public $lastName;
  public $address;
  public $phone;
  public $sex;
  public $age;
  const TABLE = 'user';
  public function __construct()
  {
    parent::__construct(self::TABLE);
    $this->pdo = parent::connect();
  }
  public function create()
  {
    try {
      //code...
      $stm = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (name, lastName, address, phone, sex, age) VALUES (?,?,?,?,?,?)");
      $stm->execute(array(
        $this->name,
        $this->lastName,
        $this->address,
        $this->phone,
        $this->sex,
        $this->age));
    } catch (\PDOException $e) {
      //throw $e;
      echo $e->getMessage();
    }
  }
  public function update()
  {
    try {
      //code...
      $stm = $this->pdo->prepare("UPDATE " . self::TABLE . " SET name=?, lastName=?, address=?, phone=?, sex=?, age=? WHERE id=?");
      $stm->execute(array(
        $this->name,
        $this->lastName,
        $this->address,
        $this->phone,
        $this->sex,
        $this->age,
        $this->id
      ));
    } catch (\PDOException $e) {
      //throw $e;
      echo $e->getMessage();
    }
  }
}

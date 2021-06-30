<?php
require_once "connection.php";
abstract class Crud extends Connection
{
  private $table;
  private $pdo;
  public function __construct($table)
  {
    $this->table = $table;
    $this->pdo = parent::connect();
  }

  public function get_all(){
    /** RETORNA TODOS LOS ELEMENTOS DE LA TABLAS */
    try {
      //code...
      $stm = $this->pdo->prepare("SELECT * FROM $this->table");
      $stm->execute();
      return $stm->fetchall(PDO::FETCH_OBJ);
    } catch (\PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function get_by_id($id){
    /** RETORNA EL ELEMENTO QUE HAGA MATCH CON @id */
    try {
      //code...
      $stm = $this->pdo->prepare("SELECT * FROM $this->table where id=? ");
      $stm->execute(array($id));
      return $stm->fetch(PDO::FETCH_OBJ);
    } catch (\PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function delete($id)
  {
    /** ELIMINA EL ELEMENTO QUE HAGA MATCH CON @id */
    try {
      //code...
      $stm = $this->pdo->prepare("DELETE FROM $this->table WHERE id=? ");
      $stm->execute(array($id));
    } catch (\PDOException $e) {
      echo $e->getMessage();
    }
  }

  abstract function create();
  abstract function update();
}

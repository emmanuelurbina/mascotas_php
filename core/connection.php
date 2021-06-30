<?php

class Connection
{

  private $driver = "mysql";
  private $host = 'localhost';
  private $user = 'root';
  private $password = '';
  private $dbName = 'sunny_cf';
  private $charset = "utf8";
  protected function connect()
  {
    try {
      $pdo = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbName};charset={$this->charset}", $this->user, $this->password);

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (\PDOException $e) {
      echo $e->getMessage();
    }
  }
}

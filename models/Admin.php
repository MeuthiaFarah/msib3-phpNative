<?php
class Admin{
  // member 1, variable
  private $connection;
  // member 2, konstruktor untuk koneksi db
  public function __construct(){
    global $dbh; // instance object dari connection.php
    $this->connection = $dbh;
  }
  // member 3, method CRUD
  public function dataAdmin(){
    $sql = "SELECT * FROM admin"; //query SQL biasa
    // $data_barang = $dbh->query($sql); 

    // memakai PDO
    $prepData = $this->connection->prepare($sql);
    $prepData->execute();
    $data_admin = $prepData->fetchAll();
    return $data_admin;
  }
} 
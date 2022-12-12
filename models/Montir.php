<?php
class Montir{
  // member 1, variable
  private $connection;
  // member 2, konstruktor untuk koneksi db
  public function __construct(){
    global $dbh; // instance object dari connection.php
    $this->connection = $dbh;
  }
  // member 3, method CRUD
  public function dataMontir(){
    $sql = "SELECT * FROM montir"; //query SQL biasa
    // $data_barang = $dbh->query($sql); 

    // memakai PDO
    $prepData = $this->connection->prepare($sql);
    $prepData->execute();
    $data_montir = $prepData->fetchAll();
    return $data_montir;
  }

  public function getMontir($id){
    $sql = "SELECT * FROM montir WHERE id = ?"; //query SQL biasa
    // $data_barang = $dbh->query($sql); 

    // memakai PDO
    $prepData = $this->connection->prepare($sql);
    $prepData->execute([$id]);
    $data_montir = $prepData->fetch();
    return $data_montir;
  }
} 
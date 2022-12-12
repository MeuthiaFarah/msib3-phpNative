<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=dbbengkel;host=127.0.0.1';
$user = 'root';
$password = '';

try{
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo 'Database Connection Successful';
  }catch(PDOException $e){
      echo $e->getMessage();
  }  
?>
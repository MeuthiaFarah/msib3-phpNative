<?php
// untuk koneksi db
include_once 'connection.php';
// untuk models
include_once 'models/Barang.php';
include_once 'models/Admin.php';
include_once 'models/Montir.php';

// template
include_once 'header.php';
include_once 'navbar.php';
// tangkap request menu di url (index.php?hal=...)
if(!empty($_REQUEST['hal'])){
  include_once $_REQUEST['hal'].'.php';
}
else{
  include_once 'home.php';
}

include_once 'footer.php';


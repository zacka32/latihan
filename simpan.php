<?php
  include "koneksi.php";

 $sql = $db->prepare("UPDATE data_sample SET nama LIKE '%$search%' ORDER BY nama ASC");
    $sql->execute();
 
?>
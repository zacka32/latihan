<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
 daftarPropinsi($_GET['search']);
}


function daftarPropinsi($search){
  include "koneksi.php";
// ini hanya mencari kata nama, sekarang kita tambahkan pakai pekerjaan oke
 $sql = $db->prepare("SELECT * FROM data_sample WHERE (nama LIKE '%$search%' or pekerjaan LIKE '%$search%')  ORDER BY nama ASC"); 
    $sql->execute();
 
 if ($sql->fetchColumn() > 0) {
     $list = array();
     $key=0;
     while($row=$sql->fetch()) {
         $gabungan = $row['nama']." - ".$row['pekerjaan'];
         $list[$key]['id'] = $row['id_auto'];
         $list[$key]['text'] = $gabungan;

     $key++;
     }
     echo json_encode($list);
 } else {
     echo "hasil kosong";
 }
}
 
?>
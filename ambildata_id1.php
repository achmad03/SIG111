<?php
include "koneksi.php";
$Q = mysqli_query($koneksi,"SELECT * FROM daftar_apotek
INNER JOIN persediaan_obat ON(daftar_apotek.id_apotek=persediaan_obat.id_apotek) 
WHERE persediaan_obat.jumlah_persediaan>0")or die(mysql_error());
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));     
      echo $data;        
}

?>
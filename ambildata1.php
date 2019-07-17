<?php
include "koneksi.php";
$Q = mysqli_query($koneksi,"SELECT DISTINCT nama_obat,dosis_obat,satuan,harga FROM persediaan_obat")or die(mysql_error());
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
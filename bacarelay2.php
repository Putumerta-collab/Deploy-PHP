<?php
//include koneksi
include "koneksi.php";

$sql = mysqli_query($konek, "SELECT * FROM tb_controll");
$data = mysqli_fetch_array($sql);
$relay2 = $data['relay2'];

//response balik ke nodemcu
echo $relay2; //1/0
?>
<?php
//include koneksi
include "koneksi.php";

$sql = mysqli_query($konek, "SELECT * FROM tb_controll");
$data = mysqli_fetch_array($sql);
$relay3 = $data['relay3'];

//response balik ke nodemcu
echo $relay3; //1/0
?>
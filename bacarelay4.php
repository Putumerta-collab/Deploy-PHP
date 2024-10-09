<?php
//include koneksi
include "koneksi.php";

$sql = mysqli_query($konek, "SELECT * FROM tb_controll");
$data = mysqli_fetch_array($sql);
$relay4 = $data['relay4'];

//response balik ke nodemcu
echo $relay4; //1/0
?>
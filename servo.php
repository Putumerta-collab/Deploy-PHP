<?php
//include koneksi
include "koneksi.php";

//tangkap variabel pos yang dikirim dari ajax
$pos = $_GET['pos'];
//update nilai di field servo yang ada di database
mysqli_query($konek, "UPDATE tb_controll SET servo='$pos'");
//berikan respon
echo $pos;
?>
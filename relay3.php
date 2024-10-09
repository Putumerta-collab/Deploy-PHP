<?php
//include koneksi
include "koneksi.php";


//tangkap parameter stst yang dikirim dari ajax
$stat3 = $_GET['stat'];
if ($stat3 == "ON") {
    //ubah field relay menjadi 1
    mysqli_query($konek, "UPDATE tb_controll SET relay3=1");
    //berikan respon
    echo "OFF";
} else {
    //ubah field relay menjadi 1
    mysqli_query($konek, "UPDATE tb_controll SET relay3=0");
    //berikan respon
    echo "ON";
}
?>
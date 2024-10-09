<?php
//include koneksi
include "koneksi.php";


//tangkap parameter stst yang dikirim dari ajax
$stat4 = $_GET['stat'];
if ($stat4 == "ON") {
    //ubah field relay menjadi 1
    mysqli_query($konek, "UPDATE tb_controll SET relay4=1");
    //berikan respon
    echo "OFF";
} else {
    //ubah field relay menjadi 1
    mysqli_query($konek, "UPDATE tb_controll SET relay4=0");
    //berikan respon
    echo "ON";
}
?>
<!--baca status trakhir relay-->
<?php

//include koneksi
include "koneksi.php";

$sql = mysqli_query($konek, "SELECT * FROM tb_controll");
$data = mysqli_fetch_array($sql);
//ambil status relay
$relay = $data['relay'];
$relay2 = $data['relay2'];
$relay3 = $data['relay3'];
$relay4 = $data['relay4'];
?>
<!--akhir baca status trakhir relay-->

<!--Judul-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Smart Temple</title>

    <script type="text/javascript">
        //Relay1
        function ubahstatus(value) {
            if (value == true) value = "ON";
            else value = "OFF";
            document.getElementById('status').innerHTML = value;

            //ajak untuk merubah nilai status relay
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    //ambil respon dari web setelah berhasil merubah nilai
                    document.getElementById('status').innerHTML = xmlhttp.responseText;
                }
            }
            //execute file PHP untuk merubah nilai di database
            xmlhttp.open("GET", "relay.php?stat=" + value, true);
            //kirim data
            xmlhttp.send();
        }
        //END Relay2

        //Relay2
        function ubahstatus2(value) {
            if (value == true) value = "ON";
            else value = "OFF";
            document.getElementById('status2').innerHTML = value;

            //ajak untuk merubah nilai status relay
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status2 == 200) {
                    //ambil respon dari web setelah berhasil merubah nilai
                    document.getElementById('status2').innerHTML = xmlhttp.responseText;
                }
            }
            //execute file PHP untuk merubah nilai di database
            xmlhttp.open("GET", "relay2.php?stat=" + value, true);
            //kirim data
            xmlhttp.send();
        }
        //END Relay2

        //Relay3
        function ubahstatus3(value) {
            if (value == true) value = "ON";
            else value = "OFF";
            document.getElementById('status3').innerHTML = value;

            //ajak untuk merubah nilai status relay
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status3 == 200) {
                    //ambil respon dari web setelah berhasil merubah nilai
                    document.getElementById('status3').innerHTML = xmlhttp.responseText;
                }
            }
            //execute file PHP untuk merubah nilai di database
            xmlhttp.open("GET", "relay3.php?stat=" + value, true);
            //kirim data
            xmlhttp.send();
        }
        //END Relay3

        //Relay4
        function ubahstatus4(value) {
            if (value == true) value = "ON";
            else value = "OFF";
            document.getElementById('status4').innerHTML = value;

            //ajak untuk merubah nilai status relay
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status4 == 200) {
                    //ambil respon dari web setelah berhasil merubah nilai
                    document.getElementById('status4').innerHTML = xmlhttp.responseText;
                }
            }
            //execute file PHP untuk merubah nilai di database
            xmlhttp.open("GET", "relay4.php?stat=" + value, true);
            //kirim data
            xmlhttp.send();
        }
        //END Relay2
    </script>



</head>

<body>
    <!-- Judul -->
    <div class="container" style="text-align:center; padding-top:20px">
        <img src="img/logo header.JPG">
    </div>

    <style>
    .judul {
        font-weight: bold;
        font-family: 'Arial', sans-serif;
    }
    </style>

<div class="container text-center py-4">
    <h2 class="judul">PROTOTYPE SMART TEMPLE BERBASIS IOT DENGAN NODE  <br> MCU UNTUK MENGONTROL LAMPU DAN PENGERAS SUARA PADA PURA DESA <br> STUDI KASUS PURA DESA DESA ADAT PENGULON</h2>
</div>


    <!--Tampilan Kartu-->
    <div class="container" style="display: flex; justify-content: center; padding-top: 5px">

        <!--Controlling-->
        <!--Kartu Relay-->
        <div class="card text-black mb-3" style="width: 20rem; margin-right: 10px; margin-left: 10px">
            <div class="card-header" style="font-size:30px; text-align:center; background-color: red; color: white">
                Speaker</div>
            <div class="card-body">


                <!--Switch-->
                <div class="form-check form-switch" style="font-size:35px">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                        onchange="ubahstatus(this.checked)" <?php if ($relay == 1)
                            echo "checked"; ?>>
                    <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status">
                            <?php if ($relay == 1)
                                echo "OFF";
                            else
                                echo "ON" ?>
                            </span> </label>
                    </div>
                    <!--akhir switch-->
                </div>
            </div>
            <!--Akhir Kartu Relay-->

            <!--Kartu Relay2-->
            <div class="card text-black mb-3" style="width: 20rem; margin-right: 10px">
                <div class="card-header" style="font-size:30px; text-align:center; background-color: red; color: white">
                    Lampu 1</div>
                <div class="card-body">


                    <!--Switch-->
                    <div class="form-check form-switch" style="font-size:35px">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                            onchange="ubahstatus2(this.checked)" <?php if ($relay2 == 1)
                                echo "checked"; ?>>
                    <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status2">
                            <?php if ($relay2 == 1)
                                echo "OFF";
                            else
                                echo "ON" ?>
                            </span> </label>
                    </div>
                    <!--akhir switch-->
                </div>
            </div>
            <!--Akhir Kartu Relay2-->
        </div>
        <!--Akhir tampilan Kartu-->

        <!--Tampilan Kartu-->
        <div class="container" style="display: flex; justify-content: center; padding-top: 5px">
            <!--Kartu Relay3-->
            <div class="card text-black mb-3" style="width: 20rem; margin-right: 10px ; margin-left: 10px">
                <div class="card-header" style="font-size:30px; text-align:center; background-color: red; color: white">
                    Lampu 2</div>
                <div class="card-body">


                    <!--Switch-->
                    <div class="form-check form-switch" style="font-size:35px">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                            onchange="ubahstatus3(this.checked)" <?php if ($relay3 == 1)
                                echo "checked"; ?>>
                    <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status3">
                            <?php if ($relay3 == 1)
                                echo "OFF";
                            else
                                echo "ON" ?>
                            </span> </label>
                    </div>
                    <!--akhir switch-->
                </div>
            </div>
            <!--Akhir Kartu Relay3-->


            <!--Kartu Relay4-->
            <div class="card text-black mb-3" style="width: 20rem; margin-right: 10px">
                <div class="card-header" style="font-size:30px; text-align:center; background-color: red; color: white">
                    Lampu 3</div>
                <div class="card-body">

                    <!--Switch-->
                    <div class="form-check form-switch" style="font-size:35px">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                            onchange="ubahstatus4(this.checked)" <?php if ($relay4 == 1)
                                echo "checked"; ?>>
                    <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status4">
                            <?php if ($relay4 == 1)
                                echo "OFF";
                            else
                                echo "ON" ?>
                            </span> </label>
                    </div>
                    <!--akhir switch-->
                </div>
            </div>
            <!--Akhir Kartu Relay4-->
        </div>
        <!--Akhir tampilan Kartu-->




        <!--tampilan image-->
        <div class="container" style="text-align:center; padding-top:20px">
            <img src="img/logo footer.JPG">
        </div>
        <!-- akhir tampilan image-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    </body>

    </html>
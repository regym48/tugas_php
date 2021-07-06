<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
</head>
<body>
    <?php
        $jarak = 360;
        $spd = 90;
        $waktu = $jarak / $spd;
        $waktuM = $waktu*60;
        echo "Jarak kota A -Z = $jarak Km<br />"; 
        echo "Kecepatan Motor = $spd <br />";
        echo "Waktu Tempuh = ? <br />";
        echo "Jawaban : $waktuM Menit <br />";
    ?>
    <h3>-----------------------------------------------------------------------------</h3>
    <?php
        $tabungan = 150000;
        $bunga = 0.125;
        $x = $tabungan * $bunga;
        $total = $tabungan + $x;
        echo "Tabungan Awal = Rp. $tabungan <br />"; 
        echo "Bunga Setahun = 12.5% <br />";
        echo "Total Tabungan Setahun = ? <br />";
        echo "Jawaban : Rp. $total <br />";
    ?>
</body>
</html>
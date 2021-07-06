<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 PHP</title>
</head>
<body>
    <?php
        $jual = 7500;
        $beli = 8000;
        $untung = 300;
        $x = $beli - $jual; 
        $wedus = $x / $untung;
        echo "Harga Beli = Rp. $beli <br />"; 
        echo "Harga Jual = Rp. $jual <br />";
        echo "Keuntungan = Rp $untung <br />";
        echo "Berapa Jumlah Kambing yang dibeli? Jawaban : $wedus ekor <br />";
    ?>
    <h3>-----------------------------------------------------------------------------</h3>
    <?php
        $salur = 523;
        $pakai = 8891;
        $pemakaian = $pakai / $salur;
        echo "Jumlah Saluran = $salur <br />"; 
        echo "Jumlah Terpakai = $pakai <br />";
        echo "Rata-rata Pemakaian = ? <br />";
        echo "Jawaban : $pemakaian liter/keluarga <br />";
    ?>
</body>
</html>
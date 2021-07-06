<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
</head>
<body>
    <?php
        $hari = 36;
        $p1 = 12;
        $p2 = 24;
        $px = $p2/$p1;
        $xhari = $hari/$px;
        echo "$hari Hari - $p1 Pekerja <br />"; 
        echo "X Hari - $p2 Pekerja <br />";
        echo "X = ...? <br />";
        echo "Jawaban : <br />";
        echo "$p2 Pekerja : $p1 Pekerja = $px , X Hari = $hari : $px = $xhari Hari";
    ?>
    <h3>-----------------------------------------------------------------------------</h3>
    <?php
        $jual = 80000;
        $beli = 50000;
        $untung = $jual - $beli;
        echo "Jual = $jual <br />"; 
        echo "Beli = $beli <br />";
        echo "Keuntungan = ? <br />";
        echo "Jawaban : <br />";
        echo "Keuntungan = $jual - $beli = $untung";
    ?>
</body>
</html>
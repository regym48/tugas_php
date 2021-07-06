<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 PHP</title>
</head>
<body>
    <?php
        $garis = "=============================================== <br/>";
        $habib = 21;
        $aji = $habib+4;
        $bintan = $aji+3;
        echo "$garis";
        echo "Usia Habib = $habib <br/>";
        echo "Usia Aji = $aji <br/>";
        echo "Usia Bintan = $bintan <br/>";
        echo "$garis";
    ?>
    <?php
        $jambu = 15000;
        $kardus = 2000;
        $jualjambu = $jambu * 5 * 6;
        $jualdus = $kardus * 6;
        $x = $jualjambu+$jualdus;
        echo "$garis";
        echo "Harga Jambu = $jambu /Kg <br/>";
        echo "Harga Karkardus = $kardus /pcs <br/>";
        echo "Total Pendualan (Dus dan Jambu) = RP $x<br/>";
        echo "$garis";
    ?>
</body>
</html>
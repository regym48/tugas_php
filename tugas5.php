<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PHP</title>
</head>
<body>
    <?php
        echo "Tabel Logika ";
        echo "<table>";
        echo "</tr>";
        echo "<td>Input 1</td>";
        echo "<td>Input 2</td>";
        echo "<td>AND</td>";
        echo "<td>OR</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>false</td>";
        echo "<td>false</td>";
        echo "<td>".printf(false && false)."</td>";
        echo "<td>".printf(false || false)."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>false</td>";
        echo "<td>false</td>";
        echo "<td>".printf(false && true)."</td>";
        echo "<td>".printf(false || true)."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>false</td>";
        echo "<td>false</td>";
        echo "<td>".printf(true && false)."</td>";
        echo "<td>".printf(true || false)."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>false</td>";
        echo "<td>false</td>";
        echo "<td>".printf(true && true)."</td>";
        echo "<td>".printf(true || true)."</td>";
        echo "</tr>";
        echo "</table>";
    ?>
    <h3>-----------------------------------------------------------------------------</h3>
    <?php
        $a = "Ayo ";
        $b = "Belajar";
        $x = $a.$b;
        $c = "Bersama ";
        $d = "Niomic";
        $y = $c.$d;
         echo "<table>";
         echo "</tr>";
         echo "<td>Input 1</td>";
         echo "<td>Input 2</td>";
         echo "<td>Hasil</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td>$a</td>";
         echo "<td>$b</td>";
         echo "<td>$x</td>";
         echo "</tr>";
         echo "<tr>";
         echo "<td>$c</td>";
         echo "<td>$d</td>";
         echo "<td>$y</td>";
         echo "</tr>";
         echo "</table>";
    ?>
</body>
</html>

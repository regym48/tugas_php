<?php
    $x= 1;

    do{
        echo"<table align='left'><tr><td align='center'>";
        for($i=0;$i<=10;$i++){
            for($a=$i;$a>=0;$a--){
            print('xx');
            }
        echo"<br/>";
        }
        for($i=1;$i<=10;$i++){
            for($a=$i;$a<=10;$a++){
            print('xx');
            }
        echo"<br/>";
        }
        echo"</td></tr></table>";
        $x++;
    }while ($x <=18);
  
?>
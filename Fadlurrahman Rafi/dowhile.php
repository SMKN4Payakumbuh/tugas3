<?php
$a = (int)readline("input angka : ");
$p = (int)readline("input panjang : ");
$b= 1 ;
    do{
        $b=1;
    
        do{
        echo "*" .$b;
            $b++;
        }
        while ($b<=$a);
        echo "\n";
        $a++;
    }
    while($a<=$p);
?>
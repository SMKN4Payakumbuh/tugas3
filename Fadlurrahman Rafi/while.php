<?php
$star =(int)readline("masukkan jumlah bintang");
$a=1;
while ($a<=$star){
    $b=1;
    while ($b<=$a){
        echo "*";
        $b++;
    }
    echo "<br>";
    $a++;
}
?>
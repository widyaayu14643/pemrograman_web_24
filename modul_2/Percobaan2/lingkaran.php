<?php
include 'class_matematika.php'; 
    $math = new matematika();
    $r = 10;
    $kel_lingkaran = $math->keliling_lingkaran($r); 
    $luas_lingkaran = $math->luas_lingkaran($r); 
    echo "Menghitung Keliling dan Luas Lingkaran<br>";
    echo "Jari­-Jari : ".$r."<br>"; 
    echo "Keliling = ".$kel_lingkaran."<br>";
    echo "Luas = ".$luas_lingkaran;
?>
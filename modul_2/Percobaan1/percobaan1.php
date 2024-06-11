<?php
class matematika{ 
     function tambah($a,$b){
          $c = $a + $b;
          return $c;
     }
     function kuadrat($x){
          return $x * $x;
     }
     function keliling_lingkaran($r){
          $kel = 2 * pi() * $r;
          return $kel;
     }
     function luas_lingkaran($r){
          $luas = pi() * pow($r, 2);
          return $luas;
     }     
}
$math = new matematika();
$r = 10;
$kel_lingkaran = $math->keliling_lingkaran($r); 
$luas_lingkaran = $math->luas_lingkaran($r); 
echo "Menghitung Keliling dan Luas Lingkaran"; 
echo "<br>Jari-Jari : ".$r."<br>"; 
echo "Keliling = ".$kel_lingkaran."<br>"; 
echo "Luas = ".$luas_lingkaran;
?>
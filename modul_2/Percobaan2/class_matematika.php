<?php
class matematika{ 
     public $pi = 3.14;
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
?>
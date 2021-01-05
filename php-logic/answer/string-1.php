<?php
$input = "smkn 2 surabaya";

//panjang string $input
$length = strlen($input);

//buat var $rev berisi panjang input yg dikurangi -1(untuk menyesuaikan index);
//jika $rev >= 0, maka..; $rev decrement
for($rev = $length-1; $rev >= 0; $rev--){
    //echo $input dengan index $rev yg telah diitung mundur
    echo $input[$rev];
}

?>
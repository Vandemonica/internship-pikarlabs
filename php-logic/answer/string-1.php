<?php
$input = "smkn 2 surabaya";


$result = null;


//panjang string $input
$length = strlen($input);

//buat var $rev berisi panjang input yg dikurangi -1(untuk menyesuaikan index);
//jika $rev >= 0, maka..; $rev decrement
for($rev = $length-1; $rev >= 0; $rev--){
    //echo $input dengan index $rev yg telah diitung mundur
    $result .= $input[$rev];
}


echo $result;

?>
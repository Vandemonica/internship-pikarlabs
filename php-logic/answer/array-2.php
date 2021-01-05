<?php
$input = [1, 3, 2, 9, 4];

//count dikurangi -1 agar menyesuaikan index array yg berawal dari 0
$len = count($input) - 1;

//lokalisasi $len sebagai $i; jika $i tidak sama dengan -1; maka $i decrement
for($i = $len; $i != -1; $i--){
    //echo $input dengan $i sebagai indexnya
    echo($input[$i]);
    echo "<br>";
}
?>
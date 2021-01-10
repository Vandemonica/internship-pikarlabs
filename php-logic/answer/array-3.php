<?php
$input = [1, 3, 2, 9, 4];
$cari = 2;



$i = 0;
//untuk setiap $input sebagai $key dan ambil value dari key
foreach($input as $key => $val){
    $len = count($input);

    //jika $val(nilai didalam $i) == $cari maka..
    if($val == $cari){
        //echo $key(index)
        $pesan = "Index ke $key";
    }
    elseif($val != $cari){
        $i++;
        if($i == $len){
            $pesan = "Data tidak ada dalam array";
        }
    }
}

echo $pesan;
?>
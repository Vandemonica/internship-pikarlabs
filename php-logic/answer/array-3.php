<?php
$input = [1, 3, 2, 9, 4];
$cari = 2;


//untuk setiap $input sebagai $i dan ambil value dari key $i
foreach($input as $i => $val){
    //jika $val(nilai didalam $i) == $cari maka..
    if($val == $cari){
        //echo $i(keynya/index)
        echo "Index ke $i";
    }
}
?>
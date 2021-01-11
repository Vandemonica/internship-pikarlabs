<?php
$input = [1, 3, 2, 9, 4];
$cari = 3;


function CariInput($jarum){
    global $input;
    $i = null;

    //untuk setiap $input sebagai $key dan ambil value dari key
    foreach($input as $key => $val){
        //jika $val(nilai didalam $i) == $cari maka..
        if($val == $jarum){
            //echo $key(index)
            $i = $key;
        }
    }

    if( isset($i) ){
        echo "index ke $i";
    }
    else{
        echo "Data tidak ditemukan";
    }
}


CariInput($cari);
echo "<br><br>";
CariInput(18);
?>
<<<<<<< HEAD
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
=======
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
>>>>>>> 33b981d5c79213919084d5a10168e970ed4a2203
?>
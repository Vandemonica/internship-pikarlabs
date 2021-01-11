<?php
$input = "renaldy";
$penanda = "/";

$input2 = "renaldy dan sahabat";
$penanda2 = "/";

$resultOne = null;
$resultTwo = null;


//panjang input yg dikurangi -1(untuk menyesuaikan index array yg dimulai dari 0)
$len = strlen($input)-1;
//deklarasi $slasher = 0; jika $slasher <= $len, maka..; $slasher diincrementkan
for($slasher = 0; $slasher <= $len; $slasher++){
    //jika masih lebih kecil $slasher daripada $len, maka..
    if($slasher < $len){
        //echo $input dengan index $slasher dan digabung dengan $penanda
        $resultOne .= $input[$slasher].$penanda;
    }
    //selain dari itu($slasher sama dengan atau lebih besar $len), maka..
    else{
        //echo $input dengan index $slasher saja(tanpa $penanda)
        $resultOne .= $input[$slasher];
    }
}

//kode disini sama kecuali satu baris ini yakni..
//buat var $noSpace dengan function str_replace
//ganti spasi(parameter 1) dengan kosong(parameter 2) kemudian masukkan string yg diseleksi(parameter 3)
$noSpace = str_replace(" ", "", $input2);
$len2 = strlen($noSpace)-1;

for($slasher = 0; $slasher <= $len2; $slasher++){
    if($slasher < $len2){
        $resultTwo .= $noSpace[$slasher].$penanda2;
    }
    else{
        $resultTwo .= $noSpace[$slasher];
    }
}


echo $resultOne;
echo "<br>";
echo $resultTwo;

?>
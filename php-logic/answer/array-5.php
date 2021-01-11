<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ]
];

function CariSiswa($objek, $cari){
    //deklarasi
    global $input;
    $i = null;

    //untuk setiap $input sebagai $i dan ambil value dari $i sebagai $val
    foreach($input as $key => $val){
        if($val[$objek] == $cari){
            $i = $key;
        }
    }

    echo "cari siswa \"$objek: $cari\"";
    if( isset($i) ){
        echo "<br>";
        echo "index ke $i";
        echo "<br>";
        echo 'id = '. $input[$i]['id'] .", nama = ". $input[$i]['nama'];
    }
    else{   
        echo "<br>";
        echo "Data tidak ditemukan";
    }
}


CariSiswa('id', 287);
echo "<br><br>";
CariSiswa('nama', 'rahman');

?>
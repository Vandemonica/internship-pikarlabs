<<<<<<< HEAD
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
=======
<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ]
  ];

function CariObjek($array, $key, $cari){
    //deklarasi
    $terminate = false;
    $len = count($array);
    $x = 0;

    //untuk setiap $input sebagai $i dan ambil valuenya
    foreach($array as $i => $val){
        //increment
        $x++;

        //jika $val dengan index $carikey == $cariValue, maka..
        if($val[$key] == $cari){
            echo "Cari objek \"$key: $cari\" <br>";
            echo "Index ke $i <br>";
            echo "id = " . $val['id'] . ", nama = " . $val['nama'];
            break;
        }
        elseif($x == $len){
            $terminate = true;
        }
    }

    if($terminate == true){
        echo "Cari objek \"$key: $cari\" <br>";
        echo "Tidak ada data yang cocok";
    }
}

CariObjek($input, "nama", "fakhri");
echo "<br><br>";
CariObjek($input, "nama", "rahman");

>>>>>>> 33b981d5c79213919084d5a10168e970ed4a2203
?>
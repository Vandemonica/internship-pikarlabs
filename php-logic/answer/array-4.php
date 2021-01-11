<<<<<<< HEAD
<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ]
];

function CariSiswa($cari){
    //deklarasi
    global $input;
    $i = null;

    //untuk setiap $input sebagai $i dan ambil value dari $i sebagai $val
    foreach($input as $key => $val){
        if($val['id'] == $cari){
            $i = $key;
        }
    }

    echo "cari siswa \"$cari\" ";
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


CariSiswa(423);
echo "<br><br>";
CariSiswa('ivan');
=======
<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ]
];

function CariSiswa($array, $cari){
    //deklarasi
    $terminate = false;
    $len = count($array);
    $x = 0;

    //untuk setiap $input sebagai $i dan ambil value dari $i sebagai $val
    foreach($array as $i => $val){
        //increment untuk perbandingan
        $x++;

        //jika value index id == $cari, maka..
        if($val['id'] == $cari){
            echo "Index ke $i <br>";
            echo "id = " . $val['id'] . ", nama = " . $val['nama'];
            break;
        }
        //jika increment == jumlah array(habis isi arraynya)
        elseif($x == $len){
            $terminate = true;
        }

    }

    if($terminate == true){
        echo "Tidak ada data yang cocok";
    }
}


CariSiswa($input, 122);
echo "<br><br>";
CariSiswa($input, 'ivan');
>>>>>>> 33b981d5c79213919084d5a10168e970ed4a2203
?>
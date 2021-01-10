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

?>
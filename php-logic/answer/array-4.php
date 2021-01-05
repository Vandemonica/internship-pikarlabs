<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ]
];
$cari = '122';

//untuk setiap $input sebagai $i dan ambil value dari $i sebagai $val
foreach($input as $i => $val){
    //jika value index id/nama == $cari, maka..
    if($val['id'] == $cari || $val['nama'] == $cari){
        echo "Index ke $i <br>";
        echo "id = " . $val['id'] . ", nama = " . $val['nama'];
    }
}
?>
<?php
$input = [
    [ 'id' => 122, 'nama' => 'rama' ],
    [ 'id' => 287, 'nama' => 'renaldy' ],
    [ 'id' => 423, 'nama' => 'fakhri' ]
  ];
  $cariKey = 'nama';
  $cariValue = 'fakhri';

//untuk setiap $input sebagai $i dan ambil valuenya
foreach($input as $i => $val){
    //jika $val dengan index $carikey == $cariValue, maka..
    if($val[$cariKey] == $cariValue){
        echo "Index ke $i <br>";
        echo "id = " . $val['id'] . ", nama = " . $val['nama'];
    }
}
?>
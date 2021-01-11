<?php
function TampilkanBio($array, $get){
    $i = null;

    foreach($array as $key => $val){
        if($val["id"] == $get){
            $i = $key;
        }
    }

    return $i;
}



function TampilkanTabel($array){
    foreach($array as $v){
        echo "<tr>";
        echo "<td>".$v['id']."</td>";
        echo "<td>".$v['nama']."</td>";
        echo "<td>".$v['asal']."</td>";
        echo "<td> <a href=?id=" .$v['id']. "> profil </a> </td>";
        echo "</tr>";
    }
}




function PencarianParsial($jarum, $tumpukanJerami){
  //deklarasi
  $result = [];

  //var handling
    if( empty(trim($jarum)) ){
        $jarum = " ";
        TampilkanTabel($tumpukanJerami);
    }

    //loop array dari parameter
    foreach($tumpukanJerami as $val){
        if( strpos($val['id'], $jarum) !== false ){
            array_push($result, $val);
        }
    }
      

    //jika id/nama/asal dari tumpukan jerami cocok dengan jarum(ditemukan menggunakan function strpos), maka..
    if( !empty($result) ){
        TampilkanTabel($result);
    }
    else{
        echo "<tr>";
        echo "<td colspan='4' class='data'>";
        echo "Tidak ada data yg cocok";
        echo "</td>";
        echo "</tr>";
    }

}


function HistoriSearch($getData){
    echo "<div class='search-Bar'>";
    echo "<p>";
    echo "Mencari siswa dengan ID: \"$getData\"";
    echo "</p>";
    echo "</div>";
}

?>
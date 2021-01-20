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



function PencarianParsial($jarum, $tumpukanJerami){
  //deklarasi
  $result = [];

  //var handling
    if( empty(trim($jarum)) ){
        return $tumpukanJerami;
    }

    //loop array dari parameter
    foreach($tumpukanJerami as $val){
        if( strpos($val['id'], $jarum) !== false ){
            array_push($result, $val);
        }
    }

    return $result;
}

?>
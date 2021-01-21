<?php
date_default_timezone_set('Asia/Jakarta');


if(isset($_POST['email'])){
    $kepada = "ivanxirko1987@gmail.com";
    $dari = $_POST['dari'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];

    $header = 'From: '.$dari;

    if( empty(trim($dari)) || empty(trim($subjek)) || empty(trim($pesan)) ){
        $_SESSION['mail'] = false;
        include "components/mail.php";
    }
    else{
        $_SESSION['mail'] = true;
        mail($kepada, $subjek, $pesan, $header);
        include "components/mail.php";
    }
}

function GetPortfolio($data, $id){
    $result = [];

    foreach($data as $key => $v){
        if($id == $key){
            array_push($result, $v);
        }
    }
    return $result;
}


function GetGaleriContent($main, $extra){
    $result = [];

    array_push($result, $main);
    $result = array_merge($result, $extra);

    return $result;
}


function GetTime(){
    $time = date('H');

    if($time < 12){
        $result = "Good morning";
    }
    elseif($time < 15){
        $result = "Good afternoon";
    }
    elseif($time < 19){
        $result = "Good evening";
    }
    else{
        $result = "Good night";
    }

    return $result;
}

?>
<?php

if(!isset($_SESSION['mail'])){
    $_SESSION['mail'] = 0;
}

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

?>
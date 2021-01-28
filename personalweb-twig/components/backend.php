<?php
date_default_timezone_set('Asia/Jakarta');


if(isset($_POST['email'])){
  $kepada = "ivanxirko1987@gmail.com";
  $dari = $_POST['dari'];
  $subjek = $_POST['subjek'];
  $pesan = $_POST['pesan'];

  $header = 'From: '.$dari;

  if( empty(trim($dari)) || empty(trim($subjek)) || empty(trim($pesan)) ){
    header("location:?mail=false");
  }
  else{
    header("location:?mail=true");
    mail($kepada, $subjek, $pesan, $header);
  }
}

function GetPortfolio($data, $id){
    $result = [];

    if($id == null){
      return false;
    }

    foreach($data as $key => $v){
        if($id == $key){
          $result = $v;
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

    if($time <= 11 && $time > 3){
        $result = "Good morning";
    }
    elseif($time <= 15 && $time > 11){
        $result = "Good afternoon";
    }
    elseif($time <= 19 && $time > 15){
        $result = "Good evening";
    }
    else{
        $result = "Good night";
    }

    return $result;
}

function GaleriIndexer($index, $image, $caption, $result){
    $len = count($image);


    // index selain -1 digunakan jika perlu lebih dari satu pop-up galeri(contoh implementasi di v1)

    if($index == -1){
      $galeriId = 'galeri';
      $slideId = 'slide-';

      $result = [
        'index' => $index,
        'galeriId' => $galeriId, 
        'slideId' => $slideId, 
        'len' => $len, 
        'img' => $image,
        'capt' => $caption
      ];
    }
    else{
      $galeriId = 'galeri-'.$index;
      $slideId = $index.'-slide-';


      $result[] = [
            'index' => $index, 
            'galeriId' => $galeriId, 
            'slideId' => $slideId, 
            'len' => $len, 
            'img' => $image,
            'capt' => $caption
      ];
      
    }

    

    return $result;
  }

?>
<?php
include_once "fetcher.php";
include "components/data.php";
include "components/backend.php";


$mailStatus = isset($_GET['mail']) ? $_GET['mail'] : null;


$len = count($data['portfolio']);

$dataGaleri = [];

for($x=0; $x<$len; $x++){
  $image = GetGaleriContent($data['portfolio'][$x]['img'], $data['portfolio'][$x]['imgx']);
  $capt = GetGaleriContent($data['portfolio'][$x]['capt'], $data['portfolio'][$x]['captx']);

  $dataGaleri = GaleriIndexer($x, $image, $capt, $dataGaleri);
}




switch ($mailStatus) {
  case 'true':
      
    break;

  case 'false':

    break;

  default:
    echo $twig->render('v1.twig', 
     
      [
        'data' => $data,
        'galeri' => $dataGaleri
      ]
  );
    break;
}



?>
<?php
include_once "fetcher.php";
include "components/data.php";
include "components/backend.php";


$mailStatus = isset($_GET['mail']) ? $_GET['mail'] : null;


switch ($mailStatus) {
  case 'true':
      
    break;
    
  case 'false':

    break;

  default:
    echo $twig->render('v2.twig', 
      ['data' => $data]
    );
    break;
}

?>
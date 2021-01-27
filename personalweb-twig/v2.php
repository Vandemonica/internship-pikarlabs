<?php
include_once "fetcher.php";
include "components/data.php";
include "components/backend.php";


$status = isset($_GET['mail']) ? $_GET['mail'] : null;


switch ($status) {
  case 'true':
      
    break;
    
  case 'false':

    break;

  default:
    echo $twig->render('v2.twig', $data);
    break;
}

?>
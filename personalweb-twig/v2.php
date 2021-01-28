<?php
include_once "fetcher.php";
include "components/data.php";
include "components/backend.php";


$mailStatus = isset($_GET['mail']) ? $_GET['mail'] : null;
$mail = GetMailMessage($mailStatus);


echo $twig->render('v2.twig', 
  [
    'data' => $data,

    // mail
    'mail' => $mail,
  ]
)

?>
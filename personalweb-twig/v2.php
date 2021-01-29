<?php
include_once "fetcher.php";
include "components/data.php";
include "components/backend.php";


$mailStatus = isset($push) ? $push : null;
$mail = GetMailMessage($mailStatus);


echo $twig->render('v2.twig', 
  [
    'data' => $mainData,
    'navbar' => $navbarData[0],
    'mail' => $mail,
  ]
)

?>
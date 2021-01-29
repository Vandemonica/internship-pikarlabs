<?php
session_start();

include_once "fetcher.php";
include "components/data.php";
include "components/backend.php";


// mail get check
$mailStatus = isset($push) ? $push : null;



// time check(fitur extra)
if(isset($_POST['welcome'])){
  $_SESSION['nama'] = $_POST['welcome'];
}
$time = GetTime();
if(!isset($_SESSION['nama'])){
  $welcome1 = $time.'!';
  $welcome2 = "Greetings, How do you want us to refer you?";
  $nameSet = false;
}
else{
  $welcome1 = $time.' '.$_SESSION['nama'].'!';
  $welcome2 = "Hope you had a good day!";
  $nameSet = true;
}




// mail controller
$mail = GetMailMessage($mailStatus);



// Galeri controller
$len = count($mainData['portfolio']);
$dataGaleri = [];

for($x=0; $x<$len; $x++){
  $image = GetGaleriContent($mainData['portfolio'][$x]['img'], $mainData['portfolio'][$x]['imgx']);
  $capt = GetGaleriContent($mainData['portfolio'][$x]['capt'], $mainData['portfolio'][$x]['captx']);

  $dataGaleri = GaleriIndexer($x, $image, $capt, $dataGaleri);
}


// Main rendering controller + mail check
echo $twig->render('v1.twig', 
  [
    'data' => $mainData,
    'galeri' => $dataGaleri,
    'navbar' => $navbarData[0],

    // mail
    'mail' => $mail,

    // extra
    'welcome1' => $welcome1,
    'welcome2' => $welcome2,
    'nameSet' => $nameSet,
  ]
)


?>
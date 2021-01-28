<?php
include_once "fetcher.php";
include "components/data.php";
include "components/backend.php";


$id = $_GET['id'];
$dataPortfolio = GetPortfolio($data['portfolio'], $id);
$image = GetGaleriContent($data['portfolio'][$id]['img'], $data['portfolio'][$id]['imgx']);
$capt = GetGaleriContent($data['portfolio'][$id]['capt'], $data['portfolio'][$id]['captx']);


if( empty($dataPortfolio) ){
  header("refresh:2; url=v2.php");
}


$dataGaleri = GaleriIndexer(-1, $image, $capt, $result = []);



echo $twig->render('portfolio.twig', [
  'portfolio' => $dataPortfolio,
  'id' => $id,
  'galeri' => $dataGaleri,
]);
?>
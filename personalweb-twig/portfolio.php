<?php
include_once "fetcher.php";
include "components/data.php";
include "components/backend.php";


@$id = $_GET['id'];
@$dataPortfolio = GetPortfolio($mainData['portfolio'], $id);
@$image = GetGaleriContent($mainData['portfolio'][$id]['img'], $mainData['portfolio'][$id]['imgx']);
@$capt = GetGaleriContent($mainData['portfolio'][$id]['capt'], $mainData['portfolio'][$id]['captx']);



if( empty($dataPortfolio) ){
  header("refresh:2; url=v2.php");
}


$dataGaleri = GaleriIndexer(-1, $image, $capt, $result = []);



echo $twig->render('portfolio.twig', [
  'navbar' => $navbarData[1],
  'portfolio' => $dataPortfolio,
  'id' => $id,
  'galeri' => $dataGaleri,
]);
?>
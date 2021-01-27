<?php
include_once "fetcher.php";
include "components/data.php";
include "components/backend.php";


$id = $_GET['id'];
$dataPortfolio = GetPortfolio($data['portfolio'], $id);


if( empty($dataPortfolio) ){
  header("refresh:2; url=v2.php");
}


echo $twig->render('portfolio.twig', [
  'portfolio' => $dataPortfolio,
  'id' => $id,
]);
?>
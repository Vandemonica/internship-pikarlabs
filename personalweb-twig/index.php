<?php
include_once "fetcher.php";
include "components/data.php";

echo $twig->render('index.twig', [
  'data' => $indexData,
  'navbar' => $navbarData[1],
]);
?>
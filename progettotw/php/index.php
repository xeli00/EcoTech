<?php
require_once("bootstrap.php");

$templateParams["titolo"] = "Eco-Tech | Home";
$templateParams["hero"] = "hero.php";
$templateParams["contenuto"] = "info-section.php";

$templateParams["quantita"] = $dbh->getQuantitaProduct($idcliente);
require("template/base.php");
?>

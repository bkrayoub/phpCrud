<?php
include '../data-access/promotion.php';

if (isset($_GET["deleteId"])) {

    $delete_promo = new Promotion(null ,null);
    $promotion = new Services();
    $promotion->setId($_GET["deleteId"]);
    $delete_promo->delete($promotion->getId());
    header('Location: ../presentation/index.php');
}

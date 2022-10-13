<?php 
    include '../data-access/database/promotion.php';
    
    if(isset($_POST["add"])){
        $newObj = new Promotion(NULL,$_POST['addInput']);
        $newObj->insert();
    header('location: ../presentation/index.php');
    }

    if(isset($_POST['']))


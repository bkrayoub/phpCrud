<?php 
    include '../data-access/database/promotion.php';
    
    if(isset($_POST["add"])){
        $newObj = new Promotion(NULL,$_POST['addInput']);
        $newObj->insert();
    header('localhost/phpCrud/presentation/index.php');
    }


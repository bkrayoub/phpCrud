<?php 
    include '../data-access/promotion.php';
    
    if(isset($_POST["add"])){
        $newObj = new Promotion(NULL,$_POST['addInput']);
        $newObj->insert();
        header('location: ../presentation/index.php');
    }

    if(isset($_POST['dltBtn'])){
        $obj = new promotion();
        $prom = new Services();
        $prom->set_id($_GET["delete_id"]);
        $obj->delete($prom);
        header("location: ../presentation/index.php");
    }



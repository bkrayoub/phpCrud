<?php
    include '../data-access/promotion.php';
    if(isset($_POST["update_prom"])){
        $obj = new Promotion(null,null);
        $prom = new Services(null,null);
        $prom->setId($_POST["id"]);
        $prom->set_name($_POST["submitNewName"]);
        $obj->update($prom);
    }
    header("location: ../presentation/index.php");
    ?>

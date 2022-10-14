<?php
include 'myConnection.php';
include '../entity/promotion.php';

class PromotionManager extends Connection{
///add promotion
    public function addPromo($promotion){
        $name = $promotion->getName();
        $sql = "INSERT INTO promotion(name) VALUES ('$name')";
        mysqli_query($this->connect(),$sql);
    }


}
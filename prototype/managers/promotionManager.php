<?php
include 'myConnection.php';
include 'promotion';

class promotionManager extends Connection{
    public function insertToDb($promo){
        $name = $promo->getNme();
        $insertRow = 'INSERT INTO promotion(name) VALUES ("$name") ';
    }
}
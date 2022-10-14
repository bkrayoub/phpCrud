<?php
include '../manager/promotionManager.php';

$promoManager = new PromotionManager();
if(!empty($_POST)){
    $promo = new Promotion();
    $promo->setName($_POST['name']);
    $promoManager->addPromo($promo);
    echo '<h1>added done!</h1>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <input type="text" name="name">
    <input type="submit" value="add" name="addName">
</form>
</body>
</html>
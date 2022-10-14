<?php

require_once "../business/promotionBll.php";
    
    $promotionBal = new promotionBll();

if(!empty($_POST)){
	$promotion = new promotion(null, null);
	$promotion->setName($_POST['name']);
	$promotionBal->addPromotion($promotion);
	
	// redirect to index.php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
	<title>Add promotion</title>
</head>
<body>
	<header>
		<h1>Add promotion</h1>
	</header>
<form action="" method="POST">
Promotion name: <input type="text" name="name" >                                                          
   
<button type="submit">Send</button>
</form>
</body>
</html>

<?php
include '../Manager/PromotionManager.php';
$PromotionManager =new PromotionManager();
if(!empty($_POST)){
	$Promotion =new Promotion();
	$Promotion->setnom_prom($_POST['nom_prom']);
	$PromotionManager->ADDPromotion($Promotion);

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/normalize.css">
	<title>Ajouter promotion</title>
</head>
<body>
	<header>
		<h1>Ajouter promotion</h1>

		<a  href="../Presentation/index.php">RETOUR</a>
	</header>
<form action="" method="POST">
Nom de promotion: <input type="text" name="nom_prom" >                                                          
   
<button type="submit">Envoyer</button>
</form>
</body>
</html>
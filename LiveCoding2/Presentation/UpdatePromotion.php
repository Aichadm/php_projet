<?php
 include '../Manager/PromotionManager.php';
 $PromotionManager=new PromotionManager();
 if(isset($_GET['id'])){
	$id=$_GET['id'];
	$Promotion=$PromotionManager->getPromotionById($id);


 }
 if(isset($_POST['id'])){
	$id=$_POST['id'];
	$nom_prom=$_POST['nom_prom'];

  $PromotionManager->UpdatePromotion($id,$nom_prom);
  header('location: index.php');
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Promotions</title>
</head>
<body>
	<div>
		<h3>Modifier promotion :</h3>
		<form method="POST">
            <input type="hidden" id='id' name='id' value=<?php echo $Promotion->getid() ?>>
			<div>
				<label for="inputFirstName">Nom de la promotion</label>
				<input type="text" required value=<?= $Promotion->getnom_prom() ?>  name="nom_prom" placeholder="promotion name">
			</div>
			<div>
				<button type="submit" name="update" value="update">Envoyer</button>
				<a href="index.php">Form</a>
			</div>
			</div>
		</form>
	</div>
</body>
</html>
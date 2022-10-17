i<?php
 include "../Managers/PromotionManager.php";

 $PromotionManager=new PromotionManager();
 if(!empty($_POST))
 {
    $Promotion =new Promotion();
    $Promotion->setnom_prom($_POST['nom_prom']) ;
    $PromotionManager->addPromotion($Promotion);
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet php</title>
</head>
<body>
    <form  action="index.php" method="POST">
        <fieldset>
        <legend>Promotion</legend>
      
   
<label > Promotion</label><input type="text "  placeholder=" Promotion ici" name="nom_prom"><br>
<input  type="submit" value="Ajouter"  >
</fieldset>
</form>
</body>
</html>
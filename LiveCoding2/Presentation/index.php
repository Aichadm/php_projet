
<?php
include '../Manager/PromotionManager.php';
$PromotionManager =new PromotionManager();
    $data=$PromotionManager->getAllPromotions();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    
    <title>Promotion management</title>
  
    
</head>
<body>
<fieldset>
    <legend>GESTION PROMOTION</legend>
    <div>
        
    <a href="AddPromotion.php">Ajouter promotion</a>
    
   <div id="display"></div>

        <table>
            <tr>
                <th>Nom promotion</th>
            </tr>

            <?php
                    foreach($data as $promotion){
            ?>

            <tr>
                <td><?= $promotion->getnom_prom()?></td>
                <td>
                    <a href="DeletePromotion.php?id=<?php echo $promotion->getid() ?>">Supprimer</a>
                    <a href="UpdatePromotion.php?id=<?php echo $promotion->getid() ?>">Modifier</a>
                </td>
            </tr>
            <?php }?>
        </table>
      
    </div>
    </fieldset>
</body>
</html>
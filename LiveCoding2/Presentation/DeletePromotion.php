<?php

include '../Manager/PromotionManager.php';
if(isset($_GET['id'])){
    $id=($_GET['id']);
    
$PromotionManager=new PromotionManager();
$PromotionManager->DeletePromotion($id);
// redirect('index');
header('Location:index.php');









}

?>



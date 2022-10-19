<?php
   include '../Entity/Promotion.php';
   include 'MyConnection.php';
   class PromotionManager extends MyConnection {
    public function ADDPromotion($Promotion){

         $nom_prom=$Promotion->getnom_prom();
         $insertRow="INSERT INTO promotion (nom_prom) VALUES('$nom_prom')";
         mysqli_query($this->Connect(),$insertRow);


    }
    public function getAllPromotions(){


        $sqlGETDATA="SELECT * From promotion ";
        $result= mysqli_query($this->Connect(),$sqlGETDATA);
        $PromotionList=mysqli_fetch_all($result,MYSQLI_ASSOC);
        $Promotions=array();
        foreach($PromotionList as $PromotionList)
        {
            $Promotion=new Promotion();
            $Promotion->setid($PromotionList['id']);
            $Promotion->setnom_prom($PromotionList['nom_prom']);
            array_push($Promotions,$Promotion);

        }
        return $Promotions; 
    }
    public function getPromotionById($id){
        $sqlGetData = "SELECT * FROM promotion WHERE id = $id";
        $result = mysqli_query($this->Connect(), $sqlGetData);
        $promotionList = mysqli_fetch_assoc($result);

        $promotion = new Promotion();
        $promotion->setid($promotionList['id']);
        $promotion->setnom_prom($promotionList['nom_prom']);

        return $promotion;
    }
    public function UpdatePromotion( $id,$nom_prom){
        
        $updateRow="UPDATE promotion Set nom_prom='$nom_prom'  WHERE id=$id";
        mysqli_query($this->Connect(),$updateRow);
    }
    public function DeletePromotion($id){
     $deleteRow="DELETE FROM promotion WHERE id=$id";
     mysqli_query($this->Connect(),$deleteRow);
    }

    }







   





?>
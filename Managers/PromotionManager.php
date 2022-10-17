<?php
require_once 'Myconnection.php';
require_once '../entity/Promotion.php';

class promotionManager extends MyConnection {
 
    public function addPromotion($promotion){

        $nom_prom = $promotion->getnom_prom();
        // Sql query
        $insertRow="INSERT into promotion (nom_prom) values ('$nom_prom')";
                          
        // Execute query
        mysqli_query($this->connet(), $insertRow);
    }




}
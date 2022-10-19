<?php
Class MyConnection {

    function Connect(){
        $connection = mysqli_connect("localhost",'root','','gestion_promotion');
    return $connection;
    }




}
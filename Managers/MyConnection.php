<?php
class MyConnection{
    private $host;
    private $user;
    private $pass;
    private $db;
    public function connet()
    {
        $this->host="localhost";
        $this->user="root";
        $this->pass="";
        $this->db="gestion_promotion";
        $connection= new mysqli($this->host,$this->user,$this->pass,$this->db);
        return $connection;
    }
}
?>
<?php
class Promotion{
    private $id;
    private $nom_prom;

    public function getid(){
        return $this->id;
    }

    public function setid($id){
        $this->id = $id;
    }

    public function getnom_prom(){
        return $this->nom_prom;
    }

    public function setnom_prom($nom_prom){
        $this->nom_prom = $nom_prom;
    }
    ///////////////////////////////////////////
}
?>
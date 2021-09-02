<?php

trait Note{
    private $numero_aquisto;
    

    public function setNote($_numero_aquisto){
        $this->numero_aquisto = $_numero_aquisto;
        

    }

    public function getNote(){
        return $this->numero_aquisto ;
    }

}
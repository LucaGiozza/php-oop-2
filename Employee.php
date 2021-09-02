<?php

require_once 'Utente.php';

// estendo la classe utente
// la classe Employee è la classe figlia

class Employee extends Utente{

    public $cartaFedeltà;

    public function setCartaFedeltà($_cartaFedeltà){
        $this->cartaFedeltà = $_cartaFedeltà;

    }
    public function getCartaFedeltà(){
        return $this->cartaFedeltà;
    }


}
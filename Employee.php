<?php

require_once 'Utente.php';

// importo il trait
require_once 'Note.php';


// estendo la classe utente
// la classe Employee è la classe figlia

class Employee extends Utente{

    public $cartaFedeltà;

//   utilizzo il trait
    use Note;

    public function setCartaFedeltà($_cartaFedeltà){
        $this->cartaFedeltà = $_cartaFedeltà;

    }
    public function getCartaFedeltà(){
        return $this->cartaFedeltà;
    }

    // utilizzo polimorfismo
    public function setSconto($carta) {
        if($carta < 4 ){
            $this->sconto = 5;
        }else{
            $this->sconto = $this->cartaFedeltà * 4;
        }

    }


}
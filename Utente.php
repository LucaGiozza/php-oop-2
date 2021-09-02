<!-- Ciao ragazzi, esercizio di oggi: nome repo: php-oop-2
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio,
 ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo
  l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
   oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
 $c = new CreditCard(..); $user->insertCreditCard($c); -->


 <?php

 class Utente {
   public $name;
   public $surname;
   public $sconto = 0;
   public $conto_da_pagare;

   function __construct($_name, $_surname){
       $this->name = $_name;
       $this->surname = $_surname;

   }

   public function getNameSurname(){
     return $this->name . ' ' . $this->surname;
     
   }

   public function setSconto($carta){
     if($carta < 4){
       $this->sconto = 5;

     }


   }

   public function getSconto(){
      return $this->sconto;
   }


 }
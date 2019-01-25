Créer une class Validator qui va servir à valider les données envoyer par le formulaire.
 Cette classe contiendra des méthodes qui pourront valider:
  - une chaine de caractère 
  - un entier
  - un nombre à virgule - etc.
<?php

    class Validator{

        private $data;

        public function __construct($data=array()){
            
            $this->data =$data;
        }
        

    }
<?php
    class Contact {
        public $nom;
        public $email;
        public $commentaire;

        public function __construct(string $nom, string $email, string $commentaire)
        {
            $this -> nom = $nom;
            $this -> email = $email;
            $this -> commentaire = $commentaire;
         
        }

        public function getnom() :string
        {
            
            return $this -> nom;
        }

        public function getemail() :string
        { 
            return $this -> email;
        }

        public function getcommentaire() :string
        { 
            return $this -> commentaire;
        }
    }
?>
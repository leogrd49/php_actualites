<?php
    class Contact {
        public $nom;
        public $email;
        public $commentaire;

        public function __construct(array $data)
        {
            $this -> nom = $data['nom'];
            $this -> email = $data['email'];
            $this -> commentaire = $data['commentaire'];
         
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

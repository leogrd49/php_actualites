<?php
    class Actualite {
        public $titre;
        public $auteur;
        public $date_pub;
        public $date_rev;
        public $source;
        public $image;
        public $corp;
        public $tags;


        public function __construct(string $titre, string $auteur, string $date_pub, string $date_rev, string $source, string $image, string $corp, string $tags)
        {
            $this -> titre = $titre;
            $this -> auteur = $auteur;
            $this -> date_pub = $date_pub;
            $this -> date_rev = $date_rev;
            $this -> source = $source;
            $this -> image = $image;
            $this -> corp = $corp;
            $this -> tags = $tags;            
        }

        public function gettitre() :string
        {
            return $this -> titre;
        }

        public function getauteur() :string
        { 
            return $this -> auteur;
        }

        public function getdate_pub() :string
        { 
            return $this -> date_pub;
        }

        public function getdate_rev() :string
        { 
            return $this -> date_rev;
        }

        public function getsource() :string
        { 
            return $this -> source;
        }

        public function getimage() :string
        { 
            return $this -> image;
        }

        public function getcorp() :string
        { 
            return $this -> corp;
        }

        public function gettags() :string
        { 
            return $this -> tags;
        }
    }
?>
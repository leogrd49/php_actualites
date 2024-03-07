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

        public function __construct(array $data) {
        {
            $this -> titre = $data['titre'];
            $this -> auteur = $data['auteur'];
            $this -> date_pub = $data['date_pub'];
            $this -> date_rev = $data['date_rev'];
            $this -> source = $data['source'];
            $this -> image = $data['image'];
            $this -> corp = $data['corp'];
            $this -> tags = $data['tags'];            
        }
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

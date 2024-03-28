<?php
require_once 'Connexionbdd.php';

class Categorie extends Connexionbdd{

    public $values;
    public $id;
    public $nom;
    public $url;
    public $categorie_id;

    public function __construct(array $values){
        $this->id = $values['id'];
        $this->nom = $values['nom'];
        $this->categorie_id = $values['categorie_id']; 	
    }

    public function getId():int{
        return $this->id;
    }

    public function getNom():string{
        return $this->nom;
    }

    public static function getSousMenu(int $id):array{
        $sql = "SELECT * FROM categorie WHERE categorie_id = $id";
        return Connexionbdd::query($sql);
    }

    public static function getCategorie(int $id):array{
        $sql = "SELECT * FROM categorie WHERE categorie_id is null";

        return Connexionbdd::query($sql);
    }

    public function afficher_page(){
        echo "<li><a href=''>". $this->nom . "</a></li>";
    }
}
<?php

namespace Class;

require_once 'Categorie.php';

class SousCategorie extends Categorie{

    public static function getSousCategorie(int $id):array{
        $sql = "SELECT * FROM categorie WHERE categorie_id = $id";
        return Connexionbdd::query($sql);
    }

}
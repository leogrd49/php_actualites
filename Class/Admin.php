<?php

require_once "Connexionbdd.php";

class Admin extends Connexionbdd {


    public function __construct() {
    }

    public static function modifierCategorie($id, $nouveauNom) {
        $pdo = self::getPdo();
        
        $stmt = $pdo->prepare("UPDATE categorie SET nom = :nouveauNom WHERE id = :id");
        $stmt->bindParam(':nouveauNom', $nouveauNom);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    
    public static function supprimerCategorie($id) {
        $pdo = self::getPdo();
        
        $stmt = $pdo->prepare("DELETE FROM categorie WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public static function ajouterCategorie($nom, $categorie_id) {
        $pdo = self::getPdo();

        if ($categorie_id == null){
            return $categorie_id = ""; 
        }
        
        $stmt = $pdo->prepare("INSERT INTO categorie (nom, categorie_id) VALUES (:nom, :categorie_id)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':categorie_id', $categorie_id);
        $stmt->execute();
    }

    public static function getValeurs($id){
        $sql = "SELECT * FROM categorie WHERE id = :id";
        $params = array(':id' => $id);
        $data = Connexionbdd::query($sql, $params);
        return isset($data[0]) ? $data[0] : null;
    }

}
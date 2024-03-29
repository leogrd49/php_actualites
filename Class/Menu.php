<?php

require_once "Connexionbdd.php";

class Menu extends Connexionbdd
{

    public $id;
    public $nom;
    public $categorie_id;

    // public function __construct(array $values){
    //     $this->id = $values['id'];
    //     $this->nom = $values['nom'];
    //     $this->categorie_id = $values['categorie_id'];
    // }

    public function generateSelectOptions()
    {
        $db = $this->getPdo();

        $query = "SELECT id, nom FROM categorie WHERE categorie_id is null";
        $statement = $db->query($query);

        $selectOptions = '';

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $selectOptions .= '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
        }

        return $selectOptions;
    }

    public function getCategories()
    {
        $db = $this->getPdo();

        $query = "SELECT id, nom FROM categorie WHERE categorie_id is null";
        $statement = $db->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSubCategories($categoryId)
    {
        $db = $this->getPdo();

        $query = "SELECT id, nom FROM categorie WHERE categorie_id = :categoryId";
        $statement = $db->prepare($query);
        $statement->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllCategorie()
    {
        $db = $this->getPdo();

        $query = "SELECT id, nom FROM categorie" ;
        $statement = $db->query($query);
        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function afficherMenu(){
        $menu = new Menu();

        $categories = $menu->getCategories();
        foreach ($categories as $category) {
            echo '<a href="#">' . $category['nom'] . '</a>';

            $subCategories = $menu->getSubCategories($category['id']);
            echo '<select name="Submenu' . $category['id'] . '" id="submenu' . $category['id'] . '" onchange="redirect(this)">';
            echo '<option value="">Sous-menu</option>';
            foreach ($subCategories as $subCategory) {
                echo '<option value="' . $subCategory['id'] . '">' . $subCategory['nom'] . '</option>';
            }
            echo '</select>';
        }
    }
}

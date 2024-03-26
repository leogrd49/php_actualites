<?php
require_once 'Class/Admin.php';

$admin = new Admin();

$valeurs = [];
$nom_defini = '';
$categorieID_defini = '';

if (isset($_GET['id'])) {
    $valeurs = $admin->getValeurs($_GET['id']);
    if (isset($valeurs['nom'])) {
        $nom_defini = $valeurs['nom'];
    }
    if (isset($valeurs['categorie_id'])) {
        $categorieID_defini = $valeurs['categorie_id'];
    }
}

if (isset($_POST['soumettre'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $categorie_id = isset($_POST['categorie_id']) ? $_POST ['categorie_id'] : '';
        $admin->modifierCategorie($nom, $categorie_id);
    }
}
?>

<form action="edit.php?id=<?= $_GET['id'] ?>" method="post">
    <label for="nom">Nom : </label>
    <input type="text" name="nom" id="nom" placeholder="Nom de la Catégorie" value="<?= $nom_defini ?>" />
    <label for="categorie_id">Categorie_id: </label>
    <input type="text" name="categorie_id" id="categorie_id" placeholder="Categorie_id" value="<?= $categorieID_defini ?>" />
    <input type="submit" name="soumettre" value="Modifier" />
</form>

<a href="admin.php">Go back</a>

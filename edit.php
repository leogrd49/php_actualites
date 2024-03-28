<?php
require_once 'Class/Admin.php';
require_once 'include\header.php';

$admin = new Admin();

$valeurs = [];
$nom_defini = '';
$categorieID_defini = '';
$id_defini = '';


if (isset($_GET['id'])) {
    $valeurs = $admin->getValeurs($_GET['id']);
    if (isset($valeurs['nom'])) {
        $nom_defini = $valeurs['nom'];
    }
    if (isset($valeurs['categorie_id'])) {
        $categorieID_defini = $valeurs['categorie_id'];
    }
    if (isset($valeurs['id'])) {
        $id_defini = $valeurs['id'];
    }
}


if (isset($_POST['nom'], $_POST['id'])){
    $admin->modifierCategorie($_POST['nom'], $_POST['id']);
}

?>

<form action="edit.php" method="post">
    <label for="nom">Id : </label>
    <input type="text" name="id" id="id" placeholder="Id" readonly value="<?= $id_defini ?>" />
    <label for="nom">Nom : </label>
    <input type="text" name="nom" id="nom" placeholder="Nom de la Catégorie" value="<?= $nom_defini ?>" />
    <label for="categorie_id">Categorie_id: </label>
    <input type="text" name="categorie_id" id="categorie_id" placeholder="Categorie_id" value="<?= $categorieID_defini ?>" />
    <input type="submit" name="soumettre" value="Modifier" />
</form>

<a href="admin.php">Go back</a>

<?php
require_once 'include\footer.php';

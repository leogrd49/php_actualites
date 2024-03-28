<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles.css">
    <title>BLOG PHP - Admin</title>
</head>

<?php 
require_once 'include\header.php';

require_once "Class/Connexionbdd.php";
require_once "Class/Admin.php";
require_once "Class/Menu.php";


if (isset($_REQUEST['nom'], $_REQUEST['categorie_id'])){
    Admin::ajouterCategorie($_REQUEST['nom'], $_REQUEST['categorie_id']);
}

if (isset($_REQUEST['id'])){
    Admin::supprimerCategorie($_REQUEST['id']);
}

?>

<!-- <h1>Page Admin</h1> -->

<div class="add">
    <form action="" method="post">

        <input type="text" id="nom" name="nom" placeholder="nom">
        <input type="text" id="categorie_id" name="categorie_id" placeholder="categorie_id">

        <input type="submit" name="soumettre" value="Ajouter">
    </form>
</div>


<?php 

$menu = new Menu();
$categories = $menu->getAllCategorie();

?>

<table cellpadding="30" border="1px">
    <tr>
        <td>Id</td>
        <td>Nom</td>
        <td>Modifier</td>
        <td>Supprimer</td>
    </tr>
    <?php foreach ($categories as $categorie){?>
    <tr>
        <td><?= $categorie['id']?></td>
        <td><?= $categorie['nom']?></td>
        <td>
            <div class="">
                <form action="edit.php" method="get">
                    <input type="hidden" name="id" value="<?= $categorie['id'] ?>">
                    <input type="submit" value="Editer">
                </form>
            </div>
        </td>
        <td>
            <div class="del">
                <form action="" method="post">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" id="id" name="id" value="<?= $categorie['id'] ?>">
                    <input type="submit" name="soumettre" value="Supprimer">
                </form>
            </div>
        </td>
    </tr>
    <?php }?>

</table>

<?php


?>

<footer>
    <?php require_once 'include\footer.php'; ?>
</footer>
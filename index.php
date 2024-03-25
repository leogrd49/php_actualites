<?php

include "include/connexion_base.php";
require_once "classes/Actualite.php";
require_once "classes/Menu.php";



session_start();
    $actualite = Actualite::getListe();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles.css">
    <title>BLOG PHP - Objet</title>
</head>
<body>
    <header>
        <?php include 'include/html/header.html';?>
        
    <div class="menu-header">
    <nav>
    <?php
    // Créer une instance de la classe Menu pour récupérer les catégories
    $menu = new Menu();
    // Récupérer les catégories
    $categories = $menu->getCategories();

    // Parcourir les catégories
    foreach ($categories as $category) {
        // Afficher le lien de la catégorie
        echo '<a href="#">' . $category['nom'] . '</a>';

        // Générer le select des sous-catégories pour cette catégorie
        $subCategories = $menu->getSubCategories($category['id']);
        echo '<select name="Submenu' . $category['id'] . '" id="submenu' . $category['id'] . '">';
        echo '<option value="">Sous-menu</option>';
        foreach ($subCategories as $subCategory) {
            echo '<option value="' . $subCategory['id'] . '">' . $subCategory['nom'] . '</option>';
        }
        echo '</select>';
    }
    ?>
    </nav>
    </div>
    </header>  
    <br/>
    <main>
        <?php foreach ($actualite as $article) { ?>
            <a href="article.php?id=<?= $article->id ?>">
                <div class="carte-article">
                    <p class="titre-carte"><?= $article->titre ?></p>
                    <img class="image-carte" src="<?= $article->image ?>" alt="image article" title="image article" />
                    <div class="desc-article">
                        <p class="date-publication">Date de publication : <?= $article->date_publication ?></p>
                        <p class="auteur-article">Auteur : <?= $article->auteur ?></p>
                        <p class="tags-article">Tags : <?= $article->tags ?></p>
                    </div>
                </div>
            </a>
        <?php } ?>
    </main>

    <footer>
        <?php include 'include/html/footer.html';?>
    </footer>
</body>
</html>

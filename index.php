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
    ?>

    <script>
    function redirect(select) {
        var categoryId = select.id.replace('submenu', '');
        var selectedOption = select.options[select.selectedIndex];
        var subCategoryId = selectedOption.value;
        if (subCategoryId !== '') {
            window.location.href = 'admin.php?category=' + categoryId + '&subcategory=' + subCategoryId;
        }
    }
    </script>
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

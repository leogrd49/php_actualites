<?php

include "include/connexion_base.php";
require_once "Class/Actualite.php";
require_once "Class/Menu.php";

session_start();
$actualite = Actualite::getListe();

require_once 'include\header.php';
?>

<br />
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
    <?php require_once 'include\footer.php'; ?>
</footer>
</body>

</html>
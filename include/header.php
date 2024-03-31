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
        <div class="logo-header">
            <a href="../php_actualites/index.php"><img src="images/WeazelNews_Logo.webp" alt="Logo 'site'" title="Logo 'site'" /></a>
        </div>



        <div class="titre-header">
            <h1>Weazel News</h1>
            <p>L'actu en LIVE 24/24</p>
        </div>
        <div class="menu-header">
        <div>
            <a href="../php_actualites/index.php">Home</a>
            <a href="../php_actualites/admin.php">Admin</a>
        </div>
            <nav>
                <?php

                require_once 'Class/Menu.php';
                Use \Class\Menu;

                $menu = new Menu();
                $menu->afficher();
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
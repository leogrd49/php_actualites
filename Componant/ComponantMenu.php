<?php
require_once './Class/Menu.php';
Use \Class\Menu;

require_once './Interfaces/Affichable.php';
Use Interfaces\Affichable;

class ComponantMenu implements Affichable{

    public function afficher(){
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
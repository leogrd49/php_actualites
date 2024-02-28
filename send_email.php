<?php
include "connect_base.php";

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $commentaire = $_POST['commentaire'];

    $stmt = $pdo->prepare("INSERT INTO formulaire_contact (nom, email, commentaire) VALUES (:nom, :email, :commentaire)");

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':commentaire', $commentaire);
    $stmt->execute();
?>

<button class="richblue">
    <a href="accueil.php">Go back home</a>
</button>
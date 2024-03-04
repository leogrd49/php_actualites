<?php
require_once "connect_base.php";
require_once 'Controllers/Contact.php';

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $commentaire = $_POST['commentaire'];

    $contact = new Contact($nom, $email, $commentaire);

    $stmt = $pdo->prepare("INSERT INTO formulaire_contact (nom, email, commentaire) VALUES (:nom, :email, :commentaire)");

    $stmt->bindParam(':nom', $contact->nom);
    $stmt->bindParam(':email', $contact->email);
    $stmt->bindParam(':commentaire', $contact->commentaire);
    $stmt->execute();
?>

<button class="richblue">
    <a href="accueil.php">Go back home</a>
</button>
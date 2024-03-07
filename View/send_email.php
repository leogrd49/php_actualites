<?php
require_once '../root/require.php';


$query = "INSERT INTO formulaire_contact (nom, email, commentaire) VALUES (:nom, :email, :commentaire)";
$stmt = $pdo->prepare($query);

while ($result = $stmt->fetch()) {
    $contact = new Contact($result);


    $stmt->bindParam(':nom', $contact->nom);
    $stmt->bindParam(':email', $contact->email);
    $stmt->bindParam(':commentaire', $contact->commentaire);
    $stmt->execute();

}

?>

<button class="richblue">
    <a href="../View/accueil.php">Go back home</a>
</button>

<?php
require_once '../View/footer.php';
?>
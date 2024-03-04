<?php
require_once "header.php";
require_once "connect_base.php";
require_once 'Controllers/Actualite.php';

$id = $_REQUEST["ID"];

$requestSQL = "SELECT * FROM article WHERE ID = ".$id." " ;
$stmt = $pdo->query($requestSQL);
$result = $stmt->fetch();

$actualite = new Actualite($result['titre'], $result['auteur'], $result['date_pub'], $result['date_rev'], $result['source'], $result['image'], $result['corp'], $result['tags']);


echo "<h1> " . $actualite->gettitre() . "</h1>";
echo "<h1> " . $actualite->getauteur() . "</h1>";
echo "<h1> " . $actualite->getdate_pub() . "</h1>";
echo "<h1> " . $actualite->getdate_rev() . "</h1>";
echo "<h1> " . $actualite->gettags() . "</h1>";
echo "<h1> " . $actualite->getsource() . "</h1>";
echo "<img src=" . $actualite->getimage() . " alt='image'>";
echo "<h1> " . $actualite->getcorp() . "</h1>";

?>

<button class="richblue">
    <a href="accueil.php">Go back home</a>
</button>

<?php

require_once "footer.php";

<?php
require_once '../root/require.php';

$id = $_REQUEST["ID"];

$requestSQL = "SELECT * FROM article WHERE ID = ".$id." " ;
$stmt = $pdo->query($requestSQL);
$result = $stmt->fetch();

$actualite = new Actualite($result);


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

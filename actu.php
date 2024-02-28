<?php
include "connect_base.php";

$id = $_REQUEST["ID"];

$requestSQL = "SELECT * FROM article WHERE ID = ".$id." " ;
$stmt = $pdo->query($requestSQL);
$result = $stmt->fetch();

echo "<h1> " . $result['titre'] . "</h1>";
echo "<h1> " . $result['auteur'] . "</h1>";
echo "<h1> " . $result['date_pub'] . "</h1>";
echo "<h1> " . $result['date_rev'] . "</h1>";
echo "<h1> " . $result['tags'] . "</h1>";
echo "<h1> " . $result['source'] . "</h1>";
echo "<img src=" . $result['image'] . " alt='image'>";
echo "<h1> " . $result['corp'] . "</h1>";


<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=museumvision;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// on exécute la requête DELETE FROM... avec la méthode exec plutot que query. Voir la doc php PDO pour comprendre pourquoi
$reponse = $bdd->exec('DELETE FROM exposition WHERE id='.$_GET['id']);

header('Location: Management.php');
exit;
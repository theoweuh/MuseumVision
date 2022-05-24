<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=museumvision;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT max(id)+1 from exposition');
$idmax = $reponse->fetch();


$reponse = $bdd->exec('INSERT INTO exposition VALUES ('.$idmax[0].',\''.$_POST['nom'].'\',\''.$_POST['permanent'].'\',\''.$_POST['tarifEnfant'].'\',\''.$_POST['tarifAdulte'].'\',\''.$_POST['active'].'\')');


header('Location: Management.php');
exit;

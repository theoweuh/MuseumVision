<?php

function getExpos() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from exposition");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getIdExpoMax()
{
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select MAX(id) as idMax from exposition");
        $req->execute();
        $resultat = $req->fetch(PDO::FETCH_ASSOC);


    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return intval($resultat['idMax']);
}
    function getPrixEnfant($id)
    {
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("SELECT tarifEnfant FROM exposition WHERE id =:id");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();
            $resultat = $req->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }

        return intval($resultat['tarifEnfant']);
    }
function getPrixAdulte($id)
{
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT tarifAdulte FROM exposition WHERE id =:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $resultat = $req->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return intval($resultat['tarifAdulte']);






}


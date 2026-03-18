<?php

include_once "connexionDB.php";

function getGenreById($id) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from genre where id=:id");
        $req->bindValue(':id', $id, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
function getGenre(){
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select libelle from genre");
        

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>
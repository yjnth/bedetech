<?php

include_once $racine."/modele/connexionDB.php";

function getUtilisateurByMail($mail) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur where mail=:mail");
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtilisateur($mail, $mdp, $pseudo) {
    try {
        $cnx = connexionPDO();

        // Hash du mot de passe
        $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

        $req = $cnx->prepare("insert into utilisateur (mail, mdp, pseudo) values(:mail,:mdp,:pseudo)");
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdpHash, PDO::PARAM_STR);
        $req->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>
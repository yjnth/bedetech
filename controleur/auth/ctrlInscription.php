<?php

include_once "$racine/modele/auth/utilisateur.php";

// creation du menu lateral
$menuLateral = array();
$menuLateral[] = Array("url"=>"./?action=connexion","label"=>"Connexion");
$menuLateral[] = Array("url"=>"./?action=inscription","label"=>"Inscription");


$inscrit = false;
$msg="";
// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mail"]) && isset($_POST["mdp"]) && isset($_POST["pseudo"])) {

    if ($_POST["mail"] != "" && $_POST["mdp"] != "" && $_POST["pseudo"] != "") {
        $mail = $_POST["mail"];
        $mdp = $_POST["mdp"];
        $pseudo = $_POST["pseudo"];

        // enregistrement des donnees
        $ret = addUtilisateur($mail, $mdp, $pseudo);
        if ($ret) {
            $inscrit = true;
        } else {
            $msg = "L'utilisateur n'a pas été enregistré.";
        }
    }
 else {
    $msg="Renseignez tous les champs...";    
    }
}

if ($inscrit) {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription confirmée";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/auth/vueConfirmationInscription.php";
    include "$racine/vue/pied.html.php";
} else {
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Inscription pb";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/auth/vueInscription.php";
    include "$racine/vue/pied.html.php";
}
?>
<?php
include_once "$racine/modele/bede.php";
include_once "$racine/modele/illustration.php";

// creation du menu lateral
$menuLateral = array();
$menuLateral[] = Array("url"=>"#top","label"=>"La bande dessinée");
$menuLateral[] = Array("url"=>"#resume","label"=>"Résumé");
$menuLateral[] = Array("url"=>"#illustrations","label"=>"Illustrations");

// recuperation des donnees GET, POST, et SESSION
$id = $_GET["id"];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$uneBede = getBedeById($id);
$lesIllustrations = getIllustrationsByIdRef($id);

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "detail d'une Bande Dessinées";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDetailBede.php";
include "$racine/vue/pied.html.php";
?>
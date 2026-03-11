<?php
include_once "$racine/modele/bede.php";
include_once "$racine/modele/illustration.php";

// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeBedes = getBedes();

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des Bandes Dessinées répertoriées";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeBedes.php";
include "$racine/vue/pied.html.php";
?>
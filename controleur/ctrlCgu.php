<?php
// appel éventuel au modèle nécessaire
include_once "$racine/modele/cgu.php";
// récupération des données GET, POST, et SESSION
;
// appel des fonctions permettant de récupérer les données utiles a l'affichage
;
// traitement si nécessaire des données récupérées
;
// appel du script de vue qui permet de gérer l'affichage des données
$titre = "cgu";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCgu.php";
include "$racine/vue/pied.html.php";
?>
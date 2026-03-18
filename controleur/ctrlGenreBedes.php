<?php
include_once "$racine/modele/bede.php";
include_once "$racine/modele/illustration.php";
;
$listeGenre =getGenre();
;
$titre = "Liste des Bandes Dessinées répertoriées";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeGenre.php";
include "$racine/vue/pied.html.php";
?>
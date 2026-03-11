<?php

include_once "$racine/modele/auth/authentification.php";

// creation du menu lateral
$menuLateral = array();
$menuLateral[] = Array("url"=>"./?action=connexion","label"=>"Connexion");
$menuLateral[] = Array("url"=>"./?action=inscription","label"=>"Inscription");

$msg="";
// recuperation des donnees GET, POST, et SESSION
if (!isset($_POST["mail"]) || !isset($_POST["mdp"])){
    // on affiche le formulaire de connexion
    $titre = "authentification";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/auth/vueAuthentification.php";
    include "$racine/vue/pied.html.php";
	}
else{
	if($_POST["mail"]=="" || $_POST["mdp"]==""){
		$msg="Renseignez tous les champs...";
		// on affiche le formulaire de connexion
		$titre = "authentification";
		include "$racine/vue/entete.html.php";
		include "$racine/vue/auth/vueAuthentification.php";
		include "$racine/vue/pied.html.php";
		}
	else{
		$mail=$_POST["mail"];
		$mdp=$_POST["mdp"];
		
		login($mail,$mdp);

		if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
			include "$racine/controleur/auth/ctrlMonProfil.php";
		}
		else{
			// l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
			$titre = "authentification";
			include "$racine/vue/entete.html.php";
			include "$racine/vue/auth/vueAuthentification.php";
			include "$racine/vue/pied.html.php";
			}
		}
	}


?>
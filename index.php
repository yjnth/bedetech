<?php
$racine = __DIR__;
include_once "$racine/modele/auth/authentification.php"; // pour pouvoir utiliser isLoggedOn() dans l'entete

if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{   
    $action = "";
}

switch ($action){
    case "accueil":
		$fichier = "ctrlListeBedes.php";
		break;
    case "detail":
		$fichier = "ctrlDetailBede.php";
		break;
    case "connexion":
		$fichier = "auth/ctrlConnexion.php";
		break;
    case "deconnexion":
		$fichier = "auth/ctrlDeconnexion.php";
		break;
    case "profil":
		$fichier = "auth/ctrlMonProfil.php";
		break;
    case "inscription":
		$fichier = "auth/ctrlInscription.php";
		break;
	case "cgu":
		$fichier = "ctrlCgu.php";
		break;
	default:
		$fichier = "ctrlListeBedes.php";
}

include "$racine/controleur/$fichier";

?>
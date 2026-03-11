<h1>Connexion</h1>
<span id="alerte"><?= $msg ?></span>
<form action="./?action=connexion" method="POST">

    <input type="text" name="mail" placeholder="Email de connexion" /><br />
    <input type="password" name="mdp" placeholder="Mot de passe"  /><br />
    <input type="submit" />

</form>
<br />
<a href="./?action=inscription">Inscription</a>


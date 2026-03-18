
<h1>Liste des Bandes Dessinées</h1>

<?php
for ($i = 0; $i < count($listeGenre); $i++) {
	
	$lesGenres = getIllustrationsByIdRef($listeGenre[$i]['id']);
    ?>

    <div class="card">
		<div class="illustrationCard">
            <?php if (count($lesGenres) > 0) { ?>
                <img src="illustrations/<?= $lesGenres[0]["chemin"] ?>" alt="Couverture" />
            <?php } ?>
        </div>
		<br />
        <div class="descrCard"><?php echo "<a href='./?action=detail&id=" . $listeBedes[$i]['id'] . "'>" . $listeBedes[$i]['titre'] . "</a>"; ?>
            <br />
            parue en <?= $listeBedes[$i]["anneeParution"] ?> - <?= $listeBedes[$i]["nbPages"] ?> pages -
            <br> 
            cette bande déssinée  est un(e) <?= $listeBedes[$i]["type_de_bd"] ?>
      

    <?php
}
?>

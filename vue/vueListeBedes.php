
<h1>Liste des Bandes Dessinées</h1>

<?php
for ($i = 0; $i < count($listeBedes); $i++) {
	
	$lesIllustrations = getIllustrationsByIdRef($listeBedes[$i]['id']);
    ?>

    <div class="card">
		<div class="illustrationCard">
            <?php if (count($lesIllustrations) > 0) { ?>
                <img src="illustrations/<?= $lesIllustrations[0]["chemin"] ?>" alt="Couverture" />
            <?php } ?>
        </div>
		<br />
        <div class="descrCard"><?php echo "<a href='./?action=detail&id=" . $listeBedes[$i]['id'] . "'>" . $listeBedes[$i]['titre'] . "</a>"; ?>
            <br />
            parue en <?= $listeBedes[$i]["anneeParution"] ?> - <?= $listeBedes[$i]["nbPages"] ?> pages -
            <br> 
            cette bande déssinée  est un(e) <?= $listeBedes[$i]["type_de_bd"] ?>
        </div>
		
		<!--
		<div class="tagGenre">
			<ul id="tagGenre">
				
				<li class="tag">
					<span class="tag">#</span>
				</li>

			</ul>
		</div>
		-->

    </div>

    <?php
}
?>



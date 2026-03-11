
<h1><?= $uneBede['titre']; ?></h1>

<section>
	<!--
	Genre <br />
	<ul id="tagGenre">
				
		<li class="tag">
			<span class="tag">#</span>
		</li>

	</ul>
	-->
</section>
<p id="principal">   
    <?= $uneBede['description']; ?>
</p>
<p id="principal">
    <?php if (count($lesIllustrations) > 0) { ?>
        <img class="couverture" src="illustrations/<?= $lesIllustrations[0]["chemin"] ?>" alt="Couverture" />
    <?php } ?>
</p>

<h2 id="resume">
    Résumé
</h2>
<p>
    <?= $uneBede['resume']; ?>
</p>

<h2 id="illustrations">
    Illustrations
</h2>
<ul id="galerie">
    <?php for ($i = 0; $i < count($lesIllustrations); $i++) { ?>
        <li> <img class="galerie" src="illustrations/<?= $lesIllustrations[$i]["chemin"] ?>" alt="" /></li>
    <?php } ?>

</ul>



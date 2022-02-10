<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Restauration - <?= WEBSITE_TITLE ?></title>
	<?php 
		include_once("common/head.php");
	?>
</head>
<body id="top">
	<?php 
		include_once("common/header.php");
	?>
	<main>
		<section>
			<div class="container py-5">
				<h1>Restauration</h1>
				<h2>Vendredi 20 mai</h2>
				<div class="row">
					<div class="col-md-6">
						<h3>Repas "Fête de la Bière"</h3>
						<ul>
							<li>Entrée</li>
							<li>Choucroute garnie</li>
							<li>Dessert</li>
						</ul>
					</div>
					<div class="col-md-6">
						<h3>Snack</h3>
						<ul>
							<li>Flammeküche</li>
							<li>Bretzels</li>
							<li>Saucisses de veau</li>
							<li>Schüblings</li>
							<li>Frites</li>							
						</ul>
					</div>
				</div>
				<h2>Samedi 21 mai</h2>
				<div class="row">
					<div class="col-md-6">
						<h3>Menus</h3>
						<ul>
							<li>1. Saucisses de veau ou Schüblings</li>
							<li>2. Tranches de porc marinées</li>
							<li>3. Filets de Perches</li>
						</ul>
						<p>Accompagnements : Frites / Salade</p>
					</div>
					<div class="col-md-6">
						<h3>Snack</h3>
						<ul>
							<li>Frites</li>
							<li>Chickens</li>
							<li>Saucisses de veau</li>
							<li>Schüblings</li>
							<li>Burgers escargot (saucisse à rôtir)</li>
							<li>Sandwichs au jambon, au salami, au fromage</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h3>Boisson et Bar</h3>
						<label>A venir</label>
					</div>
					<div class="col-md-6">
						Horaire, lieux et prix à venir
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php 
		include_once("common/footer.php");
	?>
</body>
</html>
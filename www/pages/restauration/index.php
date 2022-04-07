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
	<main class="mt-0">
        <section class="bg-gradient my-4 pt-5">
            <div class="container-fluid py-3">
                <h1 class="text-white">Restauration</h1>
            </div>
        </section>
		<section>
			<div class="container py-5">
				<h1>On va se mettre bien...</h1>
				<h2>Vendredi 20 mai</h2>
				<div class="row">
					<div class="col-md-6">
						<h3>Repas "Fête de la Bière" 🍻</h3>
						<ul>
							<li>Apéritif</li>
							<li>Choucroute garnie avec : lard de jambon, saucisson, vienne, lard fumé et lard salé, pommes nature, moutarde</li>
							<li>Dessert</li>
						</ul>
						<p>
							Le fournisseur de l'événement sera La Chenille Gourmande, d'Oron-la-Ville.
						</p>
					</div>
					<div class="col-md-6">
						<h3>Snack</h3>
						<ul>
							<li>Flammeküche</li>
							<li>Bretzel</li>
							<li>Saucisse de veau</li>
							<li>Schübling</li>
							<li>Frites</li>
							<li>Glaces à l'eau</li>
							<li>Glaces « la Brebisiane » au lait de chèvre</li>
						</ul>
					</div>
				</div>
				<h2>Samedi 21 mai</h2>
				<div class="row">
					<div class="col-md-6">
						<h3>Menus</h3>
						<ul>
							<li>1. Saucisse de veau ou Schübling</li>
							<li>2. Tranche de porc marinée</li>
							<li>3. Filets de Perche</li>
						</ul>
						<p>Accompagnements : Frites / Salade</p>
					</div>
					<div class="col-md-6">
						<h3>Snack</h3>
						<ul>
							<li>Frites</li>
							<li>Chickens</li>
							<li>Saucisse de veau</li>
							<li>Schübling</li>
							<li>Burger escargot (saucisse à rôtir)</li>
							<li>Sandwichs au jambon et au fromage</li>
							<li>Glaces à l'eau</li>
							<li>Glaces « la Brebisiane » au lait de chèvre</li>
						</ul>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-md-6">
						<h3>Boisson et Bar</h3>
						<label>A venir</label>
					</div>
					<div class="col-md-6">
						Horaire, lieux et prix à venir
					</div>
				</div> -->
			</div>
		</section>
	</main>
	<?php 
		include_once("common/footer.php");
	?>
</body>
</html>
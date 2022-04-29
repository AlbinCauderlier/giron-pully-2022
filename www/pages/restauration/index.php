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
				<h2>Vendredi 20 mai</h2>
				<div class="row">
					<div class="col-md-6">
						<h3>Repas "Fête de la Bière" 🍻</h3>
						<ul>
							<li>Apéritif de bienvenue</li>
							<li>Choucroute garnie avec : lard de jambon, saucisson, vienne, lard fumé et lard salé, pommes nature, moutarde</li>
							<li>Glace</li>
						</ul>
						<p>
							Plusieurs bières seront proposées au verre. 🍺
						</p>
						<p>
							Le placement est libre dans la salle.
						</p>
						<p>
							Le fournisseur de l'événement sera La Chenille Gourmande, d'Oron-la-Ville.
						</p>
						<a href="/images/logo/logo-chenille-gourmande.jpeg" title="Chenille Gourmande" target="_blank">
							<img src="/images/logo/logo-chenille-gourmande.jpeg" alt="Chenille Gourmande" class="w-50"/>
						</a><br/>
						<a href='//etickets.infomaniak.com/shop/ANgLDw1YqC/' target='_blank' class="btn btn-lg btn-block text-white my-3" rel="nofollow" id="btn-banderole">
							Réserver
						</a>
					</div>
					<div class="col-md-6">
						<h3>Snack</h3>
						<ul>
							<li>Flammeküche</li>
							<li>Bretzel 🥨</li>
							<li>Saucisse de veau</li>
							<li>Schübling</li>
							<li>Frites 🍟</li>
							<li>Glaces à l'eau</li>
							<li>Glaces « la Brebisiane » au lait de brebis</li>
						</ul>
						<p><i>
							Ouvert pendant toute la durée du Giron<br/>
							Prix affichés sur place<br/>
							Paiements en espèce (Twint en cours de souscription)
						</i></p>
					</div>
				</div>
				<hr class="my-5"/>
				<h2>Samedi 21 mai</h2>
				<div class="row">
					<div class="col-md-6">
						<h3>Banquet Officiel</h3>
						<p>
							Tartare de truite fumée et Granny Smith<br/>
							Fondue vigneronne, 3 viandes (bœuf, cheval, dinde)<br/>
							Cornichons, petits oignons, épis de maïs<br/>
							Salade mêlée 🥙<br/>
							Sauces maison, riz<br/>
							Mousse Toblerone<br/>
							Café ☕<br/>
						</p>
					</div>
					<div class="col-md-6">
						<h3>Snack</h3>
						<ul>
							<li>Chickens</li>
							<li>Saucisse de veau</li>
							<li>Schübling</li>
							<li>Frites 🍟</li>
							<li>Burger escargot (saucisse à rôtir)</li>
							<li>Sandwichs au jambon et au fromage 🥪</li>
							<li>Glaces à l'eau</li>
							<li>Glaces « la Brebisiane » au lait de brebis</li>
						</ul>
						<br/>
						<p>Menus</p>
						<ul>
							<li>1. Saucisse de veau ou Schübling</li>
							<li>2. Tranche de porc marinée</li>
							<li>3. Filets de Perche</li>
						</ul>
						<p>Accompagnements : Frites 🍟 / Salade 🥙</p>
						<p><i>
							Ouvert pendant toute la durée du Giron<br/>
							Prix affichés sur place<br/>
							Paiements en espèce (Twint en cours de souscription)
						</i></p>
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
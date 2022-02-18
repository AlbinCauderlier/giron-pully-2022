<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Ensemble des Jeunes - <?= WEBSITE_TITLE ?></title>
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
			<div class="container-fluid pt-5">
				<div class="row">
					<aside class="col-md-2 d-none d-sm-block">
						<nav class="p-0" id="streamer-toc">
							<ul class="list-unstyled navbar-list mb-0"> 
								<li class="nav-item">
									<a href="#ensemble_des_jeunes" title="" class="nav-link border-left py-3">
										L'Ensemble des Jeunes
									</a>
								</li>
								<li class="nav-item">
									<a href="#inscription" title="" class="nav-link border-left py-3">
										Inscription
									</a>
								</li>
								<li class="nav-item">
									<a href="#planning" title="" class="nav-link border-left py-3">
										Planning et lieu des répétitions et concerts
									</a>
								</li>
							</ul>
						</nav>
					</aside>
					<div class="col-md-10">
						<h1 id="ensemble_des_jeunes">Ensemble des Jeunes du Concours</h1>
						<p>
							L’ensemble des jeunes du giron a pour objectif de réunir un grand nombre de musiciens ayant participé au concours des solistes pour former un ensemble dynamique qui jouera quelques pièces lors de la remise des résultats le samedi soir. Cela permet aux jeunes instrumentistes de la région de se retrouver ou de faire connaissance. Alors n’hésitez pas à vous inscrire !
						</p>
						<div class="row my-5 text-center">
							<div class="col-md-6 my-3">
								<b>Pierre-Alexandre Marchand</b><br/>
								Ensemble des jeunes<br/>
								Jurys
							</div>
							<div class="col-md-6 my-3">
								<a href="/images/comite/membres/originaux/chantal-berard.jpg" title="Chantal BERARD" target="_blank">
								<img src="/images/comite/membres/chantal-berard.jpg" alt="Chantal BERARD" style="max-width: 240px;"/></a><br/>
								<b>Chantal Bérard</b><br/>
								Concours des solistes et petits ensembles<br/>
								Ensemble des jeunes
							</div>
						</div>
						<hr class="my-5"/>
						<h2 id="inscription">Inscription</h2>
						<p>
							Voici ci-dessous le formulaire d'inscription à retourner 
						</p>
						<a href="/ressources/2022-Inscription-Ensemble-des-jeunes-individuel.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
							Formulaire d'inscription à l'Ensemble des Jeunes
						</a>
						<hr class="my-5"/>
						<h2 id="planning">Planning et lieu des répétitions & concerts</h2>
						<ul class="timeline">
							<li>
								<b>07.05.2022</b>
								<i><span class="float-right">Echallens</span></i>
								<p>
									Répétition de l'Ensemble des jeunes toute la matinée (9h - 12h env.)
								</p>
							</li>
							<li>
								<b>14.05.2022</b>
								<i><span class="float-right">Pully</span></i>
								<p>
									Répétition de l'Ensemble des jeunes toute la journée (9h - 16h env.)
								</p>
							</li>
							<li>
								<b>21.05.2022 (horaire à définir)</b>
								<i><span class="float-right">Site du Giron à Pully</span></i>
								<p>
									Concert
								</p>
							</li>
						</ul>
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
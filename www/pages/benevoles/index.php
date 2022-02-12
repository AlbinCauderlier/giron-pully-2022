<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Bénévoles - <?= WEBSITE_TITLE ?></title>
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
                <h1 class="text-white">Bénévoles</h1>
            </div>
        </section>
		<section>
			<div class="container">
				<div class="text-center">
					<h1>Vous souhaitez nous aider ?</h1>
					<h2>Un événement de cette taille a besoin de l'aide de bénévoles.</h2>
					<a href="https://aline.name/mysurvey/index.php/783994?lang=fr" title="Faire partie des bénévoles" class="btn btn-primary btn-block btn-lg rounded-pill my-5" target="_blank" rel="nofollow">
						<i data-feather="user-plus" class="mr-2"></i> Faire partie de l'équipe des bénévoles
					</a>
					<hr class="my-5"/>
					<div class="row my-5">
						<div class="col-md-6">
							<img src="/images/comite/membres/aline-brunner.jpg" alt="Aline BRUNNER" style="max-width: 240px;"/>
						</div>
						<div class="col-md-6">
							<h2 class="my-5">
								Vous pouvez joindre Aline via <a href="mailto:benevoles@gironpully.ch" target="_blank">benevoles@gironpully.ch</a>
							</h2>
						</div>
					</div>
				</div>
				<h2 class="text-center">Nous avons besoin d'aide pour...<br/>(selon vos disponibilités et possibilités)</h2>
				<ul class="row list-unstyled">
					<li class="col-md-3 my-3">Vente des boissons</li>
					<li class="col-md-3 my-3">Cuisine et service</li>
					<li class="col-md-3 my-3">Montage/démontage d’infrastructures</li>
					<li class="col-md-3 my-3">Caisse</li>
					<li class="col-md-3 my-3">Conception et installation de décorations</li>
					<li class="col-md-3 my-3">Information lors du Concours des solistes</li>
					<li class="col-md-3 my-3">Nettoyage</li>
					<li class="col-md-3 my-3">Remplaçants</li>
					<li class="col-md-3 my-3">Réservation des repas</li>
					<li class="col-md-3 my-3">Contrôle des billets</li>
					<li class="col-md-3 my-3">Concours des Sociétés</li>
					<li class="col-md-3 my-3">Périmètre du cortège</li>
					<li class="col-md-3 my-3">...</li>
				</ul>
				<hr class="my-5"/>
				<a href="https://aline.name/mysurvey/index.php/783994?lang=fr" title="Faire partie des bénévoles" class="btn btn-primary btn-block btn-lg rounded-pill mt-5" target="_blank" rel="nofollow">
					<i data-feather="user-plus" class="mr-2"></i> Faire partie de l'équipe des bénévoles
				</a>
			</div>
		</section>
	</main>
	<?php 
		include_once("common/footer.php");
	?>
</body>
</html>
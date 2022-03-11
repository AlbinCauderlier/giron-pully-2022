<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Sponsors - <?= WEBSITE_TITLE ?></title>
	<?php 
		include_once("common/head.php");
	?>

	<meta name="description" content="Sponsors du Giron Pully 2022"/>
	<meta name="keywords" content="giron, pully, pully express, lavaux, Gros-de-Vaud, concours, concerts, défilé, parade"/>
</head>
<body id="top">
	<?php 
		include_once("common/header.php");
	?>
	<main class="mt-0">
        <section class="bg-gradient my-4 pt-5">
            <div class="container-fluid py-3">
                <h1 class="text-white">Sponsors</h1>
            </div>
        </section>
        <section class="py-5">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4">
						<img src="/images/sponsors/logo-bcv.png" style="height:80px;" alt="BCV"/>
					</div>
					<div class="col-md-4">
						<img src="/images/sponsors/logo-gawah.png" style="max-height:80px;" alt="Gawah"/>
					</div>
					<div class="col-md-4">
						<img src="/images/sponsors/logo-pully.png" style="max-height:80px;" alt="Pully"/>
					</div>
				</div>
				<hr class="my-5"/>
				<h2>Devenir sponsor</h2>
				<p>
					Avec ses centaines de participants vaudois, le Giron est une excellente occasion de mettre en valeur des entreprises du canton.<br/>
					Si vous le souhaitez, nous serons heureux de vous compter parmis nos sponsors.
				</p>
				<p>
					Pour cela, vous trouverez ci-dessous le dossier et le contrat de sponsoring, à nous transmettre à sponsors@gironpully.ch.
				</p>
				<div class="row my-5">
					<div class="col-md-6">
						<a href="/ressources/sponsors/dossier_de_sponsoring.pdf" class="btn btn-primary btn-lg btn-block my-3" target="_blank">
							Télécharger le dossier de sponsoring
						</a> 
					</div>
					<div class="col-md-6">
						<a href="/ressources/sponsors/contrat_de_sponsoring.pdf" class="btn btn-primary btn-lg btn-block my-3" target="_blank">
							Télécharger le contrat de sponsoring
						</a> 
					</div>
				</div>
				<p>
					Vous pouvez également nous joindre directement à : <br/>
					<a href="mailto:sponsors@gironpully.ch" class="btn btn-secondary btn-lg btn-block" target="_blank">sponsors@gironpully.ch</a> 
				</p>
			</div>
		</section>
	</main>
	<?php 
		include_once("common/footer.php");
	?>
	<script type="text/javascript" src="/js/home.js"></script>
</body>
</html>
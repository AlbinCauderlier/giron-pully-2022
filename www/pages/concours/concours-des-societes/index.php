<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Concours des Sociétés - <?= WEBSITE_TITLE ?></title>
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
				<h1>Concours des Sociétés</h1>
				<h2>Lieu - L'Octogone</h2>
				<div class="row">
					<div class="col-md-8">
						<p>
							L’Octogone Théâtre de Pully, inauguré en 1979, est une salle de spectacles de 455 places.
						</p>
						<div class="mb-5" style="width: 100%">
							<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5491.59799785641!2d6.660797!3d46.512089!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7df467b466f68884!2sL&#39;Octogone%20Th%C3%A9%C3%A2tre%20de%20Pully!5e0!3m2!1sfr!2sch!4v1625223945895!5m2!1sfr!2sch"></iframe>
						</div>
					</div>
					<div class="col-md-4">
						<img src="/images/octogone/logo.jpeg" alt="Octogone - Pully"class="w-100 mb-4"/>
						<div id="carousel_organisation" class="carousel slide my-3" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="/images/octogone/1.jpeg" alt="Octogone - Pully"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/octogone/3.jpeg" alt="Octogone - Pully"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/octogone/4.jpeg" alt="Octogone - Pully"class="d-block w-100"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="my-5" />
				<h2>Horaires de passages</h2>
				<p>
					Le samedi 21 mai, à partir de 9h
				</p>
				<hr class="my-5" />
				<h2>Jury</h2>
				<div class="row">
					<div class="col-md-3">

					</div>
					<div class="col-md-3">

					</div>
					<div class="col-md-3">

					</div>
					<div class="col-md-3">

					</div>
				</div>
				<hr class="my-5" />
				<h2>Pièces imposées</h2>
				<p>

				</p>
				<hr class="my-5" />
				<h2>Règlement</h2>
				<p>

				</p>
			</div>
		</section>
	</main>
	<?php 
		include_once("common/footer.php");
	?>
</body>
</html>
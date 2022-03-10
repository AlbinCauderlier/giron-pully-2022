<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Organisation - <?= WEBSITE_TITLE ?></title>
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
                <h1 class="text-white">Organisation</h1>
            </div>
        </section>
		<section>
			<div class="container-fluid">
				<div class="row">
					<aside class="col-md-2 d-none d-sm-block">
						<nav class="p-0" id="streamer-toc">
							<ul class="list-unstyled navbar-list mb-0"> 
								<li class="nav-item">
									<a href="#comite_organisation" title="" class="nav-link border-left py-3">
										Comité d'Organisation
									</a>
								</li>
								<li class="nav-item">
									<a href="#comite_elargi" title="" class="nav-link border-left py-3">
										Comité Elargi
									</a>
								</li>
							</ul>
						</nav>
					</aside>
					<div class="col-md-10">
						<h2 id="comite_organisation">Comité d'Organisation</h2>
						<img src="/images/comite/groupe/IMG_2350.jpg" alt="Comité du Giron"class="d-block w-100"/>
						<!-- <div id="carousel_organisation" class="carousel slide my-3" data-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="/images/comite/groupe/IMG_2350.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/comite/groupe/IMG_2341-1.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/comite/groupe/IMG_2341.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/comite/groupe/IMG_2342.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/comite/groupe/IMG_2325.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/comite/groupe/IMG_2329.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/comite/groupe/IMG_2340.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/comite/groupe/IMG_2315.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/comite/groupe/IMG_2333.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
								<div class="carousel-item">
									<img src="/images/comite/groupe/IMG_2322.jpg" alt="Comité du Giron"class="d-block w-100"/>
								</div>
							</div>
						</div> -->
						<div class="row my-5 text-center">
							<div class="col-md my-3">
								<a href="/images/comite/membres/originaux/laetitia-deglon.jpg" title="Laetitia DEGLON" target="_blank">
									<img src="/images/comite/membres/laetitia-deglon.jpg" alt="Laetitia DEGLON" style="max-width: 240px;"/></a><br/>
								<b>Laetitia Déglon</b><br/>
								Présidente du Giron
							</div>
							<div class="col-md my-3">
								<a href="/images/comite/membres/originaux/martial-lambert.jpg" title="Martial LAMBERT" target="_blank">
								<img src="/images/comite/membres/martial-lambert.jpg" alt="Martial LAMBERT" style="max-width: 240px;"/></a><br/>
								<b>Martial Lambert</b><br/>
								1er Vice-président
							</div>
							<div class="col-md my-3">
								<a href="/images/comite/membres/originaux/christophe-deglon.jpg" title="Christophe DEGLON" target="_blank">
								<img src="/images/comite/membres/christophe-deglon.jpg" alt="Christophe DEGLON" style="max-width: 240px;"/></a><br/>
								<b>Christophe Déglon</b><br/>
								2ème Vice-président<br/>
								Annonces / Livret de fête
							</div>
							<div class="col-md my-3">
								<a href="/images/comite/membres/originaux/nadia-elezi.jpg" title="Nadia ELEZI" target="_blank">
									<img src="/images/comite/membres/nadia-elezi.jpg" alt="Nadia ELEZI" style="max-width: 240px;"/></a><br/>
								<b>Nadia Elezi</b><br/>
								Secrétaire
							</div>
							<div class="col-md my-3">
								<a href="/images/comite/membres/originaux/urs-steiger.jpg" title="Urs STEIGER" target="_blank">
								<img src="/images/comite/membres/urs-steiger.jpg" alt="Urs STEIGER" style="max-width: 240px;"/></a><br/>
								<b>Urs Steiger</b><br/>
								Caissier
							</div>
						</div>
						<div class="row my-5 text-center">
							<div class="col-md-3 my-3">
								<a href="/images/comite/membres/originaux/stephane-pecorini.jpg" title="Stéphane PECORINI" target="_blank">
								<img src="/images/comite/membres/stephane-pecorini.jpg" alt="Stéphane PECORINI" style="max-width: 240px;"/></a><br/>
								<b>Stéphane Pecorini</b><br/>
								Concours des sociétés<br/>
								Concours de marche<br/>
								Jurys
							</div>
							<div class="col-md-3 my-3">
								<a href="/images/comite/membres/originaux/chantal-berard.jpg" title="Chantal BERARD" target="_blank">
								<img src="/images/comite/membres/chantal-berard.jpg" alt="Chantal BERARD" style="max-width: 240px;"/></a><br/>
								<b>Chantal Bérard</b><br/>
								Concours des solistes et petits ensembles<br/>
								Ensemble des jeunes
							</div>
							<div class="col-md-3 my-3">
								<a href="/images/comite/membres/originaux/olivier-abetel.jpg" title="Olivier ABETEL" target="_blank">
								<img src="/images/comite/membres/olivier-abetel.jpg" alt="Olivier ABETEL" style="max-width: 240px;"/></a><br/>
								<b>Olivier Abetel</b><br/>
								Banquet / Snack
							</div>
							<div class="col-md-3 my-3">
								<a href="/images/comite/membres/originaux/hermann-buhler.jpg" title="Hermann BUHLER" target="_blank">
								<img src="/images/comite/membres/hermann-buhler.jpg" alt="Hermann BUHLER" style="max-width: 240px;"/></a><br/>
								<b>Hermann Bühler</b><br/>
								Boissons
							</div>
						</div>
						<div class="row my-5 text-center">
							<div class="col-md-3 my-3">
								<a href="/images/comite/membres/originaux/lionel-metraux.jpg" title="Lionel METRAUX" target="_blank">
								<img src="/images/comite/membres/lionel-metraux.jpg" alt="Lionel METRAUX" style="max-width: 240px;"/></a><br/>
								<b>Lionel Métraux</b><br/>
								Animations / Infrastructures
							</div>
							<div class="col-md-3 my-3">
								<a href="/images/comite/membres/originaux/albin-cauderlier.jpg" title="Albin CAUDERLIER" target="_blank">
								<img src="/images/comite/membres/albin-cauderlier.jpg" alt="Albin CAUDERLIER" style="max-width: 240px;"/></a><br/>
								<b>Albin Cauderlier</b><br/>
								Webmaster
							</div>
							<div class="col-md-3 my-3">
								<a href="/images/comite/membres/originaux/sidonie-kohler.jpg" title="Sidonie KOHLER" target="_blank">
								<img src="/images/comite/membres/sidonie-kohler.jpg" alt="Sidonie KOHLER" style="max-width: 240px;"/></a><br/>
								<b>Sidonie Kohler</b><br/>
								Décorations
							</div>
							<div class="col-md-3 my-3">
								<a href="/images/comite/membres/originaux/aline-brunner.jpg" title="Aline BRUNNER" target="_blank">
								<img src="/images/comite/membres/aline-brunner.jpg" alt="Aline BRUNNER" style="max-width: 240px;"/></a><br/>
								<b>Aline Brunner</b><br/>
								Bénévoles
							</div>
						</div>
						<hr class="my-5"/>
						<h2 id="comite_elargi">Comité Elargi</h2>
						<div class="row my-5 text-center">
							<div class="col-md-4 my-3">
								<b>Pierre-Alexandre Marchand</b><br/>
								Ensemble des jeunes<br/>
								Jurys
							</div>
							<div class="col-md-4 my-3">
								<b>Charles-Edouard Marchand</b><br/>
								Major de table
							</div>
							<div class="col-md-4 my-3">
								<b>Joël Vincent</b><br/>
								Annonces / Livret de fête
							</div>
<!-- 							<div class="col-md-3 my-3">
								<b>Maude Chappuis</b><br/>
								Décorations
							</div> -->
						</div>
						<div class="row my-5 text-center">
							<div class="col-md-3 my-3">
								<b>Jean-François Ferrari</b><br/>
								Bénévoles
							</div>
							<div class="col-md-3 my-3">
								<b>Cédric Corbaz</b><br/>
								Banquet / Snack
							</div>
							<div class="col-md-3 my-3">
								<b>Jean-Daniel Martin</b><br/>
								Banquet / Snack
							</div>
							<div class="col-md-3 my-3">
								<b>Vous ?</b><br/>
								<a href="/benevoles/" class="btn btn-primary rounded-pill px-5">
									Faire partie des bénévoles
								</a>
							</div>
						</div>
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
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
	<main class="mt-0">
        <section class="bg-gradient my-4 pt-5">
            <div class="container-fluid py-3">
                <h1 class="text-white">Concours des Sociétés</h1>
            </div>
        </section>
		<section>
			<div class="container-fluid">
				<div class="row">
					<aside class="col-md-2 d-none d-sm-block">
						<nav class="p-0" id="streamer-toc">
							<ul class="list-unstyled navbar-list mb-0"> 
								<li class="nav-item">
									<a href="#lieu" title="" class="nav-link border-left py-3">
										Lieu
									</a>
								</li>
								<li class="nav-item">
									<a href="#horaires_passage" title="" class="nav-link border-left py-3">
										Horiares de Passage
									</a>
								</li>
								<li class="nav-item">
									<a href="#jury" title="" class="nav-link border-left py-3">
										Jury
									</a>
								</li>
								<li class="nav-item">
									<a href="#piece_imposee" title="" class="nav-link border-left py-3">
										Pièce Imposée
									</a>
								</li>
								<li class="nav-item">
									<a href="#reglement" title="" class="nav-link border-left py-3">
										Règlement
									</a>
								</li>
							</ul>
						</nav>
					</aside>
					<div class="col-md-10">
						<h2 id="lieu">Lieu - L'Octogone</h2>
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
						<h3 class="text-center">Le Concours des Sociétés est gratuit et ouvert à tous</h3>
						<hr class="my-5" />
						<h2 id="horaires_passage">Horaires de passages</h2>
						<ul class="timeline">
							<li>
								<b>10h30 - 11h</b>
								<a href="/societes/#bercher_vuarrens">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/echo_du_sauteruz.jpg" style="max-height: 76px;" alt="Echo du Sauteruz"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												Echo du Sauteruz<br/>
												Bercher - Vuarrens
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<b>11h - 11h30</b>
								<a href="/societes/#forel_lavaux">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/forel.png" style="max-height: 76px;" alt="Forel"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												Union Instrumentale<br/>
												Forel
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<b>11h30 - 12h</b>
								<a href="/societes/#echallens">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/lyre_echallens.png" style="max-height: 76px;" alt="Lyre Echallens"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												Harmonie Municipale La Lyre<br/>
												Echallens
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<b>12h - 12h30</b>
								<a href="/societes/#pomy">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/pomy-logo.png" style="max-height: 76px;" alt="La Villageiose - Pomy"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												La Villageoise<br/>
												Pomy
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<b>12h30 - 13h</b>
								<a href="/societes/#cheseaux_sur_lausanne">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/fanfare_de_cheseaux.jpg" style="max-height: 76px;" alt="Fanfare de Cheseaux"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												Fanfare de Cheseaux<br/>
												Cheseaux
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<b>14h - 14h30</b>
								<a href="/societes/#penthalaz_daillens">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/echo_de_la_molombe.png" style="max-height: 76px;" alt="Echo de la Molombe"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												Echo de la Molombe<br/>
												Penthalaz - Daillens
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<b>14h30 - 15h</b>
								<a href="/societes/#puidoux">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/echo_des_rochers_puidoux.jpeg" style="max-height: 76px;" alt="Echo des Roches - Puidoux"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												Echo des Rochers<br/>
												Puidoux
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<b>15h - 15h30</b>
								<a href="/societes/#belmont_sur_lausanne">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/avelyre.png" style="max-height: 76px;" alt="Belmont-sur-Lausanne"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												L'AveLyre<br/>
												Belmont - Cully
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<b>15h30 - 16h</b>
								<a href="/societes/#mezieres">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/fanfare_du_jorat.jpg" style="max-height: 76px;" alt="Fanfare du Jorat"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												Fanfare du Jorat<br/>
												Mézières
											</div>
										</div>
									</div>
								</a>
							</li>
							<li>
								<b>16h - 16h30</b>
								<a href="/societes/#yvonand">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/fanfare_yvonand.png" style="max-height: 76px;" alt="Fanfare d'Yvonand"/>
										</div>
										<div class="col-8">
											<div class="text-uppercase my-3 text-center">
												Corps de Musique d'Yvonand<br/>
												Yvonand
											</div>
										</div>
									</div>
								</a>
							</li>
						</ul>
						<hr class="my-5" />
						<h2 id="jury">Jury</h2>
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/frederic-theoduloz.png" class="w-100" alt="Frédéric Théodoloz"/>
									</div>
									<div class="col-md-8">
										<h4>Frédéric Théodoloz</h4>								
										<p>
											Frédéric Théodoloz a grandi au cœur des fanfares valaisannes au sein de la société de musique La Marcelline de Grône et du Brass Band 13 Etoiles Formation B. Très tôt déjà, il se distingue lors de concours nationaux de solistes et intègre à 15 ans la classe de trombone de M. Roland Schnorhk au Conservatoire Supérieur de Musique de Genève. Il obtient son diplôme professionnel de trombone en 1996 et son 1 er prix de virtuosité en 2000.
										</p>
									</div>
								</div>
								<p>
									Dès lors de 1995 à 2011, il se forge une solide expérience de musicien d'orchestre en se produisant régulièrement avec l'Orchestre de Chambre de Lausanne, l'Orchestre de la Suisse Romande, le Sinfonietta de Lausanne et l’Orchestre de Chambre de Genève. Durant sa carrière de musicien d’orchestre, il occupe successivement les postes de tromboniste à l’Orchestre National de Porto, l’Orchestre Philharmonique de Durban, l’Orchestre Symphonique de la Vallée d’Aoste et l'Orchestre Musique des Lumières.
								</p>
								<p>
									En 2010, il intègre la classe de direction d'ensemble à vent de Monsieur Jean-Claude Kolly et obtient en 2013 son Master of Arts HES-SO in Music à la Haute Ecole de Musique de Lausanne. Il se perfectionne et collabore avec des grands noms de la scène du mouvement brass band tels que Prof. David King, Allan Withington, Robert Childs, James Gourlay et Garry Cutt.
								</p>
								<p>
									De 2012 à 2016, Frédéric Théodoloz dirige le Brass Band Fribourg. Durant cette période, il remporte à deux reprises le titre de vice-champion au Swiss Open Contest de Lucerne et le titre de Champion Suisse des Brass Band au concours national de Montreux en 2012. Ce dernier lui a permis de défendre les couleurs helvétiques aux championnats européens des brass band à Oslo en 2013. De 2009 à 2018, il conduit également l’Echo de la Dent-Blanche des Haudères, brass band de 1 ère catégorie.
								</p>
								<p>
									Outre ses collaborations avec de nombreuses formations en Suisse et à l’étranger (Norvège, France, Italie) en qualité de conseiller musical, chef invité ou jury, Frédéric Théodoloz dirige depuis 2016 l’Orchestre National des Jeunesses Musicales Suisse et collabore avec des solistes de renom tels que Jeroen Berwaerts, Lionel Cottet, et Giovanni di Angeli. Il dirige depuis 2015 La Lyre de Conthey (brass band de catégorie Excellence) et depuis 2018 le Brass Band 13 Etoiles ensemble avec lequel il a déjà remporté le Swiss Open Contest de Lucerne en 2019. Il est également le co-fondateur, avec son ami Ludovic Neurohr, du BPM Festival.
								</p>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/jean-claude-kolly.png" class="w-100" alt="Jean-Claude Kolly"/>
									</div>
									<div class="col-md-8">
										<h4>Jean-Claude Kolly</h4>								
										<p>
											Jean-Claude Kolly est né en 1961 à Fribourg. Il enseigne la direction d'ensembles à vents à
											la Haute Ecole de Musique de Lausanne (filière professionnelle [Bachelor et Master]), au
											Conservatoire de Fribourg (section non-professionnelle) ainsi qu'à Genève dans le cadre de la formation continue pour les professeurs de musique.
										</p>
									</div>
								</div>
								<p>
									Il a étudié le piano et la trompette, puis s'est perfectionné en étudiant les branches théoriques,
									le chant et l'orchestration au Conservatoire de Fribourg. A Lausanne, il a travaillé la direction
									d'orchestre, l’orchestration et la composition sous la conduite de Hervé Klopfenstein et Jean
									Balissat, travail conclu par un diplôme de direction d'orchestre au printemps 1988.
									Il a dirigé pendant 35 ans la Gérinia de Marly, harmonie villageoise qui a progressé afin de
									pouvoir concourir dans la catégorie excellence. Avec la Concordia de Fribourg, son chemin
									long de 25 ans lui permet d'aborder un riche répertoire et de se présenter à certains concours
									nationaux et internationaux.
								</p>
								<p>
									Il est fréquemment invité à diriger diverses formations à vent, notamment, l'Orchestre
									d&#39;Harmonie de Fribourg, l'Orchestre Orpheon (Vaud), l'orchestre d'Harmonie Shostakovich
									(Jura), la Bläserphilharmonie Aargau, l'OFSI (Tessin) et l'Harmonie Nationale des Jeunes.
									Il est jusqu'en juin 2019 encore membre de la commission de musique de l'ASM (Association
									suisse des musiques). Engagé comme expert lors de concours régionaux, cantonaux, fédéraux
									ou internationaux, il est aussi professeur invité à la Haute Ecole de musique de Trossingen
									pour la formation professionnelle de jury pour les concours de musique.
								</p>
							</div>
						</div>
						<!-- <hr class="my-5" />
						<h2 id="piece_imposee">Pièce imposée</h2>
						<p>

						</p>
						<hr class="my-5" />
						<h2 id="reglement">Règlement</h2>
						<p>

						</p> -->
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
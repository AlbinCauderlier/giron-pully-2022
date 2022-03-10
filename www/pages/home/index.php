<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title><?= WEBSITE_TITLE ?></title>
	<?php 
		include_once("common/head.php");
	?>

	<meta name="description" content="Site du Giron des Musiques de Lavaux et du Gros-de-Vaud, le vendredi 20 et samedi 21 mai 2022, à Pully"/>
	<meta name="keywords" content="giron, pully, pully express, lavaux, Gros-de-Vaud, concours, concerts, défilé, parade"/>
</head>
<body id="top">
	<?php 
		include_once("common/header.php");
	?>
	<main>
		<section>
			<div class="container py-5">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center my-5">
							<img src="/images/logo/logo-pully-express-reduced.png" style="max-height:320px;" alt="Pully Express"/>
						</div>
					</div>
					<div class="col-md-6 my-3">
						<h1 class="my-5 text-center"><?= WEBSITE_TITLE ?></h1>
	                    <div class="form-row">
	                        <div class="col-md-6">
	                            <fieldset class="form-group">
	                                <label>Du</label>
	                                <div class="input-group squared">
	                                    <input class="form-control form-control-lg text-right" type="text" value="Vendredi 20 mai 2022" readonly/>
	                                </div>
	                            </fieldset>
	                        </div>
	                        <div class="col-md-6">
	                            <fieldset class="form-group">
	                                <label>au</label>
	                                <div class="input-group squared">
	                                    <input class="form-control form-control-lg text-right" type="text" value="Samedi 21 mai 2022" readonly/>
	                                </div>
	                            </fieldset>
	                        </div>
	                    </div>
		                <div id="clockdiv" class="text-center my-4">
		                	<h2>Départ dans</h2>
							<span class="days"></span> jours - <span class="hours"></span> : <span class="minutes"></span> : <span class="seconds"></span>
						</div>
					</div>
				</div>
				<div class="card shadow" id="banderole">
					<div class="card-body">
						<div class="row">
							<div class="col-md-3 text-center">
								<span class="h1 display-1">🍻</span>
							</div>
							<div class="col-md-9 text-center">
								<h2>Soirée "Fête de la Bière"</h2>
								<h3>Vendredi 20 mai<h3>
								<h4>Apéritif / Repas-concert / 3 Groupes invités et DJ jusqu'au bout de la nuit</h4>
								<a href='//etickets.infomaniak.com/shop/ANgLDw1YqC/' target='_blank' class="btn btn-lg btn-block text-white my-3" rel="nofollow">
									Réserver mes places
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-primary" id="societes">
			<div class="container-fluid">
				<div class="row text-white text-center py-3">
					<div class="col-md-3 my-5 h3">
						<b>12</b><br/>
						sociétés invitées
					</div>
					<div class="col-md-3 my-5 h3">
						<b>340</b><br/>
						musiciens
					</div>
					<div class="col-md-3 my-5 h3">
						<b>6h</b><br/>
						de concerts en accès libre
					</div>
					<div class="col-md-3 my-5 h3">
						<b>250m</b><br/>
						de cortège en ville
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<h2 class="text-center my-5">Programme</h2>
				<div class="row">
					<div class="col-md-6 py-5">
						<h3>Vendredi 20 mai</h3>
						<ul class="timeline">
							<li>
								<b>19h</b>
								<i><span class="float-right"><a href="/plans/#soiree">Salle Omnisports du Collège Arnold Reymond</a></span></i>
								<p class="text-right">
									Ouvert à tous sur réservation
								</p>
								<p class="h3 text-center my-3">Soirée "Fête de la Bière" 🍻</p>
								<a href='//etickets.infomaniak.com/shop/ANgLDw1YqC/' target='_blank' class="btn btn-primary btn-lg btn-block my-3" rel="nofollow">
									Réserver mes places
								</a>
								<p>Apéritif</p>
								<p>Bar et ambiance</p>
								<p>Repas-concert autour de la Choucroute</p>
								<p class="h3 text-center my-5">Concert de l'Ensemble de cuivre Bavaria</p>
								<img src="/images/concerts/ec-bavaria.jpeg" class="w-100" alt="Bavaria"/>
								<p>
									Orchestre régional avec plus de 40 ans de pratique de la musique populaire.<br/>
									<a href="https://www.ec-bavaria.ch" rel="nofollow" title="Site officiel de l'Ensemble Bavaria" target="_blank" rel="nofollow">
										<i data-feather="link"></i>
									</a>
								</p>
								<p class="h3 text-center my-5">Concert d'Anina Buchs</p>
								<img src="/images/concerts/anina-buchs.jpeg" class="w-100" alt="Anina Buchs"/>
								<p>
									Anina Buchs aime la scène et chante des tubes. Elle a grandi avec ses deux sœurs aînées dans la célèbre région de la Gruyère, à plus de 1'000 mètres d'altitude dans les Préalpes suisses. Même enfant, elle aimait chanter et yodler. À l'âge de dix ans, elle remporte le concours de chant de Düdingen et est autorisée à se produire pour la première fois au grand open air Plasselb. La performance était si bonne qu'elle a été submergée par d'autres demandes de renseignements. <br/>
									<a href="https://aninabuchs.ch/" rel="nofollow" title="Site officiel d'Anina Buchs" target="_blank">
										<i data-feather="link"></i>
									</a>
								</p>
								<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FGironpully%2Fposts%2F285703113667645&show_text=true&width=500" width="500" height="373" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
								<br/>
								<p class="h3 text-center my-5">Concert de l'Orchestre Jacky Thomet</p>
								<img src="/images/concerts/jacky-thomet.jpeg" class="w-100" alt="Jacky Thomet"/>
								<p>
									Orchestre de variété jurassien, actif depuis plus de 40 ans, qui a côtoyé un grand nombre d'artistes divers et variés, autant régional qu'international. Habitué des fêtes de la bière, l'orchestre vous fera passer une soirée festive et inoubliable.<br/>
									<a href="https://www.jackythomet.ch/fete-de-la-biere" rel="nofollow" title="Jacky Thomet" target="_blank" rel="nofollow">
										<i data-feather="link"></i>
									</a>
								</p>
								<a href='//etickets.infomaniak.com/shop/ANgLDw1YqC/' target='_blank' class="btn btn-primary btn-lg btn-block my-3" rel="nofollow">
									Réserver mes places
								</a>
							</li>
							<li>
								<b>00h30</b>
								<i><span class="float-right"><a href="/plans/#soiree">Salle Omnisports du Collège Arnold Reymond</a></span></i>
								<p class="text-right">
									Ouvert à tous, 10 CHF et pass sanitaire
								</p>
								<p class="h3 text-center my-3">Soirée DJ et bar à bière</p>
							</li>
						</ul>
					</div>
					<div class="col-md-6 py-5">
						<h3>Samedi 21 mai</h3>
						<ul class="timeline">
							<li>
								<b>8h - 16h</b>
								<i><span class="float-right"><a href="/plans/#concours_des_solistes">Collège Arnold Reymond</a></span></i>
								<p class="text-right">
									Gratuit et ouvert à tous
								</p>
								<p class="h3 text-center my-3">Concours des Solistes 🏆</p>
								<p>
									Ce concours est ouvert à tous les jeunes musiciens des sociétés participantes.
								</p>
								<p class="mb-5 text-right">
									<a href="/concours/" title="Concours des Solistes" class="btn btn-primary">En savoir plus</a>
								</p>
							</li>
							<li>
								<b>9h - 16h</b>
								<i><span class="float-right"><a href="/plans/#concerts_des_societes">Salle de concert l'Otogone</a></span></i>
								<p class="text-right">
									Gratuit et ouvert à tous
								</p>
								<p class="h3 text-center my-3">Concours des Sociétés 🏆</p>
								<p>
									Chaque société présentera le programme de son choix, devant notamment, un jury de professionnels.
								</p>
								<p class="mb-5 text-right">
									<a href="/concours/concours-des-societes/" title="Concours des Solistes" class="btn btn-primary">En savoir plus</a>
								</p>
							</li>
							<li>
								<b>9h - 16h</b>
								<i><span class="float-right">Sur le site du Giron</span></i>
								<p class="text-right">
									Gratuit et ouvert à tous
								</p>
								<p class="h3 text-center my-3">Concerts des Sociétés</p>
								<p>
									
								</p>
							</li>
							<li>
								<b>16h30</b>
								<i><span class="float-right">Parcours dans Pully</span></i>
								<p class="text-right">
									Gratuit et ouvert à tous
								</p>
								<p class="h3 text-center my-3">Concours de Marche 🏆</p>
								<p>
									
								</p>
							</li>
							<li>
								<b>Horaire à définir</b>
								<i><span class="float-right">Sur le site du Giron</span></i>
								<p class="text-right">
									Gratuit et ouvert à tous
								</p>
								<p class="h3 text-center my-3">Concert de l'Ensemble Des Jeunes du Giron</p>
								<p class="mb-5 text-right">
									<a href="/ensemble-des-jeunes/" title="Ensemble des Jeunes" class="btn btn-primary">En savoir plus</a>
								</p>
							</li>
							<li>
								<b>19h</b>
								<i><span class="float-right">Lieu à définir</span></i>
								<p class="text-right">
									Réservé aux musiciens et officiels, sur réservation
								</p>
								<p class="h3 text-center my-3">Banquet Officiel</p>
								<p>
									
								</p>
							</li>
							<li>
								<b>21h</b>
								<i><span class="float-right">Lieu à définir</span></i>
								<p class="text-right">
									Réservé aux musiciens et officiels, sur réservation
								</p>
								<p class="h3 text-center my-3">Bal - Animation Musicale</p>
								<p>
									
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-light" id="societes">
			<div class="container-fluid text-center py-5">
				<div class="row">
					<div class="col-md-3 my-5">
						<a href="/societes/#belmont-sur-lausanne">
							<img src="/images/societes/belmont-sur-lausanne.jpg" style="max-height: 96px;" alt="Belmont-sur-Lausanne"/><br/>
							<div class="text-uppercase my-3">L'Avenir</div>
						</a>
						<h6>Belmont-sur-Lausanne</h6>
					</div>
					<div class="col-md-3 my-5">
						<a href="/societes/#bercher_vuarrens">
							<img src="/images/societes/echo_du_sauteruz.jpg" style="max-height: 96px;" alt="Echo du Sauteruz"/><br/>
							<div class="text-uppercase my-3">L’Echo du Sauteruz</div>
						</a>
						<h6>Bercher-Vuarrens</h6>
					</div>
					<div class="col-md-3 my-5">
						<a href="/societes/#cheseaux_sur_lausanne">
							<img src="/images/societes/fanfare_de_cheseaux.jpg" style="max-height: 96px;" alt="Fanfare de Cheseaux"/><br/>
							<div class="text-uppercase my-3">Fanfare de Cheseaux</div>
						</a>
						<h6>Cheseaux-sur-Lausanne</h6>
					</div>
					<div class="col-md-3 my-5">
						<a href="/societes/#cully">
							<img src="/images/societes/lyre_de_lavaux.png" style="max-height: 96px;" alt="Lyre de Lavaux"/><br/>
							<div class="text-uppercase my-3">La Lyre de Lavaux</div>
						</a>
						<h6>Cully</h6>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 my-5">
						<a href="/societes/#echallens">
							<img src="/images/societes/lyre_echallens.png" style="max-height: 96px;" alt="Lyre Echallens"/><br/>
							<div class="text-uppercase my-3">Harmonie municipale La Lyre</div>
						</a>
						<h6>Echallens</h6>
					</div>
					<div class="col-md-3 my-5">
						<a href="/societes/#forel_lavaux">
							<img src="/images/societes/forel.png" style="max-height: 96px;" alt="Forel"/><br/>
							<div class="text-uppercase my-3">Union instrumentale</div>
						</a>
						<h6>Forel-Lavaux</h6>
					</div>
					<div class="col-md-3 my-5">
						<a href="/societes/#mezieres">
							<img src="/images/societes/fanfare_du_jorat.jpg" style="max-height: 96px;" alt="Fanfaure du Jorat"/><br/>
							<div class="text-uppercase my-3">Fanfare du Jorat</div>
						</a>
						<h6>Mézières</h6>
					</div>
					<div class="col-md-3 my-5">
						<a href="/societes/#penthalaz_daillens">
							<img src="/images/societes/echo_de_la_molombe.png" style="max-height: 96px;" alt="Echo de la Molombe"/><br/>
							<div class="text-uppercase my-3">L’Echo de la Molombe</div>
						</a>
						<h6>Penthalaz-Daillens</h6>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 my-5">
						<a href="/societes/#pomy">
							<img src="/images/societes/pomy-logo.png" style="max-height: 96px;" alt="La Villageiose - Pomy"/><br/>
							<div class="text-uppercase my-3">La Villageoise</div>
						</a>
						<h6>Pomy</h6>
					</div>
					<div class="col-md-3 my-5">
						<a href="/societes/#puidoux">
							<img src="/images/societes/echo_des_rochers_puidoux.jpeg" style="max-height: 96px;" alt="Echo des Roches - Puidoux"/><br/>
							<div class="text-uppercase my-3">Echo des Rochers</div>
						</a>
						<h6>Puidoux</h6>
					</div>
					<div class="col-md-3 my-5">
						<a href="/societes/#pully">
							<img src="/images/societes/corps_de_musique_pully.png" style="max-height: 96px;" alt="Coprs de Musique de Pully"/><br/>
							<div class="text-uppercase my-3">Corps de Musique de Pully</div>
						</a>
						<h6>Pully</h6>
					</div>
					<div class="col-md-3 my-5">
						<a href="/societes/#yvonand">
							<img src="/images/societes/fanfare_yvonand.png" style="max-height: 96px;" alt="Fanfare d'Yvonand"/><br/>
							<div class="text-uppercase my-3">Corps de Musique d'Yvonand</div>
						</a>
						<h6>Yvonand</h6>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php 
		include_once("common/footer.php");
	?>
	<script type="text/javascript" src="/js/home.js"></script>
</body>
</html>
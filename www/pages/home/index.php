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

	<meta property="og:image" content="https://gironpully.ch/images/logo/logo-pully-express-reduced.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Giron 2022 à Pully" />

	<meta property="og:image" content="https://gironpully.ch/images/concerts/ec-bavaria.jpeg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:alt" content="Ensemble de Cuivres Bavaria" />
	<meta property="og:image" content="https://gironpully.ch/images/concerts/anina-buchs.jpeg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:alt" content="Anina BUCHS" />
	<meta property="og:image" content="https://gironpully.ch/images/concerts/jacky-thomet.jpeg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:alt" content="Orchestre de Jacky Thomet" />

	<meta property="og:image" content="https://gironpully.ch/images/societes/belmont-sur-lausanne.jpg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:alt" content="Belmont sur Lausanne" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/echo_du_sauteruz.jpg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:alt" content="Echo du Sauteruz" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/fanfare_de_cheseaux.jpg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:alt" content="Fanfare de Cheseaux" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/lyre_de_lavaux.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Lyre de Lavaux" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/lyre_echallens.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Lyre d'Echallens" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/forel.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Forel" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/fanfare_du_jorat.jpg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:alt" content="Fanfare du Jorat" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/echo_de_la_molombe.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Echo de la Molombe" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/pomy-logo.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="La Villageoise - Pomy" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/echo_des_rochers_puidoux.jpeg" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:alt" content="Echo des Rochers" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/corps_de_musique_pully.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Coprs de Musique de Pully" />
	<meta property="og:image" content="https://gironpully.ch/images/societes/fanfare_yvonand.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Fanfare d'Yvonand" />

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
						<b>10</b><br/>
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
						de concours de marche
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container-fluid">
				<h2 class="text-center my-5">Programme</h2>
				<div class="row">
					<div class="col-md-6 py-5 mx-auto">
						<h3 class="text-center">Vendredi 20 mai</h3>
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
								<p class="h3 text-center my-5">Ensemble de Cuivres Bavaria</p>
								<img src="/images/concerts/ec-bavaria.jpeg" class="w-100" alt="Bavaria"/>
								<p>
									Orchestre régional avec plus de 40 ans de pratique de la musique populaire.<br/>
									<a href="https://www.ec-bavaria.ch" rel="nofollow" title="Site officiel de l'Ensemble Bavaria" target="_blank" rel="nofollow">
										<i data-feather="link"></i>
									</a>
								</p>
								<p class="h3 text-center my-5">Anina Buchs</p>
								<img src="/images/concerts/anina-buchs.jpeg" class="w-100" alt="Anina Buchs"/>
								<p>
									Anina Buchs aime la scène et chante des tubes. Elle a grandi avec ses deux sœurs aînées dans la célèbre région de la Gruyère, à plus de 1'000 mètres d'altitude dans les Préalpes suisses. Même enfant, elle aimait chanter et yodler. À l'âge de dix ans, elle remporte le concours de chant de Düdingen et est autorisée à se produire pour la première fois au grand open air Plasselb. La performance était si bonne qu'elle a été submergée par d'autres demandes de renseignements. <br/>
									<a href="https://aninabuchs.ch/" rel="nofollow" title="Site officiel d'Anina Buchs" target="_blank">
										<i data-feather="link"></i>
									</a>
								</p>
								<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FGironpully%2Fposts%2F285703113667645" height="373" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" class="w-100"></iframe>
								<br/>
								<p class="h3 text-center my-5">Orchestre Jacky Thomet</p>
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
									Ouvert à tous - 10 CHF
								</p>
								<p class="h3 text-center my-3">Soirée DJ et bar à bières</p>
								<div class="row">
									<div class="col-md-4">
										<img src="/images/concerts/yogy.jpg" class="w-100" alt="YOGY"/>
									</div>
									<div class="col-md-8">
										<p>
											Yogy est un amoureux de la Soul, du Funk et du disco. Il vous fera partager sa passion du groove et du dancefloor avec la générosité qui le caractérise.
										</p>
		 								<p>
											La palette de son univers musical fera danser même les plus récalcitrants !
										</p>
										<p>
											Il est LA référence locale pour la disco et la funk.
										</p>
										<p>
											Son approche personnalisée saura répondre à vos exigences les plus pointues. Il va faire de notre soirée un moment inoubliable.
										</p>
										<p>
											Actif depuis de nombreuses années, il est la personne qu’il faut pour ce vendredi soir afin de bien terminer ce premier jour de festivité.
										</p>
										<p>
											Avis à tous les sédentaires, il est temps de venir finir quelques fûts et de vous déhancher avec nous juste après la fête de la bière !
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>					
				</div>
				<h3 class="text-center">Samedi 21 mai</h3>
				<div class="row">
					<div class="col-md-4 py-5">
						<div class="row">
							<div class="col">
								<h4>Collège A. Reymond</h4>
							</div>
							<div class="col-auto text-right">
								<i><a href="/plans/#concours_des_solistes">Plan d'accès au Collège A. Reymond</a></i><br/>
								Gratuit et ouvert à tous
							</div>
						</div>
						<p class="h3 text-center my-3">Concours des Solistes 🏆</p>
						<ul class="timeline">
							<li>
								<b>8h - 13h</b>
								<p>
									Ce concours est ouvert à tous les jeunes musiciens des sociétés participantes.
								</p>
								<p class="mb-5 text-right">
									<a href="/concours/" title="Concours des Solistes" class="btn btn-primary">En savoir plus</a>
								</p>
							</li>
						</ul>

						<p class="h3 text-center my-3">Concerts des Sociétés</p>
						<ul class="timeline">
							<li>
								<b>13h - 13h50</b>
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
								<b>13h50 - 14h30</b>
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
							<li>
								<b>14h30 - 15h10</b>
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
								<b>15h10 - 15h50</b>
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
								<b>15h50 - 16h30</b>
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
								<b>16h30 - 17h10</b>
								<a href="/societes/#mezieres">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/fanfare_du_jorat.jpg" style="max-height: 76px;" alt="Fanfare du Jorat"/><br/>
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
						</ul>

						<p class="h3 text-center mb-3 mt-5 pt-5">Concours de Marche 🏆</p>
						<ul class="timeline">
							<li>
								<b>17h20 - 17h30</b>
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
							<li>
								<b>17h30 - 17h40</b>
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
								<b>17h40 - 17h50</b>
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
								<b>17h50 - 18h</b>
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
								<b>18h - 18h10</b>
								<a href="/societes/#mezieres">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/fanfare_du_jorat.jpg" style="max-height: 76px;" alt="Fanfare du Jorat"/><br/>
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
								<b>18h10 - 18h20</b>
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
								<b>18h20 - 18h30</b>
								<a href="/societes/#echallens">
									<div class="row">
										<div class="col-4">
											<img src="/images/societes/lyre_echallens.png" style="max-height: 76px;" alt="Lyre Echallens"/><br/>
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
						</ul>


						
						<ul class="timeline mt-5">
							<li>
								<b>18h40 - 19h</b>
								<i><span class="float-right">Sur le site du Giron</span></i>
								<p class="text-right">
									Gratuit et ouvert à tous
								</p>
								<p class="h3 text-center my-3">Morceau d'Ensemble</p>
								<p>
									
								</p>
							</li>
							<li>
								<b>19h</b>
								<i><span class="float-right">Salle Omnisports du Collège Arnold Reymond</span></i>
								<p class="text-right">
									Gratuit et ouvert à tous
								</p>
								<p class="h3 text-center my-3">Concert de l'Ensemble Des Jeunes du Giron</p>
								<p class="mb-5 text-right">
									<a href="/ensemble-des-jeunes/" title="Ensemble des Jeunes" class="btn btn-primary">En savoir plus</a>
								</p>
							</li>
							<li>
								<b>20h</b>
								<i><span class="float-right">Salle Omnisports du Collège Arnold Reymond</span></i>
								<p class="text-right">
									A destination des musiciens et officiels
								</p>
								<p class="h3 text-center my-3">Banquet Officiel</p>
								<p>
									
								</p>
							</li>
							<li>
								<b>21h</b>
								<i><span class="float-right">Salle Omnisports du Collège Arnold Reymond</span></i>
								<p class="text-right">
									A destination des musiciens et officiels
								</p>
								<p class="h3 text-center my-3">Bal - Animation Musicale</p>
								<div class="row">
									<div class="col-md-4">
										<img src="/images/concerts/nassim.jpg" class="w-100" alt="Nassim"/>
									</div>
									<div class="col-md-8">
										<p>
											NASSIM a été bercé par la musique dès son plus jeune âge. Au fil des années, sa passion s'est développée. Membre et co-fondateur de Chacun Son Délire, il est derrière les platines depuis plus de 5 ans maintenant !
										</p>
		 								<p>
											C’est avec lui que vous aurez le plaisir de passer la fin de soirée du samedi  avec des musiques “ All Style “. 
										</p>
										<p>
											Entrée gratuite ! 
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-md-4 py-5">
						<div class="row">
							<div class="col">
								<h4 class="mb-4">L'Octogone</h4>
							</div>
							<div class="col-auto text-right">
								<i><a href="/plans/#concerts_des_societes">Plan d'accès à l'Octogone</a></i><br/>
								Gratuit et ouvert à tous
							</div>
						</div>
						<p class="h3 text-center">Concours des Sociétés 🏆</p>
						<!-- <p class="text-right">
							<a href="/concours/concours-des-societes/" title="Concours des Solistes" class="btn btn-primary">En savoir plus</a>
						</p> -->
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
					</div>
					<div class="col-md-4 py-5">
						<div class="row">
							<div class="col">
								<h4 class="mb-5 pb-5">Scène devant la Migros</h4>
							</div>
							<div class="col-auto text-right">
								Gratuit et ouvert à tous
							</div>
						</div>
						<p class="h3 text-center my-4 py-4">Concerts des Sociétés</p>
						<ul class="timeline mt-5">
							<li>
								<b>13h - 13h50</b>
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
								<b>13h50 - 14h30</b>
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
								<b>14h30 - 15h10</b>
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
								<b>15h10 - 15h50</b>
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
								<b>15h50 - 16h30</b>
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
								<b>16h30 - 17h10</b>
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
							<img src="/images/societes/avelyre.png" style="max-height: 96px;" alt="Belmont-sur-Lausanne"/><br/>
							<div class="text-uppercase my-3">L'AveLyre</div>
						</a>
						<h6>Belmont-sur-Lausanne - Cully</h6>
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
					<!-- <div class="col-md-3 my-5">
						<a href="/societes/#cully">
							<img src="/images/societes/lyre_de_lavaux.png" style="max-height: 96px;" alt="Lyre de Lavaux"/><br/>
							<div class="text-uppercase my-3">La Lyre de Lavaux</div>
						</a>
						<h6>Cully</h6>
					</div> -->
					<div class="col-md-3 my-5">
						<a href="/societes/#echallens">
							<img src="/images/societes/lyre_echallens.png" style="max-height: 96px;" alt="Lyre Echallens"/><br/>
							<div class="text-uppercase my-3">Harmonie municipale La Lyre</div>
						</a>
						<h6>Echallens</h6>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 my-5">
						<a href="/societes/#forel_lavaux">
							<img src="/images/societes/forel.png" style="max-height: 96px;" alt="Forel"/><br/>
							<div class="text-uppercase my-3">Union instrumentale</div>
						</a>
						<h6>Forel-Lavaux</h6>
					</div>
					<div class="col-md-4 my-5">
						<a href="/societes/#mezieres">
							<img src="/images/societes/fanfare_du_jorat.jpg" style="max-height: 96px;" alt="Fanfare du Jorat"/><br/>
							<div class="text-uppercase my-3">Fanfare du Jorat</div>
						</a>
						<h6>Mézières</h6>
					</div>
					<div class="col-md-4 my-5">
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
<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Sociétés - <?= WEBSITE_TITLE ?></title>
	<?php 
		include_once("common/head.php");
	?>

	<meta name="description" content="Présentation des 12 sociétés du Giron 2022 à Pully"/>
	<meta name="keywords" content="sociétés, fanfares, giron, pully, pully express, lavaux, Gros-de-Vaud, concours, concerts, défilé, parade"/>

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
<body id="top" data-spy="scroll" data-target="#streamer-toc" data-offset="130">
	<?php 
		include_once("common/header.php");
	?>
	<main>
		<section>
			<div class="container-fluid mt-5 pt-5">
				<div class="row">
					<aside class="col-md-3 d-none d-sm-block">
						<nav class="p-0" id="streamer-toc">
							<ul class="list-unstyled navbar-list mb-0"> 
								<li class="nav-item">
									<a href="#belmont_sur_lausanne" title="" class="nav-link border-left py-3">
										Belmont-sur-Lausanne et Cully
									</a>
								</li>
								<li class="nav-item">
									<a href="#bercher_vuarrens" title="" class="nav-link border-left py-3">
										Bercher-Vuarrens
									</a>
								</li>
								<li class="nav-item">
									<a href="#cheseaux_sur_lausanne" title="" class="nav-link border-left py-3">
										Cheseaux-sur-Lausanne
									</a>
								</li>
								<li class="nav-item">
									<a href="#echallens" title="" class="nav-link border-left py-3">
										Echallens
									</a>
								</li>
								<li class="nav-item">
									<a href="#forel_lavaux" title="" class="nav-link border-left py-3">
										Forel-Lavaux
									</a>
								</li>
								<li class="nav-item">
									<a href="#mezieres" title="" class="nav-link border-left py-3">
										Mézières
									</a>
								</li>
								<li class="nav-item">
									<a href="#penthalaz_daillens" title="" class="nav-link border-left py-3">
										Penthalaz-Daillens
									</a>
								</li>
								<li class="nav-item">
									<a href="#pomy" title="" class="nav-link border-left py-3">
										Pomy
									</a>
								</li>
								<li class="nav-item">
									<a href="#puidoux" title="" class="nav-link border-left py-3">
										Puidoux
									</a>
								</li>
								<li class="nav-item">
									<a href="#pully" title="" class="nav-link border-left py-3">
										Pully
									</a>
								</li>
								<li class="nav-item">
									<a href="#yvonand" title="" class="nav-link border-left py-3">
										Yvonand
									</a>
								</li>
							</ul>
						</nav>
					</aside>
					<div class="col-md-9">
						<h2 id="belmont_sur_lausanne" class="panel">Belmont-sur-Lausanne et Cully</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/avelyre.png" class="societe_blason" alt="L'Avelyre"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>L'AveLyre</h3>
									</div>
									<div class="col-auto">
										<a href="http://www.avenir-belmont.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.facebook.com/Soci%C3%A9t%C3%A9-de-Musique-Lavenir-de-Belmont-sur-Lausanne-293370404068571" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
									</div>
								</div>
								<p>
									C’est sous ce patronyme que se présentent les sociétés de musique L’Avenir de Belmont-sur-Lausanne et La Lyre de Lavaux de Cully. En effet, depuis l’automne 2014, les deux sociétés se sont associées pour la pratique de la musique. Cela leur permet maintenant, vu l’effectif de près de 35 souffleurs, de choisir des titres dans un répertoire plus étoffé et d’interpréter des pièces d’un niveau plus élevé. Preuve en est, lors de la fête cantonale du Brassus, ou nous avons obtenu la 2e place en harmonie 3e division. Depuis maintenant trois ans, Gian-Marco Raffaele tient la baguette de l’ensemble et nous avons remporté un franc succès lors des dernières soirées annuelles. Chaque société a conservé son identité ainsi que son école de musique et déjà plusieurs jeunes musiciens qui en sont issus, ont rejoint nos rangs pour notre plus grand plaisir. Cela nous encourage à poursuivre nos efforts, tout en ayant beaucoup de plaisir à pratiquer notre hobby préféré. A bientôt à Pully pour le giron 2022.
								</p>
							</div>
						</div>
						<h2 id="bercher_vuarrens" class="panel">Bercher-Vuarrens</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/echo_du_sauteruz.jpg" class="societe_blason" alt="L’Echo du Sauteruz"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>L’Echo du Sauteruz</h3>
									</div>
									<div class="col-auto">
										<a href="http://echodusauteruz.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.youtube.com/channel/UClfRz3GcKpREO_ZaByEb3Dg" rel="nofollow" target="_blanck" class="social social-youtube">
											<i data-feather="youtube"></i>
										</a>
										
									</div>
								</div>
								<p>
									La Fanfare « L’Echo du Sauteruz » Bercher/Vuarrens a été fondée en 2017 de la fusion de
									l’Avenir de Bercher et de L’Ondine de Vuarrens.
								</p>
								<p>
									Elle est dirigée à la baguette - de manière énergique et motivée - par notre chef François
									Bernardi.
								</p>
								<p>
									Elle compte une trentaine de membres tous motivés et liés par cette belle chose qu’est la
									musique
								</p>
								<p>
									La musique… n’est-ce pas un joli nom qui emplit nos cœurs de jolis sons ?
									Quelle soit douce et harmonieuse… forte… rapide ou capricieuse, elle enchante toutes les
									oreilles.
								</p>
								<p>
									Avec elle, on n’est pas tous pareils… et on a besoin des uns et des autres pour pouvoir
									former… créer… répéter… hésiter… reprendre… et enfin… répandre cette passion et cette
									amitié qui nous lie… la MUSIQUE
								</p>
							</div>
						</div>
						<h2 id="cheseaux_sur_lausanne" class="panel">Cheseaux-sur-Lausanne</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/fanfare_de_cheseaux.jpg" class="societe_blason" alt="Fanfare de Cheseaux"/>
							</div>
							
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>Fanfare de Cheseaux</h3>
									</div>
									<div class="col-auto">
										<a href="http://www.fcheseaux.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.facebook.com/Fanfare-de-Cheseaux-1120838284601626/" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
										
									</div>
								</div>
								<p>
									La société « Fanfare de Cheseaux » a vu le jour, au courant de l’été 1977.
								</p>
								<p>
									Aujourd’hui, notre fanfare est composée de 19 musiciens, jeunes et moins jeunes, toujours
									motivés et enthousiastes à produire de la musique de cuivre. La Fanfare de Cheseaux
									compte également une école de musique, membre de l’Association Multisite.
								</p>
								<p>
									Sous la houlette de notre directeur Bertil Decosterd, c’est avec fierté que nous nous
									produisons lors de nos activités traditionnelles telles que : nos soirées annuelles, les
									concerts de Noël, diverses Abbaye, Le Giron des Musiques de Lavaux du Gros-de-Vaud, le
									1 er août ainsi que quelques manifestations à Cheseaux.
								</p>
								<p>
									Nous nous réjouissons de participer à ce Giron et souhaitons, d’ores et déjà, plein succès au
									Corps de Musique de Pully dans l’organisation de cette manifestation.
								</p>
								<img src="/images/societes/groupe/cheseaux.jpeg" class="w-100" alt="Photo de groupe de la Fanfare de Cheseaux"/>
							</div>
						</div>
						<h2 id="echallens" class="panel">Echallens</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/lyre_echallens.png" class="societe_blason" alt="La Lyre d'Echallens"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>Harmonie municipale "La Lyre"</h3>
									</div>
									<div class="col-auto">
										<a href="http://www.harmonieechallens.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.facebook.com/lyreechallens/" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
									</div>
								</div>
								<p>
									Fondée en 1923, la Lyre s’est tout d’abord développée en formation Fanfare avant d’adopter sa formation Harmonie en 1991, devenant l’Harmonie municipale d’Echallens
									Composée de près de 60 musiciens, elle dispose d’une instrumentation complète lui permettant d’aborder un répertoire étendu, allant de la musique originale pour orchestre d’harmonie aux transcriptions d’œuvres classiques ou de variétés les plus diverses, ceci pour le plus grand bonheur tant de son public que de ses musiciens.
								</p>
								<p>
									C’est donc une presque centenaire qui se présente cette année au giron de Pully, contrastant avec la moyenne d’âge de ses membres qui flirte avec la trentaine et la quasi-parité entre musiciennes et musiciens.
								</p>
								<p>
									Et qui centenaire dit jubilé que nous ne manquerons pas de fêter en 2023 !
								</p>
							</div>
						</div>
						<h2 id="forel_lavaux" class="panel">Forel Lavaux</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/forel.png" class="societe_blason" alt="Forel"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>Union Instrumentale</h3>
									</div>
									<div class="col-auto">
										<a href="http://www.fanfareforel.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.facebook.com/fanfareforel/" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
									</div>
								</div>
								<p>
									Cumulant 101 années d’histoire dans ses archives, l'Union Instrumentale de Forel poursuit sa route musicale avec passion. Elle compte actuellement une bonne trentaine de membres actifs, mélangeant jeunes adolescents et grands-parents, agriculteurs et étudiants, se réunissant chaque mercredi soir pour partager un moment musical et amical. Comme son nom ne l’indique pourtant pas, elle dispose en fait d’un bassin de population qui recouvre également la Commune voisine de Savigny.
								</p>
								<p>
									Elle évolue en première catégorie Brass Band, et se produit régulièrement, que ce soit pour des services officiels de nos deux communes (Forel et Savigny), ou lors de concerts divers comme nos soirées annuelles au début de chaque année. La société participe régulièrement aux fêtes régionales, cantonales et fédérales, où elle obtient des résultats honorables. En outre, quelques sorties en dehors du canton et à l'étranger ont contribué à resserrer les liens d'amitié qu'il existe entre musiciennes et musiciens.
								</p>
								<p>
									Nous vous encourageons à venir découvrir notre société vivante dynamique, tout en restant attachée aux traditions de la musique instrumentale.
								</p>
								<p>
									Après deux années malheureuses sans giron, l’Union Instrumentale de Forel (Lavaux), dirigée par Monsieur Stéphane Duboux, se réjouit de participer au Giron des Musiques de Lavaux et du Gros-de-Vaud à Pully.
								</p>
								<img src="/images/societes/groupe/forel.jpg" class="w-100" alt="Union Instrumentale de Forel Lavaux"/>
							</div>
						</div>
						<h2 id="mezieres" class="panel">Mézières</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/fanfare_du_jorat.jpg" class="societe_blason" alt="Fanfare du Jorat"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>Fanfare du Jorat</h3>
									</div>
									<div class="col-auto">
										<a href="https://fanfare-du-jorat.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.facebook.com/groups/fanfaredujorat/" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
									</div>
								</div>
								<p>
									Fondée en 1896, la Fanfare du Jorat a soufflé ses 125 bougies en septembre 2021.
								</p>
								<p>
									Composée d’une trentaine de musiciennes et musiciens, notre société anime les diverses fêtes
									villageoises du Jorat. Elle évolue en 2e division dans la catégorie Brass Band lors des concours
									cantonaux et fédéraux.
								</p>
								<p>
									Depuis l’automne 2020, la direction musicale a été confiée à Monsieur Pascal Braillard. Musicien
									professionnel, trompettiste et enseignant, il mène l’ensemble avec talent et passion.
									Notre École de musique compte une vingtaine d’élèves. Leur formation instrumentale est assurée
									par des enseignants professionnels.
								</p>
								<p>
									Nous nous réjouissons de venir dans le Lavaux afin de partager de beaux moments musicaux et
									amicaux. Nous souhaitons plein succès au <i>Corps de Musique de Pully</i> pour l’organisation du Giron
									2022.
								</p>
								<img src="/images/societes/groupe/mezieres.jpg" class="w-100" alt="Fanfare du Jorat - Mezieres"/>
							</div>
						</div>
						<h2 id="penthalaz_daillens" class="panel">Penthalaz-Daillens</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/echo_de_la_molombe.png" class="societe_blason" alt="Echo de la Molombe"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>L’Echo de la Molombe</h3>
									</div>
									<div class="col-auto">
										<a href="http://www.echodelamolombe.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.facebook.com/%C3%89cho-de-la-Molombe-Penthalaz-Daillens-103444491230074/" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
									</div>
								</div>
								<p>
									La Société de musique L’Echo de La Molombe Penthalaz-Daillens compte 36 musiciens âgés de 12 à
									80 ans. Elle est née de l’union de La Lyre de Daillens et de La Villageoise de Penthalaz et fête ses 10 ans cette année.
								</p>
								<p>
									Sous la direction de Jean-Pierre Bourquin, nos activités musicales se déroulent principalement sur
									nos deux communes : concerts annuels, participation aux fêtes villageoises, abbayes, 1 er août ou
									encore concert de Noël.
								</p>
								<p>
									Nous accordons une grande importance à la formation des jeunes musiciens. Ainsi, notre école de
									musique, membre de l’association « Multisite », compte environ 40 élèves. En plus de
									l’enseignement des cuivres, de la flûte traversière, de la clarinette, de la batterie et des percussions, nous proposons à présent, des cours d’initiation musicale.
								</p>
								<img src="/images/societes/groupe/penthalaz-daillens.jpg" class="w-100" alt="Echo de la Molombe"/>
							</div>
						</div>
						<h2 id="pomy" class="panel">Pomy</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/pomy-logo.png" class="societe_blason" alt="La Villageoise"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>La Villageoise</h3>
									</div>
									<div class="col-auto">
										<a href="https://lavillageoisedepomy.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.facebook.com/lavillageoisedepomy/" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
										<a href="https://www.instagram.com/lavillageoisedepomy/?hl=fr" rel="nofollow" target="_blanck" class="social social-instagram">
											<i data-feather="instagram"></i>
										</a>
									</div>
								</div>
								<p>
									Musique, amitié et partage (...et quelques parties de chibre et après-rép') : voici ce qui conduit les musiciennes et musiciens de <i>La Villageoise</i> à leur local de répétition tous les mardis soir.
								</p>
								<p>
									Fondée en 1947 (nous soufflons nos 75 bougies cette année) et composée d'une trentaine de musiciens et tambours, la fanfare <i>La Villageoise</i> de Pomy évolue en 3ème division. Depuis de nombreuses et joyeuses années, Yves HURLIMANN dirige l'ensemble avec savoir-faire et humour; et c'est Jérôme RICHARDET qui est à la tête de son comité. La relève de la société est assurée grâce à l' <a href="https://www.empy.ch">Ecole de Musique Pomy Yvonand (EMPY)</a>.
								</p>
								<p>
									Fière de son nouveau drapeau inauguré en 2021, <i>La Villageoise</i> se réjouit de vous retrouver
									à Pully ce printemps ! ...et rendez-vous sur www.lavillageoisedepomy.ch pour suivre notre
									actualité ! Après avoir dû reporter nos soirées annuelles cette année, nous sommes
									impatients de vous convier à nos 75 ans ! A vos agendas !
								</p>
								<p>
									<i>La Villageoise</i> souhaite plein succès au <i>Corps de Musique de Pully</i> pour ce giron 2022 !
								</p>
							</div>
						</div>
						<h2 id="puidoux" class="panel">Puidoux</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/echo_des_rochers_puidoux.jpeg" class="societe_blason" alt="Echo des Rochers"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>L'Echo des Rochers</h3>
									</div>
									<div class="col-auto">
										<a href="http://www.echo-des-rochers.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.facebook.com/echorochers/" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
									</div>
								</div>
								<p>
									La Fanfare Echo des Rochers de Puidoux fut officiellement fondée le 5 février 1947. Le nom de notre ensemble voit son origine dans l'écho renvoyé par les rochers qui surplombent la forêt du Crêt du They au Mont-Cheseaux lorsque la société donnait ses premiers concerts.
								</p>
								<p>
									Notre formation dirigée par M. Antoine Rabut évolue actuellement en 2 ème division Brass Band et compte dans ses rangs, 34 musiciennes et musiciens. La section tambour est, quant à elle, instruite par M. Vincent Vuilleumier, elle est forte de 3 tambours. Malgré ses 75 ans d’existence, la société est plutôt jeune puisque la moyenne d’âge de ses membres ne dépasse pas 35 ans. Pour perdurer, une société doit former une relève.
								</p>
								<p>
									Notre école de musique est rattachée au Multisite. Nous avons différentes classes ouvertes, notamment initiation musicale, cours de percussion, de tambour et d’instruments de cuivre. Si vous avez un quelconque intérêt, il reste de la place, on vous accueille à bras ouverts.
								</p>
								<p>
									Après un petit calcul, vous aurez noté que 2022 sera une année particulière pour notre ensemble puisque nous fêtons notre jubilaire. Pour souffler nos 75 bougies, nous allons nous offrir un nouvel habit d’apparat. Ce nouvel uniforme, le 5 ème depuis la création de la société, sera inauguré le 18 septembre 2022. Avant ces festivités, nous organisons le 19 juin, une balade gourmande, une série de petits concerts dans la commune de Puidoux, puis un loto le 17 septembre. Vous trouverez de plus amples informations sur notre site www.echo-des-rochers.ch.
								</p>
								<p>
									Comme vous l'aurez compris, à Puidoux, pays des amoureux, notre fanfare reste jeune et dynamique. On y pratique l'art de la musique avec ferveur. Enfin, nous ne saurions terminer cette présentation sans formuler tous nos vœux de succès au Corps de Musique de Pully pour l’organisation de ce Giron.
								</p>
							</div>
						</div>
						<h2 id="pully" class="panel">Pully</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/corps_de_musique_pully.png" class="societe_blason" alt="Corps de Musique Pully"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>Corps de Musique de Pully</h3>
									</div>
									<div class="col-auto">
										<a href="http://fanfarepully.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://facebook.com/Corps-de-Musique-de-Pully-625994427473001/" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
										<a href="https://www.instagram.com/fanfarepully/" rel="nofollow" target="_blanck" class="social social-instagram">
											<i data-feather="instagram"></i>
										</a>
									</div>
								</div>
								<p>
									Chez nous, la fanfare, c'est bonnard !
								</p>
								<p>
									Existant depuis le 1er août 1901, le <i>Corps de Musique de Pully</i>, de formation Brass Band, est certes la plus vieille société de Pully, mais la mentalité y est tout autre. Tous les jeudis soirs, c'est un véritable mix de générations qui se retrouve au prieuré pour jouer ensemble, sous la baguette d'un chef plein d'entrain : Stéphane PECORINI.
								</p>
								<p>
									En tant que fanfare municipale de la Ville de Pully, nous participons activement à la vie puillérane, en animant musicalement diverses manisfestations communales et en organisant notre soirée annuelle.
								</p>
								<p>
									Le Corps de Musique de Pully est fier de pouvoir assurer sa relève grâce à son école de musique, membre de l'école de musique multisite.
								</p>
							</div>
						</div>
						<h2 id="yvonand" class="panel">Yvonand</h2>
						<div class="row my-5">
							<div class="col-md-3">
								<img src="/images/societes/fanfare_yvonand.png" class="societe_blason" alt="Corps de Musique d'Yvonand"/>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col">
										<h3>Corps de Musique d'Yvonand</h3>
									</div>
									<div class="col-auto">
										<a href="https://fanfareyvonand.ch" rel="nofollow" target="_blanck" class="social social-website">
											<i data-feather="link"></i>
										</a>
										<a href="https://www.facebook.com/cmyvonand/" rel="nofollow" target="_blanck" class="social social-facebook">
											<i data-feather="facebook"></i>
										</a>
									</div>
								</div>
								<p>
									Le corps de Musique est né le 25 mars 1920 de la fusion de l’Avenir et de l’Espérance, deux petites
									fanfares en activité à Yvonand au début du siècle passé.
								</p>
								<p>
									La formation regroupe une trentaine de musiciens, complétée par des tambours. La plupart des
									membres proviennent d’Yvonand et des villages alentours (Molondin, Démoret, Donneloye, Bioley-
									Magnoux). L’ensemble joue en formation Brass Band en troisième division.
								</p>
								<p>
									Depuis 2018, La direction musicale de notre société est assurée par M. Nicolas Mognetti,
									saxophoniste talentueux qui notamment remporté en 2016 le titre de champion suisse junior du
									Slow Melody Contest et en 2017 le premier prix du concours suisse des solistes et petits dans la
									catégorie d’ensembles de bois.
								</p>
								<p>
									Pour la formation de ses jeunes, l’école de musique a groupé ses forces avec celle de Pomy pour
									fonder l’école de musique de Pomy-Yvonand (EMPY).
								</p>
								<p>
									C’est en 2020 que nous aurions dû fêter notre centenaire lors du Giron des Musiques du Gros-de-
									Vaud et du Lavaux prévu en mai à Yvonand. Après deux reports pour des raisons que tout le monde
									connaît, nous avons enfin pu mettre sur pieds nos rencontres musicales en septembre 2021 où les
									musiciens présents ont eu grand plaisir à se retrouver à nouveau pour la première fois depuis plus de 2 ans.
								</p>
								<p>
									Nous souhaitons au Corps de Musique de Pully un superbe giron sans contraintes et que la fête soit
									belle.
								</p>
								<img src="/images/societes/groupe/yvonand.jpeg" class="w-100" alt="Yvonand"/>
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
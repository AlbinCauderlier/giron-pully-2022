<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Concours - <?= WEBSITE_TITLE ?></title>
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
				<h2>Planning</h2>
				<ul class="timeline">
					<li>
						<b>21.01.2022</b>
						<i><span class="float-right">Sur cette page</span></i>
						<p>Ouverture des inscriptions</p>
					</li>
					<li>
						<b>21.02.2022</b>
						<p>Limite de retours des inscriptions et partitions</p>
					</li>
					<li>
						<b>21.04.2022</b>
						<i><span class="float-right">Sur cette page</span></i>
						<p>Publication des horaires de passage Piano pour les répétitions</p>
					</li>
					<li>
						<b>07.05.2022</b>
						<i><span class="float-right">Echallens</span></i>
						<p>
							1ère répétition Piano<br/>
							Répétition de l'Ensemble des jeunes toute la matinée (9h - 12h env.)
						</p>
					</li>
					<li>
						<b>14.05.2022</b>
						<i><span class="float-right">Pully</span></i>
						<p>
							2e répétition Piano<br/>
							Répétition de l'Ensemble des jeunes toute la journée (9h - 16h env.)
						</p>
					</li>
					<li>
						<b>07 ou 20.05.2022</b>
						<i><span class="float-right">Sur cette page</span></i>
						<p>Publication des horaires de passage au concours</p>
					</li>
					<li>
						<b>21.05.2022</b>
						<i><a href="#college_arnold_reymond" class="float-right">Collège Arnold Reymond</a></i>
						<p>Passages</p>
					</li>
					<li>
						<b>Date à définir</b>
						<i><span class="float-right">Sur cette page</span></i>
						<p>Publication des résultats</p>
					</li>
				</ul>
				<hr class="my-5"/>
				<h2>Concours</h2>
				<h4 class="mt-5">Inscription</h4>
				<p>
					Merci d'envoyer le formulaire ci-dessous, avec 2 copies des partitions, avant le 21.02.2022, à l'adresse postale indiquée.
					<!-- Merci d'envoyer le formulaire ci-dessous, avec 2 copies des partitions, avant le 21.02.2022 : <br/>
					- soit par e-mail, en pièce-jointe PDF à <a href="mailto:concours@gironpully.ch">concours@gironpully.ch</a> (toutes les données seront détruites après le giron)<br/>
					- soit par courrier postal, à l'adresse indiquée dans le formulaire.<br/> -->
				</p>
				<!-- <b>Envoi des partitions</b>
						<p>
							Que l'inscription soit par e-mail ou par courrier postal, les partitions devront être envoyées par courrier postal à l'adresse indiquée.
						</p> -->
				<h4 class="mt-5">Instruments à vent</h4>
				<div class="row">
					<div class="col-md-6">
						<h5 class="text-center">Soliste</h5>
						<a href="/ressources/concours-des-solistes/2022-Bulletin-inscription-I_A-D.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
							Formulaire d'inscription "Soliste, instruments à vent" (I_A-D)
						</a>
					</div>
					<div class="col-md-6">
						<h5 class="text-center">Petit ensemble</h5>
						<a href="/ressources/concours-des-solistes/2022-Bulletin-inscription-I_E-F.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
							Formulaire d'inscription "Ensemble, instruments à vent" (I_E-F)
						</a>
					</div>
				</div>
				<h4 class="mt-5">Batterie et percussion</h4>
				<div class="row">
					<div class="col-md-4">
						<h5 class="text-center">Soliste - Batterie</h5>
						<a href="/ressources/concours-des-solistes/2022-Bulletin-inscription-B_A-D.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
							Formulaire d'inscription "Soliste - Batterie" (B_A-D)
						</a>
					</div>
					<div class="col-md-4">
						<h5 class="text-center">Soliste - Percussion</h5>
						<a href="/ressources/concours-des-solistes/2022-Bulletin-inscription-P_A-D.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
							Formulaire d'inscription "Soliste - Percussion" (P_A-D)
						</a>
					</div>
					<div class="col-md-4">
						<h5 class="text-center">Petit ensemble - Percussion</h5>
						<a href="/ressources/concours-des-solistes/2022-Bulletin-inscription-P_E-F.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
							Formulaire d'inscription "Petit ensemble - Percussion" (P_E-F)
						</a>
					</div>
				</div>
				<p>Matériel à disposition :</p>
				<ul>
					<li>1x Batterie Complète</li>
					<li>4x Timbales</li>
					<li>1x Xylophone (3 octaves 1/2)</li>
					<li>1x Marimba (4.3 octaves)</li>
					<li>1x Vibraphone</li>
				</ul>
				<div class="row mt-5 mb-3">
					<div class="col">
						<h4>Tambour</h4>
					</div>
					<div class="col-auto">
						<a class="btn btn-primary" role="button" href="/ressources/principes_imposes_tambours.pdf" target="_blank">
							Principes imposés aux Tambours
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h5 class="text-center">Soliste - Tambour</h5>
						<a href="/ressources/concours-des-solistes/2022-Bulletin-inscription-T_A-D.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
							Formulaire d'inscription "Soliste - Tambour" (T_A-D)
						</a>
					</div>
					<div class="col-md-6">
						<h5 class="text-center">Petit ensemble - Tambour</h5>
						<a href="/ressources/concours-des-solistes/2022-Bulletin-inscription-T_E-BA.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
							Formulaire d'inscription "Petit ensemble - Tambour" (T_E-BA)
						</a>
					</div>
				</div>
				<hr class="my-5"/>
				<h2 id="ensemble_des_jeunes">Ensemble des Jeunes du Concours</h2>
				<p>
					Voici ci-dessous le formulaire d'inscription à retourner avec l'inscription au concours
				</p>
				<a href="/ressources/2022-Inscription-Ensemble-des-jeunes-individuel.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
					Formulaire d'inscription à l'Ensemble des Jeunes du Concours
				</a>
				<hr class="my-5"/>
				<div class="row mt-5 mb-3">
					<div class="col-md">
						<h2>Règlement</h2>
					</div>
					<div class="col-md-auto">
						<img src="/images/logo-scmv.jpeg" style="max-height:80px;" alt="SMCV"/>
						<img src="/images/logo_aem-scmv.jpeg" style="max-height:80px;" alt="AEM SMCV"/>
					</div>
				</div>
				<a class="btn btn-block btn-primary btn-lg" role="button" href="/ressources/giron-pully-reglement-cvspe-290621.pdf" target="_blank">
					Règlement des Concours Vaudois des Solistes et Petits Ensembles
				</a>
				<hr class="my-5"/>
				<h2>Horaires des répétitions</h2>
				<div class="text-center">
					<label>Publication à venir</label>
				</div>
				<hr class="my-5"/>
				<h2 id="college_arnold_reymond">Accès - Collège Arnold Reymond</h2>
				<div class="mb-5" style="width: 100%">
					<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5491.509583899585!2d6.660116!3d46.512964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7603449c2ac3d971!2sColl%C3%A8ge%20Arnold%20Reymond!5e0!3m2!1sfr!2sch!4v1625224032901!5m2!1sfr!2sch"></iframe>
				</div>
				<hr class="my-5"/>
				<h2>Horaires de passage</h2>
				<div class="text-center">
					<label>Publication à venir courant mai 2022</label>
				</div>
				<hr class="my-5"/>
				<h2>Présentation des pianistes</h2>
				<div class="row">
					<div class="col-md-6">
						<h4>Véronique Piller</h4>
						<p>
							Professeure au Conservatoire de Fribourg, elle se passionne dès son jeune âge
							pour l’accompagnement, d’abord dans le cercle familial puis rapidement au-
							delà. Mettre en valeur le soliste ou le chœur, anticiper les intentions musicales
							de l’exécutant-e, soutenir le/la chef.fe dans son travail, voilà ce qu’elle apprécie
							dans cette activité toujours variée et passionnante.
						</p>
						<p>
							Véronique Piller est très active en tant qu’accompagnatrice de divers chanteurs
							et chœurs amateurs et professionnels (SingTonic, Fa7, Chœur de Chambre de
							l’Université de Fribourg (CCUF), Chœur de la Radio de Lausanne, Chœur
							symphonique de Fribourg, ensemble Café-Café, Opéra d’Avenches, Opéra de
							Fribourg, Stadttheater Bern, etc.). Avec le pianiste Philippe Morard, elle a fondé
							le duo Philevero en 2019 (répertoire (classique) piano 4 mains et deux pianos).
							Sa polyvalence va du classique au jazz, en passant par le gospel et la chanson
							française. Elle a par exemple accompagné Maxime Le Forestier en décembre
							2015. Elle accompagne nombre d’examens au Conservatoire de Fribourg, tant
							dans la section classique que dans la section jazz, et fonctionne parfois comme
							experte pour les examens HEMU pour les examens de « piano deuxième
							instrument ».
						</p>
						<p>
							Elle a fondé et dirigé durant plusieurs années son propre trio de jazz, le
							Véronique Piller Trio, pour lequel elle a écrit toutes les compositions. Avec ce
							groupe, elle a donné de nombreux concerts en Suisse et enregistré le CD
							« Gloups ». Elle joue régulièrement dans divers petits ensembles de jazz
							(notamment avec le Dixieland Bull’s Band, pour une série de concerts dans les
							CO bullois) ainsi que dans des big bands.
						</p>
						<p>
							On lui doit aussi la composition de musique de théâtre (Le Petit Théâtre,
							Théâtre de Vidy, Théâtre de Carouge, Espace Nuithonie, Aire du Théâtre),
							notamment avec la compagnie Geneviève Pasquier-Nicolas Rossier, Gérard
							Demierre ou encore Benjamin Knobil. Lauréate d’une bourse Covid de la Ville
							de Fribourg, elle a créé avec Camille Piller un spectacle pour les écoles,
							présenté avec succès à MEMO au printemps dernier. Elle anime régulièrement
							des workshops musicaux dans des écoles de théâtre professionnelles (Ecole des
							Teintureries, La Manufacture Lausanne, Conservatoire de Genève), et
							accompagne des Cafés Littéraires du Théâtre des Osses. Ayant étudié la
							littérature à l’université de Dijon, Véronique Piller apprécie énormément le
							mélange musique – texte, qu’elle trouve particulièrement inspirant.
						</p>
						<p>
							Elle a dirigé de 2007 à 2013 le SAN Big Band de Payerne, et anime des ateliers
							et des camps pour les jeunes musiciens (Jeunesses Musicales Suisses, groupe
							Jazz-13, ateliers de comédie musicale, atelier choral avec Pascal Mayer en août
							2021, etc.). Elle collabore depuis plusieurs années avec Blaise Héritier pour des
							projets avec l’Ensemble de Cuivres du Jura, le chœur Evoca et la soliste
							Jessanna Nemitz (programmes Queen/Brel, Piaf/Abba, Aznavour/Beatles,
							Bernstein, Gershwin). Elle est membre du MJBB (Max Jendly Big Band), dont
							elle apprécie l’éclectisme musical (compositions originales, programme Miles
							Davis avec Matthieu Michel et Roger Jendly, programme avec orchestre
							symphonique à venir). Elle collabore aussi régulièrement à des Open Mic
							(soirées de comédie musicale) à Lausanne avec une jeune équipe spécialisée
							dans ce style.
						</p>
						<p>
							A côté de ses nombreuses activités de musicienne d’orchestre,
							accompagnatrice et professeure, Véronique Piller est arrangeuse (spectacle
							Starmania, hommage à Brel, etc., et divers petits ensembles) et compositrice
							(pièces pour piano publiées chez Schott, Nepomuk-Breitkopf et Bim;
							compositions pour le Choeur de Jade, Les Marmousets, le Concours Jeune
							Musique, etc.). Elle a également traduit en français la méthode « Blues Piano »
							de Tim Richards, publiée chez Schott.
						</p>
						<p>
							L’arrêt forcé des concerts dû aux mesures Covid l’a incitée à développer des
							improvisations pianistiques de genre haiku, avec le désir constant de
							surprendre et de toucher : recherche de séries d’intervalles, de polytonalité,
							d’harmonies surprenantes induites par la conduite des voix, faisant surgir de
							petits instantanés musicaux. On peut les entendre sur Soundcloud. Elle a
							également enregistré durant ce temps-là une série de duos de jazz « first take »
							avec le clarinettiste Michel Weber. Toutes ces créations musicales étaient (et
							sont toujours) proposées en ligne, afin de maintenir le lien.
						</p>
						<p>
							Elle finit de composer une pièce pour violon et piano et envisage d’écrire une
							pièce à 4 mains ou deux pianos pour le duo Philevero. Elle jouera
							prochainement les Carmina Burana avec le CCUF et Pascal Mayer, dans la
							version pour deux pianos avec Jérôme Kuhn.
						</p>
					</div>
					<div class="col-md-6">
						<h4>Christelle Matthey</h4>
						<p>
							Christelle Matthey commence l'étude du piano à l'âge de 5 ans et obtient en 2006 un Diplôme
							d'Enseignement dans la classe de Nicolas Farine à La Chaux-de-Fonds.
							Durant ses études, Christelle est lauréate de deux prix d'accompagnement
							au concours Suisse de musique pour la jeunesse ainsi que du prix du
							Lyceum Club en 2005.
						</p>
						<p>
							Elle se perfectionne ensuite à la Musikchochule de Lucerne auprès de
							Hiroko Sakagami et obtient en janvier 2011 un Master of Arts en
							interprétation musicale. Depuis ses études en outre-Sarine, elle a eu
							l'occasion de se produire à plusieurs reprises, notamment en trio, ainsi
							qu'en soliste avec l'orchestre de Menzingen.
						</p>
						<p>
							Depuis 2011, elle accompagne les concours d’entrées à l’Ensemble
							Symphonique Neuchâtelois. Elle affectionne également la direction de
							choeur, activité qu'elle a pratiqué pendant quelques années avec
							différentes chorales de la région.
						</p>
						<p>
							Elle enseigne depuis septembre 2012 à l’école de musique de Pully.
						</p>
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
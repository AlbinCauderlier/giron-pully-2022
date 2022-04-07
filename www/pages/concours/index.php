<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Concours des Solistes - <?= WEBSITE_TITLE ?></title>
	<?php 
		include_once("common/head.php");
	?>

	<meta name="description" content="Concours des Solistes du Giron Pully 2022"/>
	<meta name="keywords" content="giron, pully, pully express, lavaux, Gros-de-Vaud, concours, concerts, défilé, parade"/>
</head>
<body id="top" data-spy="scroll" data-target="#streamer-toc" data-offset="130">
	<?php 
		include_once("common/header.php");
	?>
	<main class="mt-0">
        <section class="bg-gradient my-4 pt-5">
            <div class="container-fluid py-3">
                <h1 class="text-white">Concours des Solistes</h1>
            </div>
        </section>
		<section>
			<div class="container-fluid">
				<div class="row">
					<aside class="col-md-2 d-none d-sm-block">
						<nav class="p-0" id="streamer-toc">
							<ul class="list-unstyled navbar-list mb-0"> 
								<li class="nav-item">
									<a href="#planning" title="" class="nav-link border-left py-3">
										Planning
									</a>
								</li>
								<!-- <li class="nav-item">
									<a href="#inscriptions" title="" class="nav-link border-left py-3">
										Inscriptions
									</a>
								</li> -->
								<li class="nav-item">
									<a href="#ensemble_des_jeunes" title="" class="nav-link border-left py-3">
										Ensemble des Jeunes du Concours
									</a>
								</li>
								<li class="nav-item">
									<a href="#reglement" title="" class="nav-link border-left py-3">
										Règlement
									</a>
								</li>
								<li class="nav-item">
									<a href="#horaires_repetitions" title="" class="nav-link border-left py-3">
										Horaires des répétitions
									</a>
								</li>
								<li class="nav-item">
									<a href="#acces_college" title="" class="nav-link border-left py-3">
										Accès - Collège Arnold Reymond
									</a>
								</li>
								<li class="nav-item">
									<a href="#horaires_passage" title="" class="nav-link border-left py-3">
										Horaires de passage
									</a>
								</li>
								<li class="nav-item">
									<a href="#pianistes" title="" class="nav-link border-left py-3">
										Présentation des pianistes
									</a>
								</li>
								<li class="nav-item">
									<a href="#jurys" title="" class="nav-link border-left py-3">
										Présentation des jurys
									</a>
								</li>
							</ul>
						</nav>
					</aside>
					<div class="col-md-10">
						<h2 id="planning">Planning</h2>
						<ul class="timeline">
							<!-- <li>
								<b>21.01.2022</b>
								<i><span class="float-right">Sur cette page</span></i>
								<p>Ouverture des inscriptions</p>
							</li> -->
							<!-- <li>
								<b>21.02.2022</b>
								<p>Limite de retours des inscriptions et partitions</p>
							</li> -->
							<!-- <li>
								<b>21.04.2022</b>
								<i><span class="float-right">Sur cette page</span></i>
								<p>Publication des horaires de passage Piano pour les répétitions</p>
							</li> -->
							<li>
								<b>07.05.2022</b>
								<i><span class="float-right">Echallens</span></i>
								<p>
									9h - 13h - 1ère répétition Piano<br/>
									9h - 12h - Répétition de l'Ensemble des jeunes
								</p>
							</li>
							<li>
								<b>14.05.2022</b>
								<i><span class="float-right">Pully</span></i>
								<p>
									9h - 13h - 2e répétition Piano<br/>
									9h - 12h - Répétition de l'Ensemble des jeunes
								</p>
							</li>
							<li>
								<b>20.05.2022</b>
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
						<!-- <hr class="my-5"/>
						<h2 id="inscriptions">Inscription</h2>
						<p>
							Merci d'envoyer le formulaire ci-dessous, avec 2 copies des partitions, avant le 21.02.2022, à l'adresse postale indiquée.
						</p>
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
						</div> -->
<!-- 						<hr class="my-5"/>
						<h2 id="ensemble_des_jeunes">Ensemble des Jeunes du Concours</h2>
						<p>
							Voici ci-dessous le formulaire d'inscription à retourner avec l'inscription au concours
						</p>
						<a href="/ressources/2022-Inscription-Ensemble-des-jeunes-individuel.pdf" class="my-4 btn btn-primary btn-block" target="_blank">
							Formulaire d'inscription à l'Ensemble des Jeunes du Concours
						</a> -->
						<hr class="my-5"/>
						<div class="row mt-5 mb-3">
							<div class="col-md">
								<h2 id="reglement">Règlement</h2>
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
						<h2 id="horaires_repetitions">Horaires des répétitions</h2>
						<h4 class="my-4">Plan d'accès Echallens</h4>
						<img src="/images/concours/echallens.png" class="w-100" alt="Plan d'accès Echallens"/><br/>
						<h4 class="my-4">Plan d'accès Pully</h4>
						<div class="mb-5" style="width: 100%">
							<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5491.509583899585!2d6.660116!3d46.512964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7603449c2ac3d971!2sColl%C3%A8ge%20Arnold%20Reymond!5e0!3m2!1sfr!2sch!4v1625224032901!5m2!1sfr!2sch"></iframe>
						</div>
						<a href="/ressources/concours-des-solistes/horaire-repetition-piano.pdf" class="my-4 btn btn-primary btn-block btn-lg" target="_blank">
							Horaires des répétitions avec les pianistes
						</a>
						<hr class="my-5"/>
						<h2 id="acces_college">Accès - Collège Arnold Reymond</h2>
						<div class="mb-5" style="width: 100%">
							<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5491.509583899585!2d6.660116!3d46.512964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7603449c2ac3d971!2sColl%C3%A8ge%20Arnold%20Reymond!5e0!3m2!1sfr!2sch!4v1625224032901!5m2!1sfr!2sch"></iframe>
						</div>
						<hr class="my-5"/>
						<h2 id="horaires_passage">Horaires de passage</h2>
						<div class="text-center">
							<label>Publication à venir courant mai 2022</label>
						</div>
						<hr class="my-5"/>
						<h2 id="pianistes">Présentation des pianistes</h2>
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/veronique-piller.png" class="w-100" alt="Véronique Piller"/>
									</div>
									<div class="col-md-8">
										<h4>Véronique Piller</h4>								
										<p>
											Professeure au Conservatoire de Fribourg, elle se passionne dès son jeune âge
											pour l’accompagnement, d’abord dans le cercle familial puis rapidement au-
											delà. Mettre en valeur le soliste ou le chœur, anticiper les intentions musicales
											de l’exécutant-e, soutenir le/la chef.fe dans son travail, voilà ce qu’elle apprécie
											dans cette activité toujours variée et passionnante.
										</p>
									</div>
								</div>
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
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/christelle-matthey.png" class="w-100" alt="Christelle Matthey"/>
									</div>
									<div class="col-md-8">
										<h4>Christelle Matthey</h4>						
										<p>
											Christelle Matthey commence l'étude du piano à l'âge de 5 ans et obtient en 2006 un Diplôme
											d'Enseignement dans la classe de Nicolas Farine à La Chaux-de-Fonds.
											Durant ses études, Christelle est lauréate de deux prix d'accompagnement
											au concours Suisse de musique pour la jeunesse ainsi que du prix du
											Lyceum Club en 2005.
										</p>
									</div>
								</div>
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
						<hr class="my-5"/>
						<h2 id="jurys">Présentation des jurys</h2>
						<h4>Jury Tambours</h4>
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/damien-gavillet.png" class="w-100" alt="Damien Gavillet"/>
									</div>
									<div class="col-md-8">
										<h4>Damien Gavillet</h4>
										<p>
											Né le 27 décembre 1991, Damien Gavillet a commencé son apprentissage du tambour à l’age
											de 9 ans auprès de la société de musique l’Echo des Monts de Riaz. Après 4 ans de
											formation auprès de Daniel Gachet, il a participé à son premier concours de solistes
											fribourgeois puis concourra à divers concours régionaux, cantonaux, romands et fédéraux.
										</p>
									</div>
								</div>
								<p>
									Il a suivi pendant 3 ans les cours de perfectionnements pour tambour organisés par la
									Commission Cantonale de Tambour (CCT) puis, de 2007 à 2009, les cours de moniteur
									organisés par cette même commission dont il a obtenu en 2010 le certificat de moniteur
									tambour.
								</p>
								<p>
									Il a été moniteur de la société de musique « L’Echo des Monts » de Riaz ainsi que des cadets des sociétés de musique d’Echarlens et Sorens.
								</p>
								<p>
									Il pratique actuellement son art dans la société de musique « l’Appel du Manoir » de
									Gruyères ainsi qu’auprès de la clique de tambours « la Gruvia » à la Tour-de-Trême. Il fait
									partie depuis 2011 de la Commission Cantonale de Tambour (CCT) et assume la fonction de
									personne référente pour la catégorie tambours des concours cantonaux de solistes
									fribourgeois.
								</p>
								<p>
									Il a effectué en 2012 sont école de recrues comme tambour militaire avant de rejoindre les
									rangs de la fanfare brigade blindée 1 pour les cours de répétitions. Pendant cette période, il
									obtient le diplôme de moniteur « Basis ». En 2015, il participe aux cours de jurys organisés par l’Association Suisse de Tambours et Fifres (ASTF) et a l’occasion d’officier régulièrement dans les concours régionaux, cantonaux et romands.
								</p>
							</div>
							<div class="col-md-6">
							</div>
						</div>
						<hr class="my-3"/>
						<h4>Jury Bois</h4>
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/beat-rosenast.png" class="w-100" alt="Beat Rosenast"/>
									</div>
									<div class="col-md-8">
										<h4>Beat Rosenast</h4>
										<p>
											Beat Rosenast est né le 18 décembre 1984 à Fribourg. Il commence à pratiquer la musique à l’âge de 7 ans, puis il choisit d’apprendre la clarinette deux ans plus tard. Il étudie cet instrument de 2005 à 2012 au Conservatoire de Lausanne dans la classe de Frédéric Rapin.
										</p>
									</div>
								</div>
								<p>
									Il obtient en 2010 le “Master of Arts HES-SO en interprétation musicale avec orientation en
									orchestre” et en 2012 le “Master of Arts HES-SO en Pédagogie musicale avec orientation en
									enseignement instrumental”.
								</p>
								<p>
									En 2009, il termine ses études de direction d’ensembles à vent au Conservatoire de Fribourg dans la
									classe de Jean-Claude Kolly.<br/>
									De 2010 à 2016, il préside la commission musicale de l’AFJM (Association Fribourgeoise des Jeunes
									Musiciens).<br/>
									En février 2015 il remporte le deuxième prix au concours international initié par le compositeur
									espagnol Oscar Navarro, en interprétant « II Concerto » pour clarinette et orchestre.
									Son premier CD « Lamentation » est sortie en 2016.
								</p>
								<p>
									Il dirige actuellement les Cadets de la Concordia de Fribourg ainsi que l’Union de Villaz-St-Pierre et est membre de la commission de musique de la SCMF (société cantonale des musiques fribourgeoises).<br/>
									Depuis septembre 2018, il est engagé comme professeur de clarinette au conservatoire de Fribourg.
								</p>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/dany-rossier.png" class="w-100" alt="Dany Rossier"/>
									</div>
									<div class="col-md-8">
										<h4>Dany Rossier</h4>
										<p>
											Né en 1981 en Valais, Dany Rossier étudie la musique dès son plus jeune âge.
											Déjà attiré enfant par la clarinette, il commence toutefois des études de piano,
											qu’il poursuit durant 4 ans.
										</p>
									</div>
								</div>
								<p>
									Il aborde ensuite l’étude de la clarinette avec Dominique Tacchini à Martigny,
									chez qui il obtient le Certificat supérieur de l’Association suisse de musique.
									Parallèlement, il étudie les branches théoriques au Conservatoire de Sion,
									sanctionnées à l’âge de 17 ans par le Certificat professionnel de solfège. Peu
									après il obtient également une maturité fédérale, au Collège de l’Abbaye de St-
									Maurice.
								</p>
								<p>
									Passionné par l’étude de la clarinette, il s’inscrit avec succès au Conservatoire de
									Lausanne, dans la classe de Frédéric Rapin, où il passe en juin 2005 un Diplôme
									d’Enseignement, avec prix de pédagogie et félicitations du Jury. Il poursuit ses
									études au Conservatoire de Lausanne, où il obtient, en mai 2007, un Diplôme
									de Concert, avec mention excellent. Dany Rossier fréquente également les
									masters classes d’éminents clarinettistes comme Antony Morf, Michel Lethiec,
									Michel Bertelli.<br/>
									Il développe très tôt une intense activité pédagogique et enseigne, dès l’âge de 18
									ans, à Sion, Aigle, Oron, Martigny, Massongex et Vernayaz, puis est engagé
									comme professeur de clarinette au sein du Conservatoire Cantonal du Valais en
									2018, où il officie en tant que Doyen des bois depuis août 2021.
								</p>
								<p>
									Musicien polyvalent et régulièrement sollicité par différents jurys musicaux,
									Dany Rossier s’intéresse également à l’art choral et dirige des chœurs mixtes dès
									2003. De plus, il dirige aussi des formations instrumentales, telles que des brass band, des orchestres à vent, et diverses formations de spectacle (orchestre jazz,
									variété, etc.…). Son expérience de poly-instrumentiste est très appréciée des
									musiciens professionnels ou amateurs avec qui il travaille. Il se perfectionne
									également dans ce domaine, en prenant des cours de direction avec Jean-Claude
									Kolly, et est consécutivement invité à reprendre la direction musicale de
									l'Harmonie Municipale de Martigny dès septembre 2015.
								</p>
								<p>
									Dès la fin de ses études de clarinette, il commence une formation de chanteur,
									dans la classe de Norbert Carlen, où il obtient en juin 2011 un Certificat avec
									Félicitations du jury, puis en juin 2013, un Post-Certificat mention excellent.
								</p>
								<p>
									Il développe aussi une intense activité dans le domaine de la composition, de
									l’arrangement et de la musique de chambre. Ses compositions et arrangements
									pour chœur, ensemble à vent et orchestre de jazz ont déjà remportées, à de
									nombreuses reprises, un vif succès. Il est régulièrement invité à se produire en
									soliste, notamment avec des ensembles à vent, et collabore avec plusieurs
									formations instrumentales, dont l’Orchestre à vent de l’Armeespiel, l’Orchestre
									de Chambre valaisan, leChamber Wind Orchestra , l’orchestre de l’« Opéra du
									Rhône » et l’« Orchestre d’Harmonie du Valais ».
								</p>
							</div>
						</div>
						<hr class="my-3"/>
						<h4>Jury Cuivre</h4>
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/florian-lab.png" class="w-100" alt="Florian Lab"/>
									</div>
									<div class="col-md-8">
										<h4>Florian Lab</h4>
										<p>
											Né en 1974, Florian Lab commence l’apprentissage du cornet dès 9 ans. Il rencontre
											successivement plusieurs professeurs : Christophe Jeanbourquin, Elisabeth Nouaille Degorce,
											Véronique Pitteloud-Gyger. Désireux de poursuivre sa formation musicale, il acquiert en 2002 le diplôme d’enseignement de la trompette auprès de la Société suisse de pédagogie musicale, sous la direction de M. Jean-Jacques Schmid (Trompette solo de l’orchestre symphonique de Berne). C’est avec l’aide de ce même formateur qu’il obtient le diplôme de concert en 2006. Il suivra durant cette période des cours auprès de M. Roger B. Webster ainsi qu’auprès de MM. Maurice André et Guy Touvron. En parallèle Florian passe avec succès le diplôme professionnel de direction pour fanfares, harmonies et brass bands au conservatoire de Lausanne.
										</p>
									</div>
								</div>
								<p>
									En tant que directeur, il a fondé et dirigé durant 11 ans la formation « b » de l’ensemble de
									cuivres jurassien et conduit la Fanfare « les Echos du Val-Terbi » de Corban de 2007 à 2021.
									Comme instrumentiste, il occupe différents postes au sein de l’Ensemble de cuivres jurassien. Il
									est régulièrement engagé comme professeur dans des camps de musique (NJBB) et comme jury
									dans les concours de solistes (CNSQ, JSMC, Finale Vaudoise des solistes et ensembles, NSEW, etc.)
									ou d’ensemble. Florian est actuellement enseignant secondaire dans le Jura ainsi que professeur
									à l’Ecole de musique et Conservatoire du Jura de Delémont. Il travaille également comme
									formateur du module musique dans le programme Jeunesse et Musique de l’Office fédéral de la
									Culture. Marié et papa de deux enfants, il partage son temps libre entre famille, lecture et sport.
								</p>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/vincent-metrailler.png" class="w-100" alt="Vincent Métrailler"/>
									</div>
									<div class="col-md-8">
										<h4>Vincent Métrailler</h4>
										<p>
											Vincent Métrailler, originaire de Chalais (VS), est né en 1988. En 2004, il débute des études professionnelles de trombone auprès d’Andrea Bandini à la HEM de Genève où il effectue en 2009 un Master de Pédagogie et en 2011 un Master de Performance orientation orchestre avec mention. La même année il fait un stage au sein du Berner Symphonie Orchester. En 2013 il rejoint l’argovia philharmonic où il occupe la place de deuxième trombone. En 2016, il est engagé à l’Orchestre de la Suisse Romande comme deuxième trombone, soliste remplaçant, poste qu’il occupe actuellement.
										</p>
									</div>
								</div>
								<p>
									Passionné depuis toujours par la direction, il obtient en 2016 un certificat préprofessionnel de direction d’ensemble à vent au conservatoire de Fribourg auprès de Jean-Claude Kolly. En 2014, il
									fonde l’Orchestre Valaisan Amateur, dont il est le directeur artistique. Il vit actuellement à Genève et se consacre pleinement à sa passion de musicien d’orchestre et de création de projets artistiques.
								</p>
							</div>
						</div>
						<hr class="my-3"/>
						<h4>Jury Percussions</h4>
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/fabrice-vernay.png" class="w-100" alt="Fabrice VERNAY"/>
									</div>
									<div class="col-md-8">
										<h4>Fabrice VERNAY</h4>
										<p>
											Né à Massongex (VS), Fabrice Vernay commence le tambour puis les percussions au sein de la fanfare locale. Après avoir obtenu sa maturité, il entame ses études professionnelles au Conservatoire de Lausanne dans la classe de Stéphane Borel, où il obtient le diplôme d’enseignement et le diplôme de concert, tous les deux avec les félicitations du jury. Il étudie aussi le vibraphone jazz à l’EJMA de Lausanne avec Philippe Cornaz et la batterie avec Patrick Dufresne et Félix Bergeron.
										</p>
									</div>
								</div>
								<p>
									Percussionniste polyvalent, Fabrice Vernay participe à des productions variées (opéra-rock, spectacle cabaret, musique théâtrale, orchestre à vent). De 2000 à 2006, il
									est membre du Swiss Army Marching & Concert Band lors de nombreux tatoos en Europe. Il a joué au sein de l’orchestre symphonique Sinfonietta de Lausanne de 2006 à 2019. Il est actuellement membre de Via Vallesia (world music), Walliser Seema (chansons bilingues) et des symphonistes d&#39;Octodure (orchestre micro-symphonique). Il se produit aussi en duo avec le clarinettiste Dany Rossier ou le percussionniste Sylvain Andrey et dirige le groupe de percussions Percuten.
								</p>
								<p>
									Il enseigne les percussions au conservatoire cantonal valaisan et à l'école communale de musique de Martigny.
								</p>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<img src="/images/jury/florian-spirito.png" class="w-100" alt="Florian SPIRITO"/>
									</div>
									<div class="col-md-8">
										<h4>Florian SPIRITO</h4>
										<p>
											Né en 1980, il débute la musique en 1986 à l’école de musique de Rolle & environs dans les classes de tambours et percussions.
										</p>
									</div>
								</div>
								<p>
									Après l’obtention de son CFC d’employé de commerce, il s’oriente vers une carrière musicale et entre en 1998 dans les classes non-professionnelles du conservatoire de Lausanne, puis en 2001 en classe professionnelle avec Stéphane Borel pour la
									percussion et Pascal Favre pour la direction d’ensemble à vent. 
								</p>
								<p>
									Il obtiendra 3 diplômes : enseignement de la percussion et direction d’ensemble à
									vent en 2006, ainsi que son diplôme de concert (anciennement virtuosité) en 2009.
								</p>
								<p>
									Actuellement, il donne des cours de percussion, batterie jazz et tambour dans les
									écoles de musique de Rolle et Nyon. Il est également directeur des tambours de la
									fanfare de Gilly-Bursins et directeur de l’harmonie de l’Ecole de musique de Rolle et
									Environs et de son corps de tambour.
								</p>
								<p>
									Il fait partie de l’ensemble Ad’Libitum (quintet à vent &amp; percussions) géré par Jean-
									Claude Bloch et de l’orchestre classique Symphonia de Genève.
									Il fonctionne régulièrement comme expert aux examens de la SCMV (Société
									Cantonale des Musiques Vaudoises) et comme jury dans divers concours régionaux et
									cantonaux.
								</p>
								<p>
									Il est également professeur de percussion et tambour au Camp de la SCMV depuis
									2004, membre de la commission technique des tambours SCMV depuis 2013 et
									président de celle-ci depuis 2017.
								</p>
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
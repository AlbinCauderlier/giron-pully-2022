<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Galerie - <?= WEBSITE_TITLE ?></title>
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
                <h1 class="text-white">Galerie</h1>
            </div>
        </section>
		<section>
			<div class="container py-5">
				<div class="text-center">
					<h2>Pour diffuser vos photos et vidéos de l'événement, vous pouvez :</h2>
					<div class="row">
						<div class="col-md-6 my-5">
							<h3><i data-feather="twitter" style="width:46px;"></i> <i data-feather="instagram" style="width:46px;"></i></h3>
							<h3>Les publier sur Twitter ou Instagram<br/>avec le hashtag <a href="https://twitter.com/hashtag/gironpully" target="_blanck" rel="nofollow">#GironPully</a></h3>
							<a href="https://twitter.com/intent/tweet?button_hashtag=GironPully" class="twitter-hashtag-button" data-size="large" data-lang="fr" data-show-count="false">Tweeter #GironPully</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
						<div class="col-md-6 my-5">
							<h3><i data-feather="mail" style="width:46px;"></i></h3>
							<h3>Nous les envoyer à galerie@gironpully.ch<br/>via WeTransfer. Nous les publierons ici.</h3>
							<a href="https://wetransfer.com?to=galerie@gironpully.ch" rel="nofollow" target="_blanck" class="btn btn-primary btn-lg btn-block">
								Envoyer mes photos
							</a>
						</div>
					</div>
				</div>
				<hr class="my-5"/>
				<a class="twitter-timeline" data-lang="fr" data-chrome="nofooter" href="https://twitter.com/GironPully">Tweets de Giron Pully</a>
			</div>
		</section>
	</main>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	<?php 
		include_once("common/footer.php");
	?>
</body>
</html>
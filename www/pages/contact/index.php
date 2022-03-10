<?php
	refresh_session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Contact - <?= WEBSITE_TITLE ?></title>
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
				<div class="text-center">
					<span style='font-size:100px;'>&#128221;</span><br/>
					<label class="my-5">Pour toute demande, information, proposition, conseil...</label>
					<a href="mailto:contact@gironpully.ch" class="btn btn-block btn-lg btn-primary">Envoyez nous un message sur contact@gironpully.ch</a></label>
					<span style='font-size:100px;'>&#128540;</span><br/>
				</div>
			</div>
		</section>
	</main>
	<?php 
		include_once("common/footer.php");
	?>
</body>
</html>
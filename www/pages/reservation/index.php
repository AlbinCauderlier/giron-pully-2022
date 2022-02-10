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
</head>
<body id="top">
	<?php 
		include_once("common/header.php");
	?>
	<main>
		<section class="my-5 py-5">
			<!-- <script name="etickets" id="etickets" width="100%" height="952px" frameborder="0" src="//etickets.infomaniak.com/scripts/shop/ANgLDw1YqC/"></script>
			<button type='button' onclick='window.open("//etickets.infomaniak.com/shop/ANgLDw1YqC/","_self")'>
				Réserver
			</button>
			<hr class="my-5"/> -->
			<a href='//etickets.infomaniak.com/shop/ANgLDw1YqC/' target='_blank' class="btn btn-primary btn-lg btn-block rounded-pill my-5">
				Réserver via Infomaniak
			</a>
		</section>
	</main>
	<?php 
		include_once("common/footer.php");
	?>
	<script type="text/javascript" src="/js/home.js"></script>
</body>
</html>
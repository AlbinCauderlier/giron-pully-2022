<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Error 404 - <?= WEBSITE_TITLE ?></title>

	<?php
        include_once("common/head.php");
    ?>
</head>
<body>
    <?php
        include_once("common/header.php");
    ?>
	<section style="background-image: url(/images/404.jpg); background-size: cover; min-height:100vh;" class="pl-5 pt-5">
		<div class="container-fluid pt-5 pl-5">
			<h1 class="display-4 text-dark my-5">Error 404</h1>
			<h2 class="text-dark">Il n'y a pas de train sur ce quai...</h2>
		</div>
	</section>

<script type="text/javascript" src="/vendors/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="/vendors/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/feather.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
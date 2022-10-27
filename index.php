<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="connect-src * 'unsafe-inline'; font-src 'self' data:;">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<title>Website</title>
	<script src="js/jquery-3.6.1.js"></script>
	<script src="js/index.js"></script>
</head>

<body>
	<?php
		include "components/header.html";
	?>

	<div class="content">
		<?php
			include "components/carousel.html";

		?>
	</div>
</body>

</html>
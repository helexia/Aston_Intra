<?php
	session_start();
?>
<!DOCTYPE html>

<html>
	<head>
		<title> accueil </title>
		<link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
		<?php
			include('php/header.php');
			var_dump($_SESSION);
			if (isset($_SESSION['login'])) {echo('coucou');}
			

		?>
		<p>bienvenue sur le site intranet de l'école aston</p>
		<?php
			include('php/footer.php');
		?>
	</body>
</html>
	
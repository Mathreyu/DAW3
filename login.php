<!DOCTYPE html>

<html>

	<head>
		<title>Dogefinder</title>
		<meta charset="UTF-8">
		<link href='http://fonts.googleapis.com/css?family=Exo:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>

	<body>

		<header>
			<h1><a href="index.php">Doge Finder</a></h1>
		</header>

        <?php include("menu.html")?>
		<section id="login">
            <form method="post" action="./controlador/login.php">
                <p>Usuario</p>
                <input type="text">
                <p>Contraseña</p>
                <input type="password">
                <br><br><br>
                <button name="submit">Acceder</button>
            </form>
		</section>
		<aside>
		</aside>
		<footer>
			<p>Buitre Corp 2015, Gomitaana 2015, Ramon 2015. All rights reserved.</p>
		</footer>
	</body>
</html>
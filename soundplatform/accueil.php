<?php session_start();
if($_SESSION['langue'] === "Français")
{ ?>
<!DOCTYPE html><html lang="fr">
<head>
	<title> </title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"><link rel="stylesheet" type="text/css" href="stylesheets/css/accueil_stylesheet.css">
	<meta name="viewport" content="width=device-width" charset="UTF-8" initial-scale="1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Galdeano" rel="stylesheet">
</head>

<body>
	<?php include_once('menu.php'); ?>
		<div id="content">
			<div id="content_wrapper">
				<div class="row">
					<div class="col col--4-of-12 col-m-4-of-4">
						<p>ÉCOUTE GRATUITE D'EXTRAITS MUSICAUX</p>
					</div>
				<div class="col col--2-of-12 title col--m-1-of-3 col--am">
				<p>TYPE
					<select name="type">
						<option value="Musique">+MUSIQUE</option>
						<option value="Vidéo">+VIDÉO</option>
					</select>
				</p>
				</div>
				<div class="col col--3-of-12 title col--m-1-of-3 col--am">
					<p>CLASSÉ PAR
						<select name="classe">
							<option value="Populaire">+POPULAIRE</option>
							<option value="Nos coups de coeur">+COUPS DE ❤</option>
						</select>
					</p>
				</div>
				<div class="col col--3-of-12 title col--m-1-of-3">
					<p>SÉLECTIONNER UN GENRE
						<select name="genre">
							<option value="Pop">+POP</option>
							<option value="Rock">+ROCK</option>
							<option value="Electro">+ELECTRO</option>
							<option value="Rap">+RAP</option>
						</select>
					</p>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
else if($_SESSION['langue'] === "Anglais")
{ ?>
<!DOCTYPE html><html lang="en">
<head>
	<title> </title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"><link rel="stylesheet" type="text/css" href="stylesheets/css/accueil_stylesheet.css">
	<meta name="viewport" content="width=device-width" charset="UTF-8" initial-scale="1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Galdeano" rel="stylesheet">
</head>

<body>
	<?php include_once('menu.php'); ?>
		<div id="content">
			<div id="content_wrapper">
				<div class="row">
					<div class="col col--4-of-12 col-m-4-of-4">
						<p>LISTEN TO FREE MUSIC</p>
					</div>
				<div class="col col--2-of-12 title col--m-1-of-3 col--am">
				<p>TYPE
					<select name="type">
						<option value="Musique">+MUSIC</option>
						<option value="Vidéo">+VIDÉO</option>
					</select>
				</p>
				</div>
				<div class="col col--3-of-12 title col--m-1-of-3 col--am">
					<p>CLASSÉ PAR
						<select name="classe">
							<option value="Populaire">+POPULAIRE</option>
							<option value="Nos coups de coeur">+COUPS DE ❤</option>
						</select>
					</p>
				</div>
				<div class="col col--3-of-12 title col--m-1-of-3">
					<p>SÉLECTIONNER UN GENRE
						<select name="genre">
							<option value="Pop">+POP</option>
							<option value="Rock">+ROCK</option>
							<option value="Electro">+ELECTRO</option>
							<option value="Rap">+RAP</option>
						</select>
					</p>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php } ?>
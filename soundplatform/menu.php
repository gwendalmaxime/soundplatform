<div id="side_nav">
	<h1>SAMPLE LOGO</h1>
	<div id="top_snav"><!-- php recherche à faire-->
		<form method="post" action="searchbar.php">
			<p> 
				<input type="text" name="search" id="search" placeholder="Rechercher...">
			</p>
		</form>
		<a href="accueil.php">Accueil</a>
		<a href="Explorer.php">Explorer</a>
		<a href="Tendances.php">Tendances</a>
	</div>
	<?php if(isset($_SESSION['id']))
	{ ?><div id="user_snav">
		<div id="user"></div>
		<h1>Jane Doe</h1>
		<p>Artiste</p>
	</div> <?php }
	else
	{ ?>
	<div id="user_snav">
		<div id="jeSaisPasQuelIDMettre"></div> <!-- Ici tu mettras une image de profil de base pour les invités -->
		<h1>Invité</h1>
		<p>Utilisateur anonyme</p>
	</div> <?php }
	if(isset($_SESSION['id']))
	{ ?>
	<div id="account_snav">
		<a href="compte.php">Accéder au compte</a>
		<a href="upload.php">Uploader une musique</a>
		<a href="deconnexion.php">Déconnexion</a>
	</div>
	<?php } 
	else
	{ ?>
	<div id="Nouvelid"> <!-- Créer un id pour les non-connectés -->
		<a href="charte.php">Charte d'utilisation</a>
		<a href="inscription.php">S'inscrire</a>
		<a href="connexion.php">Connexion</a>
	</div>
	<?php } ?>
		<div id="social_media">
			<a href="#"><img src="images/social_icons/facebook-logo.png" alt="fb"></a>
			<a href="#"><img src="images/social_icons/instagram.png" alt="instagram"></a>
			<a href="#"><img src="images/social_icons/twitter-logo-silhouette.png" alt="twitter"></a>
			<a href="#"><img src="images/social_icons/youtube.png" alt="youtube"></a>
		</div>
		<div id="mentions">
			<a href="licences.php">Licences</a>
			<a href="equipe.php">Equipe</a>
			<a href="contact.php">Contact </a>
			<a href="application.php">Application</a>
			<a href="apropos.php">A propos</a>
			<a href="infoslegales.php">Informations légales</a>
		</div>
</div>
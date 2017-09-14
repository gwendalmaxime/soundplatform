<?php try
{
	$bdd = new PDO('mysql:host=localhost;dbname=id1925286_joueur;charset=utf8', 'id1925286_sam', 'mandalorien');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$Pseudo = $_POST['Pseudo'];
$MotDePasse = sha1($_POST['MotDePasse']);
$MotDePasseRepeat = sha1($_POST['MotDePasseRepeat']);
$email = $_POST['email'];

if(isset($Pseudo) && isset($MotDePasse) && isset($MotDePasseRepeat) && isset($email))
{
	if(preg_match('#^[.^select^from^where^insert^into^values^SELECT^FROM^WHERE^INSERT^INTO^VALUES]#'))
	{
		if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))
		{
			if($MotDePasse == $MotDePasseRepeat)
			{
				$req = $bdd->prepare('INSERT INTO utilisateur(Pseudo, MotDePasse, email, dateInscription) VALUES(:pseudo, :motdepasse, :email, NOW())');
				$req->execute(array(
				'pseudo' => $Pseudo,
				'motdepasse' => $MotDePasse,
				'email' => $email
				));

				$req->closeCursor();

				?>
				<script>
					window.location.href='index.php';
				</script>
				<?php
			}
			else
			{
				?>
				<script>
					alert("Les mots de passe ne correspondent pas.");
					window.location.href='index.php';
				</script>
				<?php
			}
		}
		else
		{
			?>
			<script>
				alert("Votre email est incorrect.");
				window.location.href='index.php';
			</script>
			<?php
		}
	}
}
else
{
	?>
	<script>
		alert("Veuillez entrer un pseudo, un mot de passe et un email.");
		window.location.href='index.php';
	</script>
	<?php
}
 ?>

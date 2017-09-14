<?php try
{
	$bdd = new PDO('mysql:host=localhost;dbname=id1925286_joueur;charset=utf8', 'id1925286_sam', 'mandalorien');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

session_start();

$Pseudo = htmlspecialchars($_POST['Pseudo']);
$MotDePasse = htmlspecialchars(sha1($_POST['MotDePasse']));

if(isset($Pseudo) && isset($MotDePasse))
{
	if(preg_match('#^[.^select^from^where^insert^into^values^SELECT^FROM^WHERE^INSERT^INTO^VALUES]#'))
	{
		$req = $bdd->prepare("SELECT * FROM utilisateur WHERE Pseudo = :pseudo");
		$req->execute(array('pseudo' => $Pseudo));
		$donnees = $req->fetch();

		if($donnees['Pseudo'] == $Pseudo && $donnees['MotDePasse'] == $MotDePasse)
		{
			$_SESSION['Pseudo'] = $donnees['Pseudo'];
			$_SESSION['id'] = $donnees['id'];
		}
		else
		{
			?>
			<script>
				alert("Le pseudo ou le mot de passe sont incorrects.");
				window.location.href='index.php';
			</script>
			<?php
		}
		?>
		<script>
			window.location.href='index.php';
		</script>
		<?php
	}
}
else
{
	?>
	<script>
		alert("Veuillez entrer un pseudo et un mot de passe.");
		window.location.href='index.php';
	</script>
	<?php
}
 ?>

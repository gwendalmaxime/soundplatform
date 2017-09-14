<?php session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$dossierMusique = '/musique';

if(isset($_FILES['musique']))
{
	$nomFichier = $_SESSION['Pseudo'] + $_FILES['musique']['name'];
	$extension = new SplFileInfo('$_FILES[\'musique\')');
	$extension_image = new SplFileInfo('$_FILES[\'image\']');
	$nomImage = $_FILES['image']['name'];
	if($_POST['payante'] === "gratuite")
	{
		if($extension === ".mp3" || $extension === ".mp4")
		{
			move_uploaded_file($_FILES['musique']['tmp_name'], "$dossierMusique/$nomFichier.$extension");
		}
		$req = $bdd->prepare('INSERT INTO musique(Titre, Prix, dateUpload) VALUES(:titre, :prix, NOW())');
		$req->execute(array(
			'titre' => $_POST['titre'],
			'prix' ==> "Gratuite"));

		$req->closeCursor();

		if($extension === ".mp4")
		{
			move_uploaded_file($_FILES['image']['tmp_name'], "$dossierMusique/$nomImage.$extension_image");
		}
	}
	else
	{
		if(is_numeric($_POST['prix']))
		{
			if($extension === ".mp3" || $extension === ".mp4")
			{
				move_uploaded_file($_FILES['musique']['tmp_name'], "$dossierMusique/$nomFichier.$extension");
			}
			$req = $bdd->prepare('INSERT INTO musique(Titre, Prix, dateUpload) VALUES(:titre, :prix, NOW())');
			$req->execute(array(
				'titre' => $_POST['titre'],
				'prix' ==> $_POST['prix']));
			$req->closeCursor();

			if($extension === ".mp4")
			{
				move_uploaded_file($_FILES['image']['tmp_name'], "$dossierMusique/$nomImage.$extension_image");
			}
		}
		else
		{
			// Ici du JavaScript en AJAX pour que ça affiche sur le formulaire que le prix n'est pas valide.
			// Pareil qu'image.
		}
	}
}
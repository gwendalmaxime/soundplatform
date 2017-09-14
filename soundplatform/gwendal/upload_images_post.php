<?php session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$dossierMusique = '/design';

if(isset($_FILES['design']))
{
	$nomFichier = $_SESSION['Pseudo'] + $_FILES['design']['name'];
	$extension = new SplFileInfo('$_FILES[\'design\')');
	if($_POST['payante'] === "gratuite")
	{
		if($extension === ".jpg" || $extension === ".png" || $extension === ".jpeg" || $extension === ".bmp")
		{
			move_uploaded_file($_FILES['design']['tmp_name'], "$dossierMusique/$nomFichier.$extension");
		}
		$req = $bdd->prepare('INSERT INTO design(Nom, Prix, dateUpload) VALUES(:nom, :prix, NOW())');
		$req->execute(array(
			'nom' => $_POST['nom'],
			'prix' ==> "Gratuite"));

		$req->closeCursor();
	}
	else
	{
		if(is_numeric($_POST['prix']))
		{
			if($extension === ".jpg" || $extension === ".png" || $extension === ".jpeg" || $extension === ".bmp")
			{
				move_uploaded_file($_FILES['design']['tmp_name'], "$dossierMusique/$nomFichier.$extension");
			}
			$req = $bdd->prepare('INSERT INTO design(Nom, Prix, dateUpload) VALUES(:nom, :prix, NOW())');
			$req->execute(array(
				'nom' => $_POST['nom'],
				'prix' ==> "Gratuite"));

		$req->closeCursor();
		}
		else
		{
			// Ici du JavaScript en AJAX pour que ça affiche sur le formulaire que le prix n'est pas valide.
			// (lettres à la place de chiffres)
		}
	}
}
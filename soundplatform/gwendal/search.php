<?php try
{
	$bdd = new PDO('mysql:host=localhost;dbname=id1925286_joueur;charset=utf8', 'id1925286_sam', 'mandalorien');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

session_start();

$Recherche = $_POST['search'];

if(isset($Recherche))
{
	$req = $bdd->query("SELECT * FROM musique LIKE %" . $Recherche . "%");

	$donnees->$req->fetch();
}
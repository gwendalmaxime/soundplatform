<?php try
{
	$bdd = new PDO('mysql:host=localhost;dbname=id1925286_joueur;charset=utf8', 'id1925286_sam', 'mandalorien');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

session_start();

$Pseudo = $_SESSION['Pseudo'];
$Message = htmlspecialchars($_POST['Message']);

if(isset($Message))
{
	$req = $bdd->prepare("INSERT INTO chat(Message, DatePost) VALUES(:message, NOW())");
	$req->execute(array(
		'message' => $Message));

	$req->closeCursor();
}
<?php

include '../lib/class/BD.php';
ini_set('display_errors','On');
error_reporting(E_ALL);
require("../lib/smarty/libs/Smarty.class.php"); // On inclut la classe Smarty
$smarty = new Smarty();
$smarty->caching=false;
//$smarty->require("../index.php");

$bdd = new BD(true);
$pdo_admin=$bdd->getDB();

$ID=$_POST['identifiant'];
$email=$_POST['email_addr'];
$code = sha1($_POST['code_pin']);
//$code=$_POST['code_pin'];
//$reponse = $pdo->lecture_simple("*","user");

//selection de toute la table 
$reponse = $pdo_admin->query("SELECT * FROM user");
//check si on a déjà le login ou le mail pour éviter les doublons
$existant=false;
while ($donnees = $reponse->fetch())
{
	if($ID==$donnees['login'])
	{
		printf("Ce login est déjà utilisé");
		$existant=true;
	}
	if($email==$donnees['mail'])
	{
		printf("Cette adresse mail est déjà utilisée pour un compte");
		$existant=true;
	}

}
$reponse->closeCursor();

//insertion dans la base de donnée
if(!$existant)
{
	$req =$pdo_admin->prepare("INSERT INTO user(login, password, mail) VALUES(:ID,:code,:email)");
	$req->execute(array(
		'ID' => $ID,
		'code' => $code,
		'email' => $email
		));
}

//truc de gitant pour revenir à l'index, A VIRER !!
header('Location: ../index.php');

?>

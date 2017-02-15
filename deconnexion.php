<?php

include '../lib/class/BD.php';
ini_set('display_errors','On');
error_reporting(E_ALL);
require("../lib/smarty/libs/Smarty.class.php"); // On inclut la classe Smarty
$smarty = new Smarty();
$smarty->caching=false;
//$smarty->display("../index.php");

//Lecteur juste lecture
$bdd = new BD(false);
$pdo=$bdd->getDB();

session_start();

session_destroy();
session_start();


$_SESSION['connecter'] = false;
header('Location: ../index.php');



/*$req =$pdo_admin->prepare("INSERT INTO user(login, password, mail) VALUES(:ID,:code,:email)");
$req->execute(array(
	'ID' => $ID,
	'code' => $code,
	'email' => $email
	));*/

/*$reponse = $pdo_admin->query("SELECT * FROM user");

while ($donnees = $reponse->fetch())
{?>   
    <p>
    <strong>Login</strong> : <?php echo $donnees['login']; ?><br />
    le mdp: <?php echo $donnees['password']; ?>, mail <?php echo $donnees['mail']; ?><br />
	</p>
	<?php
}
$reponse->closeCursor();*/


?>

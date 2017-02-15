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
$_SESSION['connecter']=false;
$ID=$_POST['identifiant'];
$code = sha1($_POST['code_pin']);

//$code=$_POST['code_pin'];

$reponse = $pdo->query("SELECT login, password FROM user");

while ($donnees = $reponse->fetch())
{

	if($ID==$donnees['login'] && $code==$donnees['password'])
	{
		if(isset($_SESSION['login']))
		{
			echo "Session ouverte:";
			$_SESSION['connecter'] = true;
			header('Location: ../index.php');
		}
 		else
		{
 			 $_SESSION['login'] = $ID;
 			 echo "Vous êtes co:".$ID;
			 $_SESSION['connecter'] = true;

			 header('Location: ../index.php');
		}
	}		
}

	
$reponse->closeCursor();



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

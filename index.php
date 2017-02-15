<?php

ini_set('display_errors','On');
error_reporting(E_ALL);
require("lib/smarty/libs/Smarty.class.php"); // On inclut la classe Smarty
$smarty = new Smarty();
$smarty->caching=false;


session_start();

$connecter=$_SESSION['connecter'];
//var_dump($connecter);

if($connecter)
{
   $smarty->assign('MenuConnecter',array(0=>'Accueil', 
                                         1=>'Pathologie',
                                         2=>'Contact' ,
                                         3=>'Information'));
   $smarty->display("scripts/Menu_connecter.tpl");
}
else
{
   $smarty->assign('MenuDefaut',array(0=>'Accueil',
                                      1=>'Inscription', 
                                      2=>'Contact',
                                      3=>'Information'));
   $smarty->display("scripts/Menu_defaut.tpl");
}
 


// Vérification de la validité des informations

// Hachage du mot de passe
/*$pass_hache = sha1($_POST['password']);

// Insertion
$req = $bdd->prepare('INSERT INTO user(nom, prenom, email, login, password, date_inscription) VALUES(:nom, :prenom, :email, :login, :password, :date_naissance)');
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'login' => $login,
    'password' => $pass_hache,
    'date_naissance' => $date_naissance));

// Vérification des identifiants

$req = $bdd->prepare('SELECT id FROM user WHERE login = :login AND password = :password');

$req->execute(array(

    'login' => $login,

    'password' => $pass_hache));


$resultat = $req->fetch();


if (!$resultat)

{
    echo 'Mauvais identifiant ou mot de passe !';
}

else

{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
}


if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}
*/
?>

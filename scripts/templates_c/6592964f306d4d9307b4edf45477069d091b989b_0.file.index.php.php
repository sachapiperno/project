<?php
/* Smarty version 3.1.30, created on 2017-02-15 09:00:05
  from "C:\wamp64\www\project\index.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a418959d4237_90335997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6592964f306d4d9307b4edf45477069d091b989b' => 
    array (
      0 => 'C:\\wamp64\\www\\project\\index.php',
      1 => 1487148434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a418959d4237_90335997 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>ini_set('display_errors','On');
error_reporting(E_ALL);
require("lib/smarty/libs/Smarty.class.php"); // On inclut la classe Smarty
$smarty = new Smarty();
$smarty->caching=false;


session_start();

$connecter=$_SESSION['connecter'];
var_dump($connecter);

if($connecter==true)
{
   $smarty->assign('MenuConnecter',array('Accueil', 
                                        'Pathologie',
                                         'Contact' ,
                                         'Information'));
   $smarty->display("scripts/Menu_connecter.tpl");
}
else
{
   $smarty->assign('MenuDefaut',array('Accueil',
                                      'Inscription', 
                                      'Contact',
                                      'Information'));
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
<?php echo '?>';
}
}

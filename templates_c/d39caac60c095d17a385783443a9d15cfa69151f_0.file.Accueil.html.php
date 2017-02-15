<?php
/* Smarty version 3.1.30, created on 2017-02-13 07:49:04
  from "C:\wamp64\www\project\scripts\Accueil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a164f04e7449_15666149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd39caac60c095d17a385783443a9d15cfa69151f' => 
    array (
      0 => 'C:\\wamp64\\www\\project\\scripts\\Accueil.html',
      1 => 1486972137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a164f04e7449_15666149 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="xhtml, html5, form" />
	<link rel="stylesheet" href="style/Style.css">
	<?php echo '<script'; ?>
 type='text/javascript' src='scripts/script.js'><?php echo '</script'; ?>
>
	<title>Accueil Acupuncture</title>
</head>
 
<body>
	<header>
		<img id="fond" src="img/bamboo.jpg" alt="fond d'ecran" />
	</header>

	<nav>
 		<div id=inscription>
			<form method="post" id="form_inscription">
				<ul id="ul_inscription">
					<li class="li_inscription">
						<label for="identifiant">votre identifiant&nbsp;:</label>
						<input type="text" id="identifiant" name="identifiant" placeholder="dupond" required>
					</li>
					<li class="li_inscription">
						<label for="code_pin">Code Pin&nbsp;:</label>
						<input type="password" id="code_pin" name="code_pin" required>
					</li>
					<li class="li_inscription">
						<input type="submit" value="Connexion" /> 
					</li>
				</ul>
			</form>
		</div>		
	</nav>


	<br/>

	<section id=presentation>
			<div>  
				<h1>Qu'est-ce que l'acunpuncuture</h1>
				<p>L’acupuncture est une des branches de la médecine traditionnelle chinoise, basée sur l’implantation et la manipulation de fines aiguilles en divers points du corps à des fins thérapeutiques.</p>

				<p>L'acupuncture traditionnelle se base sur des concepts pré-scientifiques et vitalistes en élaborant son raisonnement diagnostic et thérapeutique sur une vision énergétique taoïste de l'homme et de l'univers : l'homme, microcosme, organisé à l'image du macrocosme universel, se trouve donc soumis aux mêmes règles, qui devront inspirer son mode de vie, et serviront de trame à l'élaboration de l'acte médical.[réf. nécessaire]</p>

				<p>Des études scientifiques n'ont pas réussi à s'accorder sur la preuve d'efficacité de l'acupuncture dans le cadre de la gestion de la douleur sauf dans le cas de cervicalgies où plusieurs études méthodologiquement fiables semblent atteindre un consensus. Des cas d'infections et de pneumothorax ont été rapportés. Sur les 57 travaux publiés après l'an 2000 inclus dans une méta-analyse de 2011, seuls 4 ont une méthodologie considérée comme excellente.</p>
			</div>
	</section>

	<img id="photoAcceuil" src="img/photoAcceuil.jpg" alt="photoAcceuil" /> 

	

</body>
</html>
<?php }
}

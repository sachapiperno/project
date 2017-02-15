<?php
/* Smarty version 3.1.30, created on 2017-02-13 10:31:00
  from "C:\wamp64\www\project\scripts\form_connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a18ae4319885_40898967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bda7b008e5e6324eee99b9f2a3cdda0a2c361c7d' => 
    array (
      0 => 'C:\\wamp64\\www\\project\\scripts\\form_connexion.tpl',
      1 => 1486981855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a18ae4319885_40898967 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="style/Style.css">

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
	</nav><?php }
}

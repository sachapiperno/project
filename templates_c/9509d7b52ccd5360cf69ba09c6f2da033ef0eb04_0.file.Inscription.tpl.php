<?php
/* Smarty version 3.1.30, created on 2017-02-15 09:56:34
  from "C:\wamp64\www\project\scripts\Inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a425d2cc57d2_24927057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9509d7b52ccd5360cf69ba09c6f2da033ef0eb04' => 
    array (
      0 => 'C:\\wamp64\\www\\project\\scripts\\Inscription.tpl',
      1 => 1487152282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a425d2cc57d2_24927057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>

	<form method="post" id="presentation_formulaire" action="scripts/inscription.php">
		<h1>Inscription</h1>
		<ul id="ul_formulaire">
			<li class="li_formulaire">
				<label for="identifiant">identifiant voulu&nbsp;:</label>
				<input type="text" id="identifiant" name="identifiant" placeholder="dupond" required>
			</li>
			<li  class="li_formulaire">
				<label for="email_addr">Adresse e-mail&nbsp;:</label>
				<input type="email" id="email_addr" name="email_addr" required>
			</li>
			<li  class="li_formulaire">
				<label for="email_addr_repeat">Confirmez l'adresse e-mail&nbsp;:</label>
				<input type="email" id="email_addr_repeat" name="email_addr_repeat" required 
					oninput="check_email(this)">
			</li>
			<li  class="li_formulaire">
				<label for="code_pin">code pin&nbsp;:</label>
				<input type="password" id="code_pin2" name="code_pin" required> 
			</li>
			<li  class="li_formulaire">
				<label for="code_pin_repeat">Confirmez le code pin&nbsp;:</label>
				<input type="password" id="code_pin_repeat" name="code_pin_repeat" required 
					oninput="check_codepin(this)">
			</li>
			
			<li  class="li_formulaire">
				<input type="submit" value="Effectuer l'inscription" /> 
			</li>
		</ul>
	</form>	
</section>
<?php }
}

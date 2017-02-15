<?php
/* Smarty version 3.1.30, created on 2017-02-15 08:48:11
  from "C:\wamp64\www\project\scripts\Menu_defaut.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a415cb4aa500_33088210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a80b6d919eb282273bd84124247bf8c1cad9e3e3' => 
    array (
      0 => 'C:\\wamp64\\www\\project\\scripts\\Menu_defaut.tpl',
      1 => 1487148179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scripts/header.tpl' => 1,
    'file:scripts/Accueil.tpl' => 2,
    'file:scripts/Contact.tpl' => 1,
    'file:scripts/Inscription.tpl' => 1,
    'file:scripts/information.tpl' => 1,
    'file:scripts/footer.tpl' => 1,
  ),
),false)) {
function content_58a415cb4aa500_33088210 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!--<nav>
<ul>
	<li><a  href="scripts/Accueil.tpl">Accueil</a></li>
     <li><a href="scripts/Inscription.tpl">Inscription</a></li>
     <li><a href="scripts/Contact.tpl">Contact</a></li>
     <li><a href="scripts/Information.tpl">Information</a></li>
</ul>

</nav>-->

<?php $_smarty_tpl->_subTemplateRender("file:scripts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<nav>
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MenuDefaut']->value, 'Menu_Item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Menu_Item']->value) {
?>
		<li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['Menu_Item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['Menu_Item']->value;?>
</a></li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>

	<div id=inscription>
			<form method="post" id="form_inscription" action="scripts/connexion.php">
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


<section>
	
	<?php if (!isset($_GET['page'])) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:scripts/Accueil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php } else { ?>
		<?php if ($_GET['page'] == 'Contact') {?>
			<?php $_smarty_tpl->_subTemplateRender("file:scripts/Contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
		<?php } elseif ($_GET['page'] == 'Inscription') {?>
			<?php $_smarty_tpl->_subTemplateRender("file:scripts/Inscription.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php } elseif ($_GET['page'] == 'Information') {?>
			<?php $_smarty_tpl->_subTemplateRender("file:scripts/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php } else { ?> 
			<?php $_smarty_tpl->_subTemplateRender("file:scripts/Accueil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

		<?php }?>
	<?php }?>
</section>


<?php $_smarty_tpl->_subTemplateRender("file:scripts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

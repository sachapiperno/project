<?php
/* Smarty version 3.1.30, created on 2017-02-15 09:30:09
  from "C:\wamp64\www\project\scripts\Menu_connecter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a41fa152a2d7_04077241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d947098cff585991e09368c131181a1d958cf8' => 
    array (
      0 => 'C:\\wamp64\\www\\project\\scripts\\Menu_connecter.tpl',
      1 => 1487150747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scripts/header.tpl' => 1,
    'file:scripts/Accueil.tpl' => 2,
    'file:scripts/Pathologie.tpl' => 1,
    'file:scripts/Contact.tpl' => 1,
    'file:scripts/information.tpl' => 1,
    'file:scripts/footer.tpl' => 1,
  ),
),false)) {
function content_58a41fa152a2d7_04077241 (Smarty_Internal_Template $_smarty_tpl) {
?>



	<!--<li><a  href="scripts/Accueil.tpl"><?php echo $_smarty_tpl->tpl_vars['items']->value[0];?>
</a></li>
     <li><a href="scripts/pathologie.tpl"><?php echo $_smarty_tpl->tpl_vars['items']->value[1];?>
</a></li>
     <li><a href="scripts/Contact.tpl"><?php echo $_smarty_tpl->tpl_vars['items']->value[2];?>
</a></li>
     <li><a href="scripts/Information.tpl"><?php echo $_smarty_tpl->tpl_vars['items']->value[3];?>
</a></li>
     <li><input type="submit" value="Deconnexion"/>--> 

<?php $_smarty_tpl->_subTemplateRender("file:scripts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<nav>
	<form method="post" action="scripts/deconnexion.php">

	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MenuConnecter']->value, 'Menu_Item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Menu_Item']->value) {
?>
		<li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['Menu_Item']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['Menu_Item']->value;?>
</a></li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<li><input type="submit" value="Deconnexion"/></li>
	</ul>
	</form>	

</nav>


<section>
	
	<?php if (!isset($_GET['page'])) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:scripts/Accueil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php } else { ?>
		<?php if ($_GET['page'] == 'Pathologie') {?>
			<?php $_smarty_tpl->_subTemplateRender("file:scripts/Pathologie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		<?php } elseif ($_GET['page'] == 'Contact') {?>
			<?php $_smarty_tpl->_subTemplateRender("file:scripts/Contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
?>

<?php }
}

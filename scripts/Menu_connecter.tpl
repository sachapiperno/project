

{include file="scripts/header.tpl"}

<nav>
	<ul>
	<form method="post" action="scripts/deconnexion.php">
	{foreach from=$MenuConnecter  item=Menu_Item key=k}
		<li><a href="index.php?page={$Menu_Item}" accesskey="{$k}">{$Menu_Item}</a></li>
	{/foreach}
		<li><input type="submit" value="Deconnexion"/></li>
	</ul>
	</form>
</nav>



<section>
	
	{if !isset($smarty.get.page)}
		{include file="scripts/Accueil.tpl"}
	{else}
		{if $smarty.get.page eq 'Pathologie' }
			{include file="scripts/Pathologie.tpl"}

		{elseif $smarty.get.page eq 'Contact' }
			{include file="scripts/Contact.tpl"}

		{elseif $smarty.get.page eq 'Information' }
			{include file="scripts/information.tpl"}
		{else}
			{include file="scripts/Accueil.tpl"}
		{/if}
	{/if}


</section>


{include file="scripts/footer.tpl"}

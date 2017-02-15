
{include file="scripts/header.tpl"}

<nav>
	<ul>
	{foreach from=$MenuDefaut item=Menu_Item key=k}
		<li><a href="index.php?page={$Menu_Item}" accesskey="{$k}">{$Menu_Item}</a></li>
	{/foreach}
	</ul>

	<div id=inscription>
			<form method="post" id="form_inscription" action="connexion.php">
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
	
	{if !isset($smarty.get.page)}
		{include file="scripts/Accueil.tpl"}
	{else}
		{if $smarty.get.page eq 'Contact'}
			{include file="scripts/Contact.tpl"}
		
		{elseif $smarty.get.page eq 'Inscription'}
			{include file="scripts/Inscription.tpl"}

		{elseif $smarty.get.page eq 'Information'}
			{include file="scripts/information.tpl"}

		{else} 
			{include file="scripts/Accueil.tpl"}
		{/if}
	{/if}
</section>


{include file="scripts/footer.tpl"}
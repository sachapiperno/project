<?php
/* Smarty version 3.1.30, created on 2017-02-13 23:16:09
  from "C:\wamp64\www\project\scripts\Pathologie.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a23e398578e6_64846953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1800c8ce668a39db1e50fd072a8884d900b82908' => 
    array (
      0 => 'C:\\wamp64\\www\\project\\scripts\\Pathologie.tpl',
      1 => 1487027585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a23e398578e6_64846953 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>

		<form method="get" action="Index.php" id="presentation_formulaire">
			<h2>Recherche de Pathologies</h2>
			  <p> Veuillez sélectionner les élements pour votre recherche. Afin d'affiner celle-ci vous pouvez en sélectionner plusieurs.</p>
			 	  <div class="recherche">
					<ul><label class ="recherche_patho" for="meridien"> Nom du méridien: </label></ul>
					<ul><li><input type="checkbox" name="meridien[]" value="-WM"/>Yin Wei Mai</li>
					<li><input type="checkbox" name="meridien[]" value="-QM"/>Yin Qiao Mai</li>
					<li><input type="checkbox" name="meridien[]" value="+QM"/>Yang Qiao Mai</li>
					<li><input type="checkbox" name="meridien[]" value="+WM"/>Yang Wei Mai</li>
					<li><input type="checkbox" name="meridien[]" value="C"/>Coeur</li>
					<li><input type="checkbox" name="meridien[]" value="ChM"/>Chong Mai</li>
					<li><input type="checkbox" name="meridien[]" value="DaiM"/>Dai Mai</li>
					<li><input type="checkbox" name="meridien[]" value="DM"/>Du Mai</li>
					<li><input type="checkbox" name="meridien[]" value="E"/>Estomac</li>
					<li><input type="checkbox" name="meridien[]" value="F"/>Foie</li>
					<li><input type="checkbox" name="meridien[]" value="GI"/>Gros intestin</li>
					<li><input type="checkbox" name="meridien[]" value="IG"/>Intestin Grêle</li>
					<li><input type="checkbox" name="meridien[]" value="MC"/>Protecteur du coeur</li>
					<li><input type="checkbox" name="meridien[]" value="P"/>Poumon</li>
					<li><input type="checkbox" name="meridien[]" value="R"/>Rein</li>
					<li><input type="checkbox" name="meridien[]" value="RM"/>Rein Mai</li>
					<li><input type="checkbox" name="meridien[]" value="Rte"/>Rate Pancréas</li>
					<li><input type="checkbox" name="meridien[]" value="TR"/>Triple réchauffeur</li>
					<li><input type="checkbox" name="meridien[]" value="V"/>Vessie</li>
					<li><input type="checkbox" name="meridien[]" value="VB"/>Vésicule Biliaire</li>
					</ul>
					
					<ul><label class ="recherche_patho" for="type_pathologie">Type de pathologie: </label></ul>
						<ul><li><input type="checkbox" name="type_pathologie[]" value="m"/>Pathologies de méridien</li>
						<li><input type="checkbox" name="type_pathologie[]" value="tf"/>Pathologies d'organes/viscère</li>  
						<li><input type="checkbox" name="type_pathologie[]" value="j" />Pathologies des tendino-muculaires</li>   
						<li><input type="checkbox" name="type_pathologie[]" value="lv" />Pathologies des branches(voie luo)</li>
						<li><input type="checkbox" name="type_pathologie[]" value="lv"/>Pathologies des branches(voie grand luo)</li>  
						<li><input type="checkbox" name="type_pathologie[]" value="mv" />Pathologies des merveilleux vaisseaux</li>
						</ul>
					
					<ul><label class ="recherche_patho" for="caracteristiques">Caractéristiques possibles: </label></ul>
						<ul><li><input type="checkbox" name="caracteristiques[]" value="Interne"/>Interne</li>
						<li><input type="checkbox" name="caracteristiques[]" value="Externe"/>Externe</li>  
						<li><input type="checkbox" name="caracteristiques[]" value="Plein" />Plein</li>   
						<li><input type="checkbox" name="cacaracteristiquesrac[]" value="Vide" />Vide</li>
						<li><input type="checkbox" name="caracteristiques[]" value="Chaud"/>Chaud</li>  
						<li><input type="checkbox" name="caracteristiques[]" value="Froid" />Froid</li></ul>
					<ul><li><input type="submit" id ="recherche" name="submit" value="Chercher" /></li></ul>
					
			  </div>
	   
		</form>  
</section>
<?php }
}

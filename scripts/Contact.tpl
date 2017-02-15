  
<section >
    <form method="post" id="presentation_formulaire">
    	<h1>Contact</h1>
		<ul id="ul_formulaire">
			<li class="li_formulaire">
				<p>
				<label for="objet">Objet de la demande:&nbsp;</label>
				<select name="objet" id="objet" required>
				    <option value="" selected >selectionner</option>
				    <option value="ta_valeur">Renseignement</option>
				    <option value="ta_valeur">Réclamation</option>
				    <option value="ta_valeur">Problème avec son identifiant</option>
				    <option value="ta_valeur">Problème lors de l'insciption</option>
				    <option value="ta_valeur">Autre</option>
				</select>
				</p>
			</li>
			<li class="li_formulaire">
			      <label for="Nom">Nom&nbsp;:</label>
			      <input id="Nom" type="text" name="Nom" required>
			</li>
			<li class="li_formulaire">
			      <label for="Prénom">Prénom&nbsp;:</label>
			      <input id="Prénom" type="text" name="Prénom" required>
			</li>
			<li class="li_formulaire">
			      <label for="Email">Adresse email&nbsp;:</label>
			      <input id="Email" type="email"  name="Email" required>
			</li>
			<li class="li_formulaire">
			      <label for="Message">Message&nbsp;:</label>
			      <br>
			      <textarea id="Message" name="Message" > </textarea>  
			</li>

			<li  class="li_formulaire">
				<input type="submit" value="Envoyer" /> 
			</li>
		</ul>
	</form>
</section>

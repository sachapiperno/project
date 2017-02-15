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

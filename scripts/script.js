//Script formulaire identification

	function check_email(input) {
	  if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}

	function check_codepin(input) {
	  if (input.value != document.getElementById('code_pin2').value) {
		input.setCustomValidity('Les deux codes pin ne correspondent pas.');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}
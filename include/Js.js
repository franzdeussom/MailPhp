
var warning = document.getElementById('Query-statement');

function verif() {
	entryName = document.getElementById('name');
	entrySurName = document.getElementById('surname');
	entryMail = document.getElementById('login-name');
	entryPass = document.getElementById('login-pswd');

	if (entryName.value == "" || entrySurName.value == "" || entryMail.value == "" || entryPass.value == "") {

		warning.innerHTML = "Veillez remplir tous les champs !";
		warning.style.color = 'red';
		warning.style.display = 'block';

		setTimeout(function() {
			warning.style.display = 'none';
			warning.style.transition= 'display 2s';
		}, 2000);

	}
}
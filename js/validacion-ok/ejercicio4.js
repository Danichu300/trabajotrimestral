// variables globales




function funcion() {

	var ramdom1 = Math.floor(Math.random() * (9 - 1)) + 1;

	var ramdom2 = Math.floor(Math.random() * (9 - 1)) + 1;

	document.getElementById("ramdom1").innerHTML = ramdom1;

	document.getElementById("ramdom2").innerHTML = ramdom2;



}



function texto(){

	var texto1 = document.getElementById("texto1").value;

	if(texto1 == "" || texto1.length < 2){

		document.getElementById("primeraComprobacion").innerHTML = "El campo nombre no puede estar vacio.";


	} else {


		document.getElementById("primeraComprobacion").innerHTML = "La comprobacion es correcta.";

	}



}

function correo1() {

	var correo = document.getElementById("correo").value;

	var comprobacion = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(!comprobacion.test(correo)){

		document.getElementById("sc").innerHTML = "La comprobacion de correo no es correcta.";


	} else {



		document.getElementById("sc").innerHTML = "El correo es valido";


		return false;

	}

}

function password1(){

	var password = document.getElementById("password").value;
	var password2 = document.getElementById("password2").value;


	// Si la contraseña tiene menos de 8 caracteres
	if (password.length >= 8 && password == password2) {

		document.getElementById("tc").innerHTML = "Las contraseñas coinciden.";

	} else {

			// si no coinciden, muestra mensaje de error y se suma 1 a la variable error

			document.getElementById("tc").innerHTML = "Las contraseñas no coinciden.";


		}

	}




function capchat(){



	ramdom1 = document.getElementById("ramdom1").innerHTML;

	ramdom2 = document.getElementById("ramdom2").innerHTML;

	ramdom12 = parseInt(ramdom1);

	ramdom22 = parseInt(ramdom2);

	resultado = ramdom12 + ramdom22;

	comprobacion = document.getElementById("captcha").value;

	if(comprobacion == resultado){

		document.getElementById("cc").innerHTML = "El Captcha es correcto";




		document.form.enviar.disabled=!document.form.enviar.disabled


	} else {

		document.getElementById("cc").innerHTML = "El Captcha no es correcto";

	}

}

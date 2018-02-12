

function funcion1() {

	var ramdom1 = Math.floor(Math.random() * (9 - 1)) + 1;

	var ramdom2 = Math.floor(Math.random() * (9 - 1)) + 1;

	document.getElementById("ramdom1").innerHTML = ramdom1;

	document.getElementById("ramdom2").innerHTML = ramdom2;



}



function username1(){

	var username = document.getElementById("username").value;

	if(username == "" || username.length < 2){

		document.getElementById("comprobacionUsername").innerHTML = "El campo Usuario no puede estar vacio.";

	} else {

		document.getElementById("comprobacionUsername").innerHTML = "La comprobacion es correcta.";

	}
}

function name1(){

	var name = document.getElementById("name").value;

	if(name == "" || name.length < 2){

		document.getElementById("comprobacionName").innerHTML = "El campo Nombre no puede estar vacio.";

	} else {

		document.getElementById("comprobacionName").innerHTML = "La comprobacion es correcta.";

	}
}

function email1() {

	var email = document.getElementById("email").value;

	var comprobacion = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(!comprobacion.test(email)){

		document.getElementById("comprobacionEmail").innerHTML = "La comprobacion de email no es correcta.";


	} else {

		document.getElementById("comprobacionEmail").innerHTML = "El email es valido";

		return false;

	}
}

var password;
function password1() {

	password = document.getElementById("password").value;
	if (password == "" || password.length < 8) {

		document.getElementById("comprobacionPassword").innerHTML = "La contraseña no es valida.";

	}else {
		document.getElementById("comprobacionPassword").innerHTML = "La contraseña es valida.";
	}

}

function passwordrepeat(){


	password = document.getElementById("password").value;
	var passwordr2 = document.getElementById("password2").value;


	// Si la contraseña tiene menos de 8 caracteres
	if (password.length >= 8 && (password == passwordr2)) {

		document.getElementById("comprobacionPasswordRepeticion").innerHTML = "Las contraseñas coinciden.";

	} else {

		// si no coinciden, muestra mensaje de error y se suma 1 a la variable error

		document.getElementById("comprobacionPasswordRepeticion").innerHTML = "Las contraseñas no coinciden.";


	}

}

function direccion1(){

	var direccion = document.getElementById("direccion").value;

	if(direccion == "" || direccion.length < 2){

		document.getElementById("comprobacionDireccion").innerHTML = "El campo Direccion no puede estar vacio.";

	} else {

		document.getElementById("comprobacionDireccion").innerHTML = "La comprobacion es correcta.";

	}
}

function cp1() {

	var cp = document.getElementById("cp").value;

	var comprobacion = /^(\d{5})$/;

	if(!comprobacion.test(cp)){

		document.getElementById("comprobacionCp").innerHTML = "La comprobacion del Codigo Postal no es correcta.";


	} else {

		document.getElementById("comprobacionCp").innerHTML = "La comprobacion del Codigo Postal es correcta.";

		return false;

	}
}


function captcha1(){



	ramdom1 = document.getElementById("ramdom1").innerHTML;

	ramdom2 = document.getElementById("ramdom2").innerHTML;

	ramdom12 = parseInt(ramdom1);

	ramdom22 = parseInt(ramdom2);

	resultado = ramdom12 + ramdom22;

	comprobacion = document.getElementById("captcha").value;

	if(comprobacion == resultado){

		document.getElementById("comprobacionCaptcha").innerHTML = "El Captcha es correcto";




		document.getElementById("finaliza").removeAttribute("disabled");



	} else {

		document.getElementById("comprobacionCaptcha").innerHTML = "El Captcha no es correcto";

	}

}

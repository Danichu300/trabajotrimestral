// variables globales
var error = 1;
var errorNombre=0;
var errorEmail=0;

var texto1;

function funcion() {

	var ramdom1 = Math.floor(Math.random() * (9 - 1)) + 1;

	var ramdom2 = Math.floor(Math.random() * (9 - 1)) + 1;

	document.getElementById("ramdom1").innerHTML = ramdom1;

	document.getElementById("ramdom2").innerHTML = ramdom2;



}



function texto(){
	alert("antes error" + error);
	alert("antes error texto" + errorNombre);
	 texto1 = document.getElementById("texto1").value;

	if(texto1 == "" || texto1.length < 2){

		document.getElementById("primeraComprobacion").innerHTML = "El campo nombre no puede estar vacio.";
		errorNombre = errorNombre + 1;

	} else {

if (errorNombre ==1) {
	errorNombre = errorNombre - 1;
}
		document.getElementById("primeraComprobacion").innerHTML = "La comprobacion es correcta.";

	}

	alert("despues error" + error);
	alert("despues error texto" + errorNombre)

}

function correo1() {

	var correo = document.getElementById("correo").value;

	var comprobacion = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  	if(!comprobacion.test(correo)){

   		document.getElementById("sc").innerHTML = "La comprobacion de correo no es correcta.";
			errorEmail = errorEmail + 1;

  	} else {

			if (errorEmail ==1) {
				errorEmail = errorEmail - 1;
			}

   		document.getElementById("sc").innerHTML = "El correo es valido";


		return false;

  }

}

function password1(){

    var password = document.getElementById("password").value;
    var password2 = document.getElementById("password2").value;

    if(password == password2 && password.length >= 8){

			document.getElementById("tc").innerHTML = "Las contraseñas coinciden.";

    } else {

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

alert(texto1);
				if (texto1 == '') {
					alert("el nombre esta vacio");
				}

			error= errorEmail + errorNombre + error;
			if (error > 1) {
				alert("hay un error");
				alert("Error nombre"+ errorNombre);
				alert("error" + error);
			}else {
				alert("no hay error");
				alert("Error nombre"+ errorNombre);
				alert("error" + error);
				document.form.enviar.disabled=!document.form.enviar.disabled
			}

		} else {

			document.getElementById("cc").innerHTML = "El Captcha no es correcto";

		}

	}

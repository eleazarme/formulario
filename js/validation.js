//alert("llamado al archivo js exitoso");

function validation(){
	
	var nombre = document.getElementById("nom").value;

	if(nombre == ""){
		alert("Por favor digite el usuario");
		return false;
	}
}
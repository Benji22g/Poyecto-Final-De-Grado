var formulario = document.getElementById("formularioupd");
formulario.addEventListener("submit",function(e){
e.preventDefault();
console.log("click");
 var datos = new FormData(formulario);
 var nick = datos.get("nick");
 var name = datos.get("name");
 var lastname = datos.get("lastname");
 var email = datos.get("email");
 var admin = datos.get("admin");
 var id = datos.get("id");

 var xhttp = new XMLHttpRequest();
 xhttp.open("PUT", "../Poyecto-Final-De-Grado-main/apiUser.php?ID=" + id + "&EMAIL=" + email + "&NICK=" +nick+"&NAME="+ name+"&LASTNAME="+lastname + "&ADMIN="+ admin, false);
 console.log("../Poyecto-Final-De-Grado-main/apiUser.php?ID=" + id + "&EMAIL=" + email + "&NICK=" +nick+"&NAME="+ name+"&LASTNAME="+lastname + "&ADMIN="+admin)
 xhttp.send();

})
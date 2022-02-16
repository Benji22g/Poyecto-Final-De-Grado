var formulario = document.getElementById("formularioins");
formulario.addEventListener("submit",function(e){
e.preventDefault();
console.log("click");
 var datos = new FormData(formulario);
 var id = datos.get("id");
 var name = datos.get("name");
 var priceday = datos.get("priceday");
 var date = datos.get("date");
 var capacity = datos.get("capacity");
 var address = datos.get("address");
 var url = datos.get("url");
 var reserved = datos.get("reserved");
 var idlocalidad = datos.get("idlocalidad");
 var idcategory = datos.get("idcategory");

 var xhttp = new XMLHttpRequest();
 xhttp.open("INSERT", "http://localhost/astu-poyecto%20final/Poyecto-Final-De-Grado-main/apiUser.php?ID=" + id + "&EMAIL=" + email + "&NICK=" +nick+"&NAME="+ name+"&LASTNAME="+lastname + "&ADMIN="+ admin, false);
 console.log("http://localhost/astu-poyecto%20final/Poyecto-Final-De-Grado-main/apiUser.php?ID=" + id + "&EMAIL=" + email + "&NICK=" +nick+"&NAME="+ name+"&LASTNAME="+lastname + "&ADMIN="+admin)
 xhttp.send();

})
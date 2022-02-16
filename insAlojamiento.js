var formulario = document.getElementById("formularioins");
formulario.addEventListener("submit",function(e){
e.preventDefault();
console.log("click");
 var datos = new FormData(formulario);
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
 xhttp.open("INSERT", "http://localhost/astu-poyecto%20final/Poyecto-Final-De-Grado-main/apiAlojamiento.php?PRICEDAY=" + priceday + "&DATE=" +date+"&NAME="+ name+"&CAPACITY="+capacity + "&ADDRESS="+ address+ "&url="+ url+ "&RESERVED="+ reserved+ "&ID_LOCALIDAD="+ idlocalidad+ "&ID_CATEGORY="+ idcategory, false);
 console.log("http://localhost/astu-poyecto%20final/Poyecto-Final-De-Grado-main/apiAlojamiento.php?PRICEDAY=" + priceday + "&DATE=" +date+"&NAME="+ name+"&CAPACITY="+capacity + "&ADDRESS="+ address+ "&url="+ url+ "&RESERVED="+ reserved+ "&ID_LOCALIDAD="+ idlocalidad+ "&ID_CATEGORY="+ idcategory)
 xhttp.send();

})
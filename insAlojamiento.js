var formulario = document.getElementById("formularioins");
formulario.addEventListener("submit",function(e){
e.preventDefault();
console.log("click");
 var datos = new FormData(formulario);
 var insert = document.getElementById("insert");
    var p = "the housing has been inserted correctly";
 datos.append("NAME",datos.get("name"));
 datos.append("PRICEDAY",datos.get("priceday"));
 datos.append("DATE",datos.get("date"));
 datos.append("CAPACITY",datos.get("capacity"));
 datos.append("ADDRESS",datos.get("address"));
 datos.append("URL",datos.get("url"));
 datos.append("RESERVED",datos.get("reserved"));
 datos.append("ID_LOCALIDAD",datos.get("idlocalidad"));
 datos.append("ID_CATEGORY",datos.get("idcategory"));
 datos.append("QUANTITYDAY",datos.get("quantityDay"));

 var xhttp = new XMLHttpRequest();
 xhttp.open("POST", "../Poyecto-Final-De-Grado-main/apiAlojamiento.php",true);
 xhttp.send(datos);
 insert.insertAdjacentHTML('beforeend', p);



})
window.onload = function (){
    var xhttp= new XMLHttpRequest();
    xhttp.open("GET","../Poyecto-Final-De-Grado-main/apiAlojamiento.php",true);
    xhttp.send();
    xhttp.onreadystatechange=function() {
        if (xhttp.readyState == 4 && this.status==200) {
            var variable=JSON.parse(this.responseText);
            
        for(i = 0; i < variable.length; i++){

            var insert = document.getElementById("insertuser");

            var id = variable[i].ID_ALOJAMIENTO;
            var name = variable[i].NAME;
            var priceday = variable[i].PRICEDAY;
            var date = variable[i].DATE;
            var capacity = variable[i].CAPACITY;
            var address = variable[i].ADDRESS;
            var quantityDay = variable[i].QUANTITYDAY;
            var url = variable[i].URL;
            var reserved = variable[i].RESERVED;
            var localidad = variable[i].ID_LOCALIDAD;
            var categoria = variable[i].ID_CATEGORY;
            var menreserved = "";
            if(reserved == 1){menreserved = "booked"}else{menreserved = "not booked"};
            var h1 = '<h4 class="card-title">'+name+'</h4>';
            var h2 = '<p><img src=img/'+url+'.jpg alt= Image height=300 width=300><p>';
            var p1 = '<p id="hola" class="card-text" style="color: black;" value ="tuki">'+id+'</p>';
            var p2 = '<p class="card-text" style="color: black;">'+priceday+'</p>';
            var p3 = '<p class="card-text" style="color: black;">'+address+'</p>';
            var p4 = '<p class="card-text" style="color: black;">'+localidad+'</p>';
            var p5 = '<p class="card-text" style="color: black;">'+categoria+'</p>';
            var p6 = '<p class="card-text" style="color: black;">'+date+ " "+quantityDay+'</p><br>';
            var p7 = '<p class="card-text" style="color: black;">'+capacity+ " "+menreserved+'</p><br>';

            var b1 = "";
            if(reserved == 0)
            {
            var b1 = `<td><button id="${id}" type="submit" class="btn btn-danger btn-block text-center" name="Reservar" value="Reservar" onclick=reservarAlojamiento(this)>Reservar</td>`;
            }
            else
            {
            var b1 = `<td><button id="${id}" type="submit" class="btn btn-danger btn-block text-center" name="Reservar" value="Reservar" onclick=cancelarAlojamiento(this)>Cancelar Reserva</td>`;
            }
            insert.insertAdjacentHTML('beforeend', h1);
            insert.insertAdjacentHTML('beforeend', h2);
            insert.insertAdjacentHTML('beforeend', p1);
            insert.insertAdjacentHTML('beforeend', p2);
            insert.insertAdjacentHTML('beforeend', p3);
            insert.insertAdjacentHTML('beforeend', p4);
            insert.insertAdjacentHTML('beforeend', p5);
            insert.insertAdjacentHTML('beforeend', p6);
            insert.insertAdjacentHTML('beforeend', p7);
            insert.insertAdjacentHTML('beforeend', b1);

        }
        
        
        }
    }
    
}
function reservarAlojamiento(thisobj) {
    insertuser = document.getElementById("insertuser");
    p = "The accommodation has been rented correctly";
    var xhttp = new XMLHttpRequest();
    var idAlojamiento = thisobj.getAttribute("id");
    var datos = new FormData();
    datos.append("ASSESSMENT",0);
    datos.append("STATE",0);
    datos.append("ID_ALOJAMIENTO",idAlojamiento);
    datos.append("ID_USER",iduser);
    xhttp.open("POST", "../Poyecto-Final-De-Grado-main/apiAlquiler.php",true);
    xhttp.send(datos);
    insertuser.insertAdjacentHTML('beforeend', p);
    changestatealojamiento(idAlojamiento);
}

function cancelarAlojamiento(thisobj){
    insertuser = document.getElementById("insertuser");
    p = "the accommodation has been successfully cancelled";
    var xhttp = new XMLHttpRequest();
    var idAlojamiento = thisobj.getAttribute("id");
    xhttp.open("DELETE", "../Poyecto-Final-De-Grado-main/apiAlquiler.php?ID_USER="+iduser+"&ID_ALOJAMIENTO="+idAlojamiento,true);
    xhttp.send();
    cancelstatealojamiento(idAlojamiento);

}

function changestatealojamiento(idalojamiento){
    var xhttp = new XMLHttpRequest();
    var ocupado = 1;
    console.log(idalojamiento);
    xhttp.open("PUT","../Poyecto-Final-De-Grado-main/apiAlojamiento.php?ID_ALOJAMIENTO=" + idalojamiento + "&RESERVED=" + ocupado,false);
    xhttp.send();
}

function cancelstatealojamiento(idalojamiento){
    var xhttp = new XMLHttpRequest();
    var ocupado = 0;
    xhttp.open("PUT","../Poyecto-Final-De-Grado-main/apiAlojamiento.php?ID_ALOJAMIENTO=" + idalojamiento + "&RESERVED=" + ocupado,false);
    xhttp.send();
}
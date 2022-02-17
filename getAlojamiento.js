window.onload = function (){
    var xhttp= new XMLHttpRequest();
    xhttp.open("GET","../Poyecto-Final-De-Grado-main/apiAlojamiento.php",true);
    xhttp.send();
    xhttp.onreadystatechange=function() {
        if (xhttp.readyState == 4 && this.status==200) {
            var variable=JSON.parse(this.responseText);
            
        for(i = 0; i < variable.length; i++){

            var insertadmin = document.getElementById("insertadmin");

            var id = variable[i].ID_ALOJAMIENTO;
            var name = variable[i].NAME;
            var priceday = variable[i].PRICEDAY;
            var date = variable[i].DATE;
            var capacity = variable[i].CAPACITY;
            var address = variable[i].ADDRESS;
            var quantityDay = variable[i].QUANTITYDAY;
            var url = variable[i].URL;
            var localidad = variable[i].ID_LOCALIDAD;
            var categoria = variable[i].ID_CATEGORY;

            var h1 = '<h4 class="card-title">'+name+'</h4>';
            var h2 = '<p><img src=img/'+url+'.jpg alt= Image height=300 width=300><p>';
            var p1 = '<p id="hola" class="card-text" style="color: black;" value ="tuki">'+id+'</p>';
            var p2 = '<p class="card-text" style="color: black;">'+priceday+'</p>';
            var p3 = '<p class="card-text" style="color: black;">'+address+'</p>';
            var p4 = '<p class="card-text" style="color: black;">'+localidad+'</p>';
            var p5 = '<p class="card-text" style="color: black;">'+categoria+'</p>';
            var p6 = '<p class="card-text" style="color: black;">'+date+ " "+quantityDay+'</p><br>';
            var p7 = '<p class="card-text" style="color: black;">'+capacity+'</p><br>';
            var b1 = `<td><button id="${id}" type="submit" class="btn btn-danger btn-block text-center" name="Eliminar" value="Eliminar" onclick=deleteAlojamiento(this)>  eliminar</td>`;
            
            insertadmin.insertAdjacentHTML('beforeend', h1);
            insertadmin.insertAdjacentHTML('beforeend', h2);
            insertadmin.insertAdjacentHTML('beforeend', p1);
            insertadmin.insertAdjacentHTML('beforeend', p2);
            insertadmin.insertAdjacentHTML('beforeend', p3);
            insertadmin.insertAdjacentHTML('beforeend', p4);
            insertadmin.insertAdjacentHTML('beforeend', p5);
            insertadmin.insertAdjacentHTML('beforeend', p6);
            insertadmin.insertAdjacentHTML('beforeend', p7);
            insertadmin.insertAdjacentHTML('beforeend', b1);

        }
        
        
        }
    }
    
}
function deleteAlojamiento(thisobj) {
    var xhttp = new XMLHttpRequest();
    var id = thisobj.getAttribute("id");
    xhttp.open("DELETE", "../Poyecto-Final-De-Grado-main/apiAlojamiento.php?ID_ALOJAMIENTO=" + id, false);
    xhttp.send();
}
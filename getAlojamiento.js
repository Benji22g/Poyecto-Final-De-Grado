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

            var mlocalidad = "";

            if (localidad = 15) {
                mlocalidad = "A CORUÑA";
            } else if (localidad = 1) {
                mlocalidad = "ALAVA";
            } else if (localidad = 2) {
                mlocalidad = "ALBACETE";
            } else if (localidad = 3) {
                mlocalidad = "ALICANTE";
            } else if (localidad = 4) {
                mlocalidad = "ALMERIA";
            } else if (localidad = 33) {
                mlocalidad = "ASTURIAS";
            } else if (localidad = 5) {
                mlocalidad = "AVILA";
            } else if (localidad = 6) {
                mlocalidad = "BADAJOZ";
            } else if (localidad = 8) {
                mlocalidad = "BARCELONA";
            } else if (localidad = 47) {
                mlocalidad = "BIZKAIA";
            } else if (localidad = 9) {
                mlocalidad = "BURGOS";
            } else if (localidad = 10) {
                mlocalidad = "CACERES";
            } else if (localidad = 11) {
                mlocalidad = "CADIZ";
            } else if (localidad = 38) {
                mlocalidad = "CANTABRIA";
            } else if (localidad = 12) {
                mlocalidad = "CASTELLON";
            } else if (localidad = 50) {
                mlocalidad = "CEUTA";
            } else if (localidad = 13) {
                mlocalidad = "CIUDAD REAL";
            } else if (localidad = 14) {
                mlocalidad = "CORDOBA";
            } else if (localidad = 16) {
                mlocalidad = "CUENCA";
            } else if (localidad = 20) {
                mlocalidad = "GIPUZKOA";
            } else if (localidad = 17) {
                mlocalidad = "GIRONA";
            } else if (localidad = 18) {
                mlocalidad = "GRANADA";
            } else if (localidad = 19) {
                mlocalidad = "GUADALAJARA";
            } else if (localidad = 21) {
                mlocalidad = "HUELVA";
            } else if (localidad = 22) {
                mlocalidad = "HUESCA";
            } else if (localidad = 7) {
                mlocalidad = "ISLAS BALEARES";
            } else if (localidad = 23) {
                mlocalidad = "JAEN";
            } else if (localidad = 35) {
                mlocalidad = "LAS PALMAS";
            } else if (localidad = 24) {
                mlocalidad = "LEON";
            } else if (localidad = 25) {
                mlocalidad = "LLEIDA";
            } else if (localidad = 26) {
                mlocalidad = "LUGO";
            } else if (localidad = 28) {
                mlocalidad = "MADRID";
            } else if (localidad = 29) {
                mlocalidad = "MALAGA";
            } else if (localidad = 51) {
                mlocalidad = "MELILLA";
            } else if (localidad = 30) {
                mlocalidad = "MURCIA";
            } else if (localidad = 31) {
                mlocalidad = "NAVARRA";
            } else if (localidad = 32) {
                mlocalidad = "OURENSE";
            } else if (localidad = 34) {
                mlocalidad = "PALENCIA";
            } else if (localidad = 36) {
                mlocalidad = "SALAMANCA";
            } else if (localidad = 37) {
                mlocalidad = "SANTA CRUZ DE TENERIFE";
            } else if (localidad = 39) {
                mlocalidad = "SEGOVIA";
            } else if (localidad = 40) {
                mlocalidad = "SEVILLA";
            } else if (localidad = 41) {
                mlocalidad = "SORIA";
            } else if (localidad = 42) {
                mlocalidad = "TARRAGONA";
            } else if (localidad = 43) {
                mlocalidad = "TERUEL";
            } else if (localidad = 44) {
                mlocalidad = "TOLEDO";
            } else if (localidad = 45) {
                mlocalidad = "VALENCIA";
            } else if (localidad = 46) {
                mlocalidad = "VALLADOLID";
            } else if (localidad = 48) {
                mlocalidad = "ZAMORA";
            } else if (localidad = 49) {
                mlocalidad = "ZARAGOZA";
            }

            var mcategoria = "";
            if (categoria == 3) {
                mcategoria = 'Casa Rural';
            }else if (categoria == 1) {
                mcategoria = 'Casa'
            } else if(categoria=2){
                mcategoria = 'Pisos'

            }
        /*
            var h1 = '<h4 class="card-title">'+name+'</h4>';
            var h2 = '<p><img src=img/'+url+'.jpg alt= Image height=300 width=300><p>';
            var p1 = '<p id="hola" class="card-text" style="color: black;" value ="tuki">'+id+'</p>';
            var p2 = '<p class="card-text" style="color: black;">'+priceday+'</p>';
            var p3 = '<p cass="card-text" style="color: black;">'+address+'</p>';
            var p4 = '<p class="card-text" style="color: black;">'+localidad+'</p>';
            var p5 = '<p class="card-text" style="color: black;">'+categoria+'</p>';
            var p6 = '<p class="card-text" style="color: black;">'+date+ " "+quantityDay+'</p><br>';
            var p7 = '<p class="card-text" style="color: black;">'+capacity+'</p><br>';
            */
            var b1 = `<td><button id="${id}" type="submit" class="btn btn-danger btn-block text-center" name="Eliminar" value="Eliminar" onclick=deleteAlojamiento(this)>  eliminar</td>`;

            var registro = "<section class='py-5'><div class='container px-4 px-lg-5 my-5'><div class='row gx-4 gx-lg-5 align-items-center'><div class='col-md-6'  id='insert'><img src=img/" + url + ".jpg alt= Image height=100% width=100%></div><div class='col-md-6'><div class='small mb-1'><h2>" + mcategoria + "</h2></div><h1 class='display-5 fw-bolder'>" + name + "</h1><div class='fs-5 mb-5'><span class='text-decoration-line-through'>" + priceday + '€/día --> ' + "</span>"+quantityDay*priceday+" € TOTAL<span><p>"+mlocalidad+"</p><p>"+date+"</p><p>Direccion="+address+"</p><p>Cantidad Personas="+capacity+"</p></span></div><p class='lead'></p><div class='d-flex'></div></div></div></div></section>"
            insertadmin.insertAdjacentHTML('beforeend', registro);
            insertadmin.insertAdjacentHTML('beforeend', b1);
/*
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
*/
        }
        
        
        }
    }
    
}
function deleteAlojamiento(thisobj) {
    var xhttp = new XMLHttpRequest();
    var id = thisobj.getAttribute("id");
    xhttp.open("DELETE", "../Poyecto-Final-De-Grado-main/apiAlojamiento.php?ID_ALOJAMIENTO=" + id, true);
    xhttp.send();
}

    
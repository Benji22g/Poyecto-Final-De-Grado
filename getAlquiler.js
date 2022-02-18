window.onload = function (){
         var xhttp= new XMLHttpRequest();
         xhttp.open("GET","../Poyecto-Final-De-Grado-main/apiAlquiler.php?ID_USER="+iduser,true);
         xhttp.send();
         xhttp.onreadystatechange=function() {
             if (xhttp.readyState == 4 && this.status==200) {
                 var variable=JSON.parse(this.responseText);
                 
             for(i = 0; i < variable.length; i++){
     
                 var insert = document.getElementById("insert");
                 var assesment = variable[i].ASSESSMENT;
                 var state = variable[i].STATE;
                 var idalojamiento = variable[i].ID_ALOJAMIENTO;
                 var iduser = variable[i].ID_USER;
                 var idalquiler = variable[i].ID_ALQUILER;


                 var h4 = '<h4 class="card-title">'+idalquiler+'</h4>';
                 var p1 = '<p id="hola" class="card-text" style="color: black;" value ="tuki">'+iduser+'</p>';
                 var p2 = '<p class="card-text" style="color: black;">'+idalojamiento+'</p>';
                 var p3 = '<p class="card-text" style="color: black;">'+state+'</p>';
                 var p4 = '<p id = "identificador" class="card-text" style="color: black;">'+assesment+'</p><br>';
                 var b1 = `<td><button id="${idalojamiento}" type="submit" class="btn btn-danger btn-block text-center" name="Reservar" value="Reservar" onclick=updalquiler(this)>UPDATE</td>`;
     
                 insert.insertAdjacentHTML('beforeend', h4);
                 insert.insertAdjacentHTML('beforeend', p1);
                 insert.insertAdjacentHTML('beforeend', p2);
                 insert.insertAdjacentHTML('beforeend', p3);
                 insert.insertAdjacentHTML('beforeend', p4);
                 insert.insertAdjacentHTML('beforeend', b1);
     
             }
             
             
             }
         }
        
        }

function updalquiler(idalquiler){
    var insert = document.getElementById("insert");
    var form = "<form><input type='number' name='state'></form>"

}
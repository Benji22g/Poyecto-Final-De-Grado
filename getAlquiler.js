window.onload = function (){
         var xhttp= new XMLHttpRequest();
         xhttp.open("GET","../Poyecto-Final-De-Grado-main/apiAlquiler.php?ID_USER="+iduser,true);
         xhttp.send();
         xhttp.onreadystatechange=function() {
             if (xhttp.readyState == 4 && this.status==200) {
                 var variable=JSON.parse(this.responseText);
                 
             for(i = 0; i < variable.length; i++){
     
                 var insert = document.getElementById("insert");
                 var name = variable[i].NAME;
                 var email = variable[i].EMAIL;
                 var lastname = variable[i].LASTNAME;
                 var nick = variable[i].NICK;
                 var id = variable[i].ID;
     
                 var h4 = '<h4 class="card-title">'+nick+'</h4>';
                 var p1 = '<p id="hola" class="card-text" style="color: black;" value ="tuki">'+name+'</p>';
                 var p2 = '<p class="card-text" style="color: black;">'+lastname+'</p>';
                 var p3 = '<p class="card-text" style="color: black;">'+email+'</p>';
                 var p4 = '<p id = "identificador" class="card-text" style="color: black;">'+id+'</p><br>';
                 var b1= '<input type="button" name="Eliminar" value="Eliminar" onclick=deleteUser()>'
     
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
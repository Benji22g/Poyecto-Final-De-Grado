window.onload = function () {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "http://localhost/astu-poyecto%20final/Poyecto-Final-De-Grado-main/apiUser.php", true);
    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && this.status == 200) {
            var variable = JSON.parse(this.responseText);

            for (i = 0; i < variable.length; i++) {

                var insert = document.getElementById("insert");
                var name = variable[i].NAME;
                var email = variable[i].EMAIL;
                var lastname = variable[i].LASTNAME;
                var nick = variable[i].NICK;
                var id = variable[i].ID;

                var h4 = '<td id="hola">' + nick + '</td>';
                var p1 = '<td>' + name + '</td>';
                var p2 = '<td>' + lastname + '</td>';
                var p3 = '<td>' + email + '</td>';
                var p4 = '<td id="identificador"> ' + id + '</td>';
                var b1 = '<td><button type="submit" class="btn btn-danger btn-block text-center" name="Eliminar" value="Eliminar" onclick=deleteUser()> eliminar</td>'

                var result = h4 + p1 + p2 + p3 + p4 + b1;


                insert.insertAdjacentHTML('beforeend', result);


            }


        }
    }
}
function deleteUser() {
    console.log("holi");
    var xhttp = new XMLHttpRequest();
    var id = document.getElementById('identificador').textContent;
    console.log("holi1");
    console.log(id);
    xhttp.open("DELETE", "http://localhost/astu-poyecto%20final/Poyecto-Final-De-Grado-main/apiUser.php?ID=" + id, false);
    xhttp.send();
}
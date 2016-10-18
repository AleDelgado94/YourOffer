/**
 * Created by Ale Delgado on 22/12/2015.
 */

$(document).ready(function() {

    $('#btn_addoffer').click(function () {
        $.ajax({
            url: 'add_offer.html',
            success: function (data) {
                $('#cuerpo').html(data);
            }
        });
    });
    $('#btn_searchoffer').click(function () {
        $.ajax({
            url: 'search_offer.html',
            success: function (data) {
                $('#cuerpo').html(data);
            }
        });
    });
});


function registro(form){

    registro2()
    return true;

}

function registro2(){

    var myDataRef = new Firebase('https://youroffer.firebaseio.com/REGISTRO_USUARIOS');

    var nombre = document.getElementById('name_registro').value;
    var apellidos = document.getElementById('surname_registro').value;
    var email = document.getElementById('email_registro').value;
    var pass = document.getElementById('pass_registro').value;
    var pass2 = document.getElementById('pass2_registro').value;
    var usuario = document.getElementById('username_registro').value;
    var nombre_negocio = document.getElementById('name_negocio_registro').value;
    var lugar_negocio = document.getElementById('lugar_negocio_registro').value;

    myDataRef.push({Nombre: nombre , Apellidos: apellidos, Usuario: usuario, EMail: email, Pass: pass, Negocio_Nombre: nombre_negocio, Negocio_Lugar:lugar_negocio});


}

function reg(){
    var js = '{"Baltimore":"Orioles", "Boston":"Red Sox", "New York":"Yankees", "Atlanta":"Braves", "Florida":"Marlins"}';
    var json = JSON.parse(js);



    $(document).ready(function() {
        $.each(json, function(city, team) {
            document.write("<p>The " + city + " " + team + "</p>");

        });
    });
}




/*
angular.module("youroffer", [])
    .controller('miCtrl', ['$scope', miCtrl]);

function miCtrl($scope) {

    $scope.ambito_nombre = "Alejandro D"

}
/*
var messagesRef = new Firebase('https://youroffer.firebaseio.com/REGISTRO_USUARIOS');

// Add a callback that is triggered for each chat message.
messagesRef.limitToLast(1).on('child_added', function (snapshot) {
    //GET DATA
    var data = snapshot.val();
    var username = data.nombre || "anonymous";
    var apellidos = data.apellidos;

    //CREATE ELEMENTS MESSAGE & SANITIZE TEXT
   /* var messageElement = $("<li>");
    var nameElement = $("<strong class='example-chat-username'></strong>")
    nameElement.text(username);
    messageElement.text(message).prepend(nameElement);

    //ADD MESSAGE
    messageList.append(messageElement)

    //SCROLL TO BOTTOM OF MESSAGE LIST
    messageList[0].scrollTop = messageList[0].scrollHeight;*/

/*});
*/

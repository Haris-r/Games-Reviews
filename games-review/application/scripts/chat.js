$(document).ready(function(){

    var socket = io.connect("http://localhost:8000");

    $("form").submit(function(e){

        e.preventDefault();

        socket.emit("client message", $("#msg").get(0).value);

        $("#msg").get(0).value = "";

    });

    socket.on("server message", function(data){

        $("#chatspace").append(data + "<br>");

    });

    socket.on('connect', function(){

        $('#chatButton').click(openForm());

    });

    socket.on('disconnect', function(){

        $('#chatButton').click(closeForm());

    });

});
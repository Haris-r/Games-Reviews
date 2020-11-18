var app = require('http').createServer(handler)
var io = require('socket.io')(app);
var fs = require('fs');

// Create a new server using the listen function, specifying the port number here.

// Handle if the user connecting is new or not.
var newConnection = true;

// Handle the head response.
function handler (req, res) {
    fs.readFile(__dirname + '/index.html',
        function (err, data) {
            if (err) {
                res.writeHead(500);
                return res.end('Error loading index.html');
            }
            res.writeHead(200);
            res.end(data);
        });
}


io.on('connection', function(socket){
//   Code your server here...
    console.log('a new user connected');

    socket.on('client message', function(data){

        console.log("client message recieved:" + data);

        io.emit("server message", data);

    });

    socket.on('disconnected', function(){

        console.log('user disconnected');


    });


});

app.listen(8000, function(){

    console.log("Server is ready")
});
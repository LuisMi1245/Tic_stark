var http = require('http');
var fs = require('fs');
function webServer(request, response) {
    console.log("Petición hecha por: " + request.url);
    response.writeHead(200, {'Content-Type': 'text/html'});
    var ReadHtml = fs.createReadStream(__dirname + '/prueba.html', 'utf8');
    ReadHtml.pipe(response);
}

http
    .createServer(webServer)
    .listen(3000, "localhost");


console.log('Servidor corriendo en http://localhost:3000/');

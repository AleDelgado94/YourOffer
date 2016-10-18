var http = require("http");

function peticionServer(req, resp)
{
    resp.writeHead(200,{"Content-Type" : "text/html"});
    resp.write("<h1>Hola</h1>");
    resp.end();
}

http.createServer(peticionServer).listen(8888);
console.log("Server Create.\n Running...");
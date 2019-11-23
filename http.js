let http = require("http");
let url = require("url");
let fs = require("fs");
http
  .createServer(function(req, res) {
    let q = url.parse(req.url, true);
    let fileName = "." + q.path;
    fs.readFile(fileName, function(err, data) {
      if (err) {
        res.writeHead(404, { "Content-type": "text/html" });
        return res.end("404 not found");
      }
      res.writeHead(data);
      return res.end();
    });
  })
  .listen(8080);

const fs = require("fs");
const path = require("path");
const fsPromises = require("fs").promises;
const http = require("http");

const server = http.createServer((req, res) => {
    console.log(req.url);
    // res.statusCode = 200;
    // res.setHeader("Content-Type", "text/plain");
    // res.end("Hello World");
    let constanType;
    const extension = path.extname(req.url);
    switch (exptension) {
        case ".css":
            constanType = "text/css";
            break;
        case ".js":
            constanType = "text/js";
            break;
        case ".txt":
            constanType = "text/plain";
            break;
        case ".json":
            constanType = "application/json";
            break;
        case ".img":
            constanType = "image/jpeg";
            break;
        case ".png":
            constanType = "image/png";
            break;
        default:
            constanType = "text/html";
    }
    let filePath = constanType == "text/html" && req.url === "/"
                        ? path.join(__dirname, "views", "index.html")
                        : constanType === "text/html" && req.url.slice(-1) === "/"
                        ? path.join(__dirname, "views", "index.html")
                        : constanType === "text/html"
                        ? path.join(__dirname, "views", req.url)
                        : path.join(__dirname, req.url)
});

server.listen(3000, () => {
    console.log("Server is listining on port 3000");
});
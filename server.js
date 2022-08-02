const { Server } = require("socket.io");
const app = express();
let port = process.env.PORT || 8080;
const server = http.createServer(app);
server.listen(port, () => console.log("App listening at localhost:" + port));

const io = require("socket.io")(server, {
    cors: { origin: "*" },
});

io.on("connection", (socket) => {
    console.log("connection");

    socket.on("sendChatToServer", (message) => {
        console.log(message);

        //io.sockets.emit("sendChatToClient", message);
        socket.broadcast.emit("sendChatToClient", message);
    });

    socket.on("disconnect", (socket) => {
        console.log("Disconnect");
    });
});

server.listen(3000, () => {
    console.log("Server is running");
});

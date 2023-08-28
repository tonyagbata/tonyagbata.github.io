var socket = new WebSocket("ws://localhost:8080/");

socket.onopen = function () {
    console.log("Connected to the WebSocket server");
};

socket.onmessage = function (event) {
    console.log(event.data);
};

socket.onclose = function () {
    console.log("Disconnected from the WebSocket server");
};

// Send a message to the server
socket.send("Hello, world!");

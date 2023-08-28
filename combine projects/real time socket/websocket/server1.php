<?php
// Create a WebSocket server
$server = new \WebSocket\Server('0.0.0.0', 8080);

// Handle WebSocket events
$server->on('open', function ($connection) {
    echo "New client connected\n";
});

$server->on('message', function ($connection, $message) use ($server) {
    echo "Received message from client: $message\n";

    // Process the received message
    // ...

    // Send a response to the client
    $response = "Hello, client!";
    $connection->send($response);
});

$server->on('close', function ($connection) {
    echo "Client disconnected\n";
});

// Start the WebSocket server
$server->run();
?>

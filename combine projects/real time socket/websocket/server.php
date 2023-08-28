<?php

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

class Socket {
  public function onOpen($conn) {
    echo "New connection opened\n";
  }

  public function onMessage($conn, $message) {
    echo "Received message: {$message}\n";
    $conn->send($message);
  }

  public function onClose($conn) {
    echo "Connection closed\n";
  }
}

$app = new IoServer(new HttpServer(new WsServer(new Socket())), 8080);
$app->run();

?>

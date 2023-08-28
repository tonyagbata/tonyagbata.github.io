<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');

// Function to send an SSE event to the client
function sendEvent($event, $data) {
    echo "event: $event\n";
    echo "data: $data\n";
    echo "\n";
    ob_flush();
    flush();
}

// Example: Send a random number every second
while (true) {
    $randomNumber = rand(1, 100);
    sendEvent('randomNumberEvent', $randomNumber);
    sleep(1);
}
?>

<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
// header('Connection: keep-alive');

$time = date('r');
// echo "data: The server time is: {$time}\n\n";

$cars = array("Lambogini", "BMW", "Toyota");

$brand = json_encode($cars);

echo "data: {$brand} \n\n";

flush();

// sleep(2);
?>
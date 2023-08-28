<?php

$dbhost = "localhost";
$dbname = "shopping_cart";
$dbuser = "root";
$dbpass = "";

try{
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

}catch(PDOException $e){ $error_message = $e-> getMessage();
    echo $error_message;
exit();
}
?>
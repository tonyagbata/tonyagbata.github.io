<?php

$productName = $_POST['productName'];
$productDescription = $_POST['productDescription'];
$productPrice = $_POST['productPrice'];


if (!empty($_POST)) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_cart";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = "INSERT INTO products (product, prices, descriptions)
    VALUES ('product: $productName', 'prices: $productPrice', 'descriptions: $productDescription')";
   
    $conn->exec($sql);
    
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
    }

    echo '
    <script>
    alert ("Your products have been updated")

    window.location = "upload.php"
    </script>
    ';
?>


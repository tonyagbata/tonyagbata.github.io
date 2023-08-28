<?php
session_start();
require_once('./store/componet.php');
require_once('./store/database.php');

if (isset($_POST["add_cart"])) {

    if (isset($_SESSION['cartID'])) {
        $_SESSION["cartID"];

        $sayArray = $_POST["numId"];
        // $arrayCrt = array('Name' => $sayArray);
        $_SESSION["cartID"][0] = $sayArray;
   
        $items_in_array = array_column($_SESSION['cartID'], $_POST["numId"]);

        print_r($items_in_array);

             
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<?php
include_once 'head.php';
?>
<body>

<header>
    <nav>
        <ul>
            <a href="index.php">Home</a>

            <li>Sign in</li>

        </ul>
    </nav>
</header>
   
<main>

<a href="control/upload.php">Upload Products</a>

    
    <section class="container">

    <?php

    $query = "SELECT * FROM products";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) > 0){

        // foreach($result as $rows){
        //     componet($rows['descriptions'], $rows['prices'], $rows['product'], $rows['id']);
        // }

        while ($rows = mysqli_fetch_array($result)) {
           componet($rows['descriptions'], $rows['prices'], $rows['product'], $rows['id']);
        }

    }else{
        echo "Did not connect";
    }

    ?>


    </section>
</main>
<?php
include_once 'foot.php';

?>

<script src="js/jquerry.3.6.js"></script>
<script src="js/script.js"></script>
    
</body>
</html>
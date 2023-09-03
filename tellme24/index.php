<?php
session_start();

if (isset($_GET["id"])) {
    if ($_GET["id"] == "account") {
        $_SESSION["user"] = "Account User";

        echo '
        <script>
        alert("Signed in Temporially")
        </script>
        ';
    } else if ($_GET["id"] == "view") {
        session_destroy();
        echo '
        <script>
        alert("Logged out")
        location = "home"
        </script>
        ';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Socail Media and Networking App">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/landing.css">
    <title>tell me - social network</title>
</head>

<body>
    <?php
    require_once 'controller/head.php';
    ?>

    <div id="mainApp"></div>

    <?php
    require_once 'controller/foot.php';
    ?>

</body>
<script src="jquery.3.7.0.js"></script>
<script src="vue.3.3.4.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="views/googleTranslator.js"></script>
<script src="controller/url.js"></script>
<script src="views/landing.js"></script>
<script src="views/animation.js"></script>
<script src="controller/btn_navigator.js"></script>

</html>
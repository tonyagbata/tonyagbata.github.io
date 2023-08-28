<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Communicate PHP</title>
</head>
<body>

<p id="showMe"></p>
    <form method="POST">

    <input type="text" name="quote">
    <input type="submit" value="Enter Quotes">

    </form>

    <?php

    if(isset($_POST['quote'])){
   

    echo '
    <script>

    const showMe = document.getElementById("showMe")

    showMe.innerHTML = "'.$_POST['quote'].'";
       // alert("'.$_POST['quote'].'");
    </script>';
    }
    ?>
</body>
</html>
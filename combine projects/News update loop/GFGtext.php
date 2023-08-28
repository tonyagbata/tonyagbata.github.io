<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GFG</title>
</head>
<body>

    <div id="Desk"></div>
    <p id="loading"></p>

<script src="jquerry.3.6.js"></script>

    <script>

    const loadServers = document.getElementById("loading")
    const Deskshow = document.getElementById("Desk") 
        $.ajax({
            url: "GFG.xml",
            type: "GET",
            success: function(response){

                console.log(response)

            },

            beforeSend:function(){
                loadServers.innerHTML = "Loading...";
		console.log("Loading....")
	},
	complete:function(){
        loadServers.innerHTML = "Loaded";
		console.log("Data recieved successfully")
	},
   	error:function(err){
       		console.log(err)
   	},

        })

    </script>



<!--   Stop!
<?php
// stringifying with php
$path = "GFG.xml";
$xmlfile = file_get_contents($path);
$new = simplexml_load_string($xmlfile);
$con = json_encode($new);

$newArr = json_decode($con, true);

//print_r($newArr);

//var_dump($con);

//echo $con;
?>

    -->
    
</body>
</html>

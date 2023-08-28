<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #displayDoc{
            font-family: calibri;
            line-height: 1;
        }
        #loader {
            position: fixed;
            left: 500px;
            right: 500;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 100px;
            height: 100px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
}

#displayDoc h2{
    text-transform: uppercase;
    color: red;

}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
    </style>
    <title>Google News Loop</title>
</head>
<body>

<section id="displayDoc">
<h2 >Top Stories</h2>
<span id="loader"></span>

</section>
   
</body>
</html>

<script src="jquerry.3.6.js"></script>

<script>
const displayDoc = document.getElementById("displayDoc");
//const loader = document.getElementById("loader");
//document.addEventListener("DOMContentLoaded", loadBabo);
loadBabo();
function loadBabo(){      
                $.post('googleNews.php?action=getNews', function(response){
                let itShow = $('#displayDoc').html(response);
                let displayDoc1 = document.getElementsByTagName("div");
                let displayDoc2 = document.querySelectorAll("div");

                $("#loader").hide();

                setTimeout(() => {
displayDoc2[0].remove();
}, 10000);

setTimeout(() => {
displayDoc2[1].remove();
}, 20000);

setTimeout(() => {
displayDoc2[2].remove();
}, 30000);

setTimeout(() => {
displayDoc2[3].remove();
}, 40000);

setTimeout(() => {
displayDoc2[4].remove();
}, 50000);

setTimeout(() => {
displayDoc2[5].remove();
}, 60000);

setTimeout(() => {
displayDoc2[6].remove();
}, 70000);

setTimeout(() => {
displayDoc2[7].remove();
}, 80000);

setTimeout(() => {
displayDoc2[8].remove();
}, 90000);

setTimeout(() => {
displayDoc2[9].remove();
}, 100000);

setTimeout(() => {
displayDoc2[10].remove();
}, 110000);

setTimeout(() => {
displayDoc2[11].remove();
}, 120000);

setTimeout(() => {
displayDoc2[12].remove();
}, 130000);

setTimeout(() => {
displayDoc2[13].remove();
}, 140000);

setTimeout(() => {
displayDoc2[14].remove();
}, 150000);

setTimeout(() => {
displayDoc2[15].remove();
}, 160000);

setTimeout(() => {
displayDoc2[16].remove();
}, 170000);

setTimeout(() => {
displayDoc2[17].remove();
}, 180000);

setTimeout(() => {
displayDoc2[18].remove();
}, 190000);

setTimeout(() => {
displayDoc2[19].remove();
}, 200000);

setTimeout(() => {
displayDoc2[20].remove();
}, 210000);

setInterval(() => {
      loadBabo();
}, 220000);
                
            });
        }
</script>


<?php
$xml = simplexml_load_file('https://news.google.com/rss/search?q=african%20political%20news&hl=en-NG&gl=NG&ceid=NG%3Aen');

if( isset($_REQUEST['action']) ){

    switch( $_REQUEST['action'] ){

    case "getNews":

    foreach($xml as $babo){   

    foreach($babo->item as $showMe){
        echo "<div> <h3> $showMe->title </h3>
        <p> $showMe->description</p>
        <p> $showMe->pubDate</p> <hr>
        </div>";
    }
}
        break;
    } 
}
?>
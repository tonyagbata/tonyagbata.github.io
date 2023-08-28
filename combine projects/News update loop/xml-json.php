<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<section id="displayDoc">

</section>
    
</body>
</html>

<script src="jquerry.3.6.js"></script>

<script>

    const displayDoc = document.getElementById("displayDoc");

document.addEventListener("DOMContentLoaded", loadBabo);

function loadBabo(){           
        
                $.post('rss-feed.php?action=getNews', function(response){
                let itShow = $('#displayDoc').html(response);
                let displayDoc1 = document.getElementsByTagName("div");
                let displayDoc2 = document.querySelectorAll("div");

                setTimeout(() => {
displayDoc2[0].remove();
}, 5000);

setTimeout(() => {
displayDoc2[1].remove();
}, 10000);

setTimeout(() => {
displayDoc2[2].remove();
}, 15000);

setTimeout(() => {
displayDoc2[3].remove();
}, 20000);

setTimeout(() => {
displayDoc2[4].remove();
}, 25000);

setTimeout(() => {
displayDoc2[5].remove();
}, 30000);

setTimeout(() => {
displayDoc2[6].remove();
}, 35000);

setTimeout(() => {
displayDoc2[7].remove();
}, 40000);

setTimeout(() => {
displayDoc2[8].remove();
}, 45000);

setTimeout(() => {
displayDoc2[9].remove();
}, 50000);

setTimeout(() => {
displayDoc2[10].remove();
}, 55000);

setTimeout(() => {
displayDoc2[11].remove();
}, 60000);

setTimeout(() => {
displayDoc2[12].remove();
}, 65000);

setTimeout(() => {
displayDoc2[13].remove();
}, 70000);

setTimeout(() => {
displayDoc2[14].remove();
}, 75000);

setTimeout(() => {
displayDoc2[15].remove();
}, 80000);

setTimeout(() => {
displayDoc2[16].remove();
}, 85000);

setTimeout(() => {
displayDoc2[17].remove();
}, 90000);

setTimeout(() => {
displayDoc2[18].remove();
}, 95000);

setTimeout(() => {
displayDoc2[19].remove();
}, 100000);

setTimeout(() => {
displayDoc2[20].remove();
}, 105000);

setInterval(() => {
      loadBabo();
}, 110000);
                    //console.log(displayDoc2[9]);

            });
        }
       
/*
    function babo(jmx) {

        let showBabo = jmx.getElementsByTagName("item");
        console.log(showBabo);
        
    }

    babo();

*/
</script>
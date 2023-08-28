<?php
//$xml = new simpleXMLElement('roads.xml', 0, TRUE);

$xml = simplexml_load_file('roads.xml');

echo ('<pre>');
//var_dump($xml);
//print_r($xml);
echo ('</pre>');

/*
foreach($xml as $babo){

    foreach($babo->item as $showMe){
        //echo $showMe->title ."<br>", $showMe->description ."<hr>";
        echo "<div> <b>$showMe->title</b> <p>$showMe->description</p> <hr></div>";

        //echo $showMe->title;
        
    }
  

}
*/



if( isset($_REQUEST['action']) ){

    switch( $_REQUEST['action'] ){

    case "getNews":

    foreach($xml as $babo){   

    foreach($babo->item as $showMe){
        //echo $showMe->title ."<br>", $showMe->description ."<hr>";
        echo "<div> <b>$showMe->title</b> <p>$showMe->description</p> <hr></div>";
        //echo $showMe->title;   
    }
  

}
        break;
    } 
}
?>
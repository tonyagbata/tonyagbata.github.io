<?php
// Start php code
// Load xml file into xml_data variable
$xml_data = simplexml_load_file("roads.xml") or
die("Error: Object Creation failure");

// Use foreach loop to display data and for sub elements access,
// We will use children() function

//print_r($xml_data);

foreach ($xml_data as $data)
{

	foreach($data->item as $showDataz){

		echo "<b>Title :</b> ", $showDataz->title . "<br> ";
	echo "<b>Discription :</b> ", $showDataz->description . "<br> ";
	echo "<b>Road :</b> ", $showDataz->road . "<br> ";
	echo "<b>Region : </b>", $showDataz->region . "<br>";
	echo "<b>Date : </b>", $showDataz->pubDate . "<br>";
	echo "<hr>";
	echo "<br>";

	}
};

?>

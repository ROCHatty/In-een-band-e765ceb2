<?php
$album = array(
	array(
		"naam"=>"Citizen of Glass",
		"prijs"=>4.5
	),
	array(
		"naam"=>"Night",
		"prijs"=>9
	),
	array(
		"naam"=>"New Eyes",
		"prijs"=>5
	),
	array(
		"naam"=>"Strange Trails",
		"prijs"=>10
	)
);
echo "Het albumoverzicht:\r\n";
$totaal = 0;
foreach ($album as $a) {
	echo $a['naam']." kost €".$a['prijs']."\r\n";
	$totaal = $totaal + $a['prijs'];
}
echo "\r\nHet totaalbedrag van alle albums is €".$totaal."\r\n";
$average = $totaal/count($album);
echo "De gemiddelde prijs van alle albums is €".round($average, 2);
?>
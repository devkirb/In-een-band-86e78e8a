<?php
$albums = array( 
"Citizen of Glass" => 4.5,
"Night" => 9,
"New Eyes" =>5,
"Strange Trails" => 10 );
foreach ($albums as $nummers => $prijs){
echo "> $nummers kost $$prijs" . PHP_EOL;
$totaal = $totaal + $prijs;
$aantalnummers = $aantalnummers + 1;
}
echo "> Alle albums bij elkaar kost $$totaal" . PHP_EOL;
$gemiddeld = $totaal / $aantalnummers;
echo "> De albums bij elkaar kosten gemiddeld $$gemiddeld";
<?php
$fikri1 = "indonesia tanah air ku tanah tumpah darahku disanalah aku berdiri jadi pandu ibuku indonesia kebangsaanku bangsa dan tanah air ku merilah kita berseru indonesia bersatu hiduplah tanahku hiduplah negriku bangsaku rakyatku semuanya bangunlah jiwanya bangunlah badannya untuk indonesia raya, indonesia raya merdeka merdeka tanah ku negriku yang kucinta indonesia raya merdeka merdeka hiduplah indonesia raya";
$fikri2 = $_POST["cari"];

$proses = explode(" ", $fikri1);

for ($i=0; $i < count($proses); $i++) { 
	if ($fikri1[$i] == $fikri1) {
		echo $proses[$i] = "<b>$fikri1</b>";
	}
}

?>
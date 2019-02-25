<?php
	function tervita($enimi="Hea", $pnimi="Kylaline"){
        return "Tere $enimi $pnimi";
    }

	echo tervita();
	echo "<br>";
	echo tervita("Karin", "Eegreid");
	echo "<br>";
	echo tervita("Imre", "Tard");
?>
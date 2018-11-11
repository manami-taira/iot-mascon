<?php

require("phpMQTT.php");

	
$mqtt = new phpMQTT("iot.eclipse.org", 1883, "phpMQTT Test Publisher");

if ($mqtt->connect()) {
	$mqtt->publish("/iot-plarail/eh200",'{"mode":"forward"}');
	$mqtt->close();
}

?>

<?php

require("phpMQTT.php");

$input_mode = $_POST['mode'];
$err_message = '';

$mqtt = new phpMQTT("iot.eclipse.org", 1883, "IoT Plarail Master Controller WebApp");

if ($mqtt->connect()) {
    switch($input_mode){
    case 'forward':
	$mqtt->publish("/iot-plarail/eh200",'{"mode":"forward"}');
        break;
    case 'stop':
	$mqtt->publish("/iot-plarail/eh200",'{"mode":"stop"}');
        break;
    }

    $mqtt->close();
} else {
    $err_message = 'Connection Error:';
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=320,initial-scale=1">
<link rel="stylesheet" href="buttons.css">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
<title>IoTマスコン for EH200</title>
</head>
<body>
<div align="center">
<img src="title.png" alt="IoTマスコン for プラレール" /><br />
<br />
<?php
    switch($input_mode){
    case 'forward':
	print("発車します");
        break;
    case 'stop':
	print("停車しました");
        break;
    default:
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        break;
    }
?>
<br />
<br />
<form method="POST" action="index.php">
	<span class="button-wrap">
	<button class="button button-caution button-pill" name="mode" value="stop"><i class="fa fa-stop"></i> 停車</button>
	</span>
	<br />
	<br />
	<span class="button-wrap">
	<button class="button button-action button-pill" name="mode" value="forward"><i class="fa fa-play"></i> 発車</button>
	</span>
	<br />
</form>
<hr />
</div>
<br />
<?php print($err_message); ?>
</body>
</html>

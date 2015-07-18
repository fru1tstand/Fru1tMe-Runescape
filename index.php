<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/.site/php/runescape/Autoload.php";
use fru1tme\pages\Handler;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>title</title>

	<link type="text/css" rel="stylesheet" href="/.site/styles/desktop.css" />
</head>
<body>
<?php
/** @noinspection PhpIncludeInspection */
include Handler::getRequestedPageLocation();
?>
</body>
</html>
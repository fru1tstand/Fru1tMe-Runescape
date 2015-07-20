<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/.site/php/runescape/RsAutoload.php";
use common\base\Autoload;
use common\base\PageHandler;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>title</title>

	<!--
		Hi! Nice to see you here ^^
		Check out how this site was made here: https://github.com/fru1tstand/Fru1tMe-Runescape

		Want to know more about me? See my resume at: http://fru1t.me/about/resume
		I also have a LinkedIn and stuff.

		Hope you find what you're looking for :)
		Have a good day!
	-->

	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Gudea" />
	<link type="text/css" rel="stylesheet" href="/.site/styles/desktop.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="/.site/js/global/global.php"></script>
</head>
<body>

<?php
/** @noinspection PhpIncludeInspection */
include Autoload::getInjector()->getInstance(PageHandler::class)->getRequestedPageLocation();
?>
	<footer>
		<a href="http://runescape.com">RuneScape</a>
		is copyright 1999–2015 Jagex Ltd. Fru1t.Me is in no	way affiliated  with Jagex.
	</footer>
</body>
</html>
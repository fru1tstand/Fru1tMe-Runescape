<?php
// This file consolidates all js files within the global directory and outputs them as a single
// succinct JS file
header('Content-Type: application/javascript');

foreach (glob("*.js") as $file) {
	/** @noinspection PhpIncludeInspection */
	include $file;
}
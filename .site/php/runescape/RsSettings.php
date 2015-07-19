<?php
namespace runescape;
require_once $_SERVER["DOCUMENT_ROOT"] . "/.site/php/runescape/RsAutoload.php";
use common\base\Settings;

/**
 * Class Settings
 * @package runescape
 */
class RsSettings extends Settings {
	/**
	 * Determines if debugging is enabled. Mainly used for debug messages, but also has some
	 * other side effects.
	 * @return bool
	 */
	public function enableDebug() {
		return true;
	}
}
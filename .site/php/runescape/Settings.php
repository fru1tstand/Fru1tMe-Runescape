<?php
namespace runescape;
require_once $_SERVER["DOCUMENT_ROOT"] . "/.site/php/runescape/Autoload.php";
use common\base\BaseSettings;

/**
 * Class Settings
 * @package runescape
 */
class Settings extends BaseSettings {
	/**
	 * Determines if debugging is enabled. Mainly used for debug messages, but also has some
	 * other side effects.
	 * @return bool
	 */
	public function enableDebug() {
		return true;
	}
}
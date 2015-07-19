<?php
namespace runescape;
use common\base\PageHandler;

/**
 * Class RsPageHandler
 * @package runescape
 */
class RsPageHandler extends PageHandler {
	protected function getPageFolderPath() {
		return $_SERVER['DOCUMENT_ROOT'] . "/.site/php/runescape/pages";
	}

	protected function getDefaultPagePath() {
		return $this->getPageFolderPath() . "/home.php";
	}

}
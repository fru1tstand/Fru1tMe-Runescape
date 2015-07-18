<?php
namespace runescape;
require_once $_SERVER["DOCUMENT_ROOT"] . "/.site/php/common/base/BaseAutoload.php";
use common\base\BaseAutoload;
use common\milk\inject\AbstractModule;
use common\milk\Milk;

/**
 * This file serves as an init file. It provides missing dependencies and sets up sessions,
 * constants, etc before any other php script runs. It is included in every PHP file.
 */
class Autoload extends BaseAutoload {
	/**
	 * Returns the injector associated with the website
	 * @return AbstractModule[]
	 */
	protected function getMilkInjector() {
		return Milk::createInjector(
				new Module()
		);
	}
}
Autoload::init(new Autoload());
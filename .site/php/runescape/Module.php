<?php
namespace runescape;
use common\milk\inject\AbstractModule;
use common\base\BaseSettings;

/**
 * Class Module
 * @package runescape
 */
class Module extends AbstractModule {
	public function configure() {
		self::bind(BaseSettings::class)->asSingletonTo(Fru1tmeSettings::class);
	}
}
<?php
namespace runescape;
use common\milk\inject\AbstractModule;
use common\base\Settings;
use common\base\PageHandler;

/**
 * Class Module
 * @package runescape
 */
class Module extends AbstractModule {
	public function configure() {
		self::bind(Settings::class)->asSingletonTo(RsSettings::class);
		self::bind(PageHandler::class)->asSingletonTo(RsPageHandler::class);
	}
}
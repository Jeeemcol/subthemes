<?php
require __DIR__ . '/vendor/autoload.php';

class SmartySubtheme extends Smarty {

	private $mag;

	function __construct($mag) {
		parent::__construct();
		$this->caching = 0;
// 		$this->setConfigDir('config')
// 			->setTemplateDir('templates')
// 			->setCompileDir('templates_c');
		$this->configLoad('my.conf', $mag);
// 		$this->configLoad('config/my.conf');	
// 		echo('s check:');
// 		print_r($this->templateExists('style.tpl'));
// 		echo('template check:');
// 		print_r($this->templateExists('style.tpl'));
		$this->mag = $mag;
	}

	function getMag() {
		return $this->mag;
	}
}

?>
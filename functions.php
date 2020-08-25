<?php

if (!defined('ABSPATH')) {
	exit('No direct script access allowed');
}

/**
 * @package AwesomeTheme
 * @version 1.0
 * @author Nguyen Anh Tuan
 *
 * Class Init for theme
 */
class AwesomeTheme {
	static $getInstance = null;

	public $version = '1.0';

	public static function getInstance() {
		if (!(self::$getInstance instanceof self)) {
			self::$getInstance = new self();
		}
		return self::$getInstance;
	}

	protected function __construct() {
		// Init scripts for theme.
		$this->AwesomeScripts();
	}

	/**
	 * AwesomeScripts
	 * Load library object script.
	 *
	 * @return void
	 */
	protected function AwesomeScripts() {
		require_once 'inc/AwesomeScripts.php';
		new AwesomeScripts;
	}

    public function pageTemplateInit()
    {
        require_once get_template_directory() . '/inc/parrams/template/PageTemplateInit.php';
        return PageTemplateInit::getInstance();
    }
}

function AwesomeTheme() {
	return AwesomeTheme::getInstance();
}

$GLOBALS['awesomeTheme'] = AwesomeTheme();

include 'inc/AfterSetupTheme.php';

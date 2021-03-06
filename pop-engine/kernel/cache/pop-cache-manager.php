<?php
namespace PoP\Engine;

class CacheManager extends CacheManagerBase {

	function __construct() {

		parent::__construct();
		
    	CacheManager_Factory::set_instance($this);    
		add_action('init', array($this, 'init'));
	}

	function init() {

		// Allow the Theme to override the cache folder (eg: to add a custom folder after ir, eg: pop-cache/mesym/)
		if (!defined ('POP_CACHE_DIR')) {
			define ('POP_CACHE_DIR', WP_CONTENT_DIR.'/pop-cache');
		}
	}

	protected function get_cache_basedir() {

		return POP_CACHE_DIR;
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new CacheManager();

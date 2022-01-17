<?php
/**
 * @package  LucianoPlugin
 */
namespace Inc\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();

		$default = array();

		if ( ! get_option( 'luciano_plugin' ) ) {
			update_option( 'luciano_plugin', $default );
		}

		if ( ! get_option( 'luciano_plugin_cpt' ) ) {
			update_option( 'luciano_plugin_cpt', $default );
		}

		if ( ! get_option( 'luciano_plugin_tax' ) ) {
			update_option( 'luciano_plugin_tax', $default );
		}
	}
}
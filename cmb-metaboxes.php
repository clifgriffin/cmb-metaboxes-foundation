<?php
/**
 * CMB Framework
 *
 * Intended to be used as a single include for the fantastic
 * CMB Metabox library on websites with multiple implementations!
 *
 * @package   CGD_CMBFramework
 * @author    Clifton H. Griffin II <clif@cgd.io>
 * @license   GPL-2.0+
 * @link      http://cgd.io
 * @copyright 2014 CGD Inc.
 *
 * @wordpress-plugin
 * Plugin Name:       CMB Framework
 * Plugin URI:        http://cgd.io/
 * Description:       Intended to be used as a single include for the fantastic CMB Metabox library on websites with multiple implementations.
 * Version:           1.0.0
 * Author:            CGD Inc.
 * Author URI:        http://cgd.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

class CGD_CMBFramework {
	public function __construct() {
		add_action( 'init', array($this, 'cmb_initialize_cmb_meta_boxes'), 9999 );
	}

	function cmb_initialize_cmb_meta_boxes() {
		if ( ! class_exists( 'cmb_Meta_Box' ) )
			require_once dirname(__FILE__) . '/cmb/init.php';
	}
}

$CGD_CMBFramework = new CGD_CMBFramework();
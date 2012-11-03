<?php
/**
 * Required by WordPress.
 *
 * Keep this file clean and only use it for requires.
 */

if ( !class_exists( 'lessc' ) ) {
  require_once locate_template('/lib/less_compiler/lessc.inc.php'); // Less to CSS PHP Compiler
}
require_once locate_template('/lib/less.php');

require_once locate_template('/lib/customizer/customizer.php');     // Customizer functions
require_once locate_template('/lib/updater/licencing.php');         // Licencing to allow auto-updates

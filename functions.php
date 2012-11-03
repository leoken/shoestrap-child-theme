<?php
/**
 * Required by WordPress.
 *
 * Keep this file clean and only use it for requires.
 */

if ( !class_exists( 'lessc' ) ) {
  require_once locate_template('/lib/less.php');                // Less to CSS PHP Compiler
}

require_once locate_template('/lib/customizer/customizer.php'); // Customizer functions
require_once locate_template('/lib/custom.php');                // Custom functions

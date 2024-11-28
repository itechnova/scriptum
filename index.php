<?php
/**
 * Plugin Name: Scriptum
 * Plugin URI: https://jorgmendoz.cl/
 * Description: Plugin desarrollado con el Plugin Framework.
 * Version: 1.0.0
 * Author: Jorge Mendoza
 * Author URI: https://jorgmendoz.cl/
 * Text Domain: Jorge Mendoza
 * Domain Path: /languages
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ( ! defined( 'ABSPATH' ) ) exit; // Proteger el acceso directo


if ( ! defined( 'SCRIPTUM_BASE' ) ) {
	define( 'SCRIPTUM_BASE', plugin_dir_path( __FILE__ ) );
}

require_once SCRIPTUM_BASE . 'vendor/autoload.php';

use Itechnova\Scriptum\Core\Scriptum;

Scriptum::run();
<?php

/** @wordpress-plugin
 * Plugin Name:       LPI Core
 * Description:       Core plugin for LPI
 * Version:           1.0.0
 * Author:            LPI Team
 * License:           GPL version 3 or any later version
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       lpi-core
 * Domain Path:       /languages
 *
 **/

// Abort if this file is called directly.
if (!defined('ABSPATH')) {
    exit;
}

// Plugin DIR
define('ROOT', plugin_dir_path(__FILE__));

// Constants
require_once(ROOT . "/backend/constants.php");

// Scripts/Styles
require_once(ROOT . '/backend/scripts.php');

// Components
require_once(ROOT . '/backend/components/Header.php');

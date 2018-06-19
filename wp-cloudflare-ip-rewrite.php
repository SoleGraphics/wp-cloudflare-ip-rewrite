<?php

/**
 * @link 				https://www.solegraphics.com
 * @since 				1.0.0
 * @package 			Wp_Starter_Plugin
 *
 * @wordpress-plugin
 * Plugin Name: 		Sole Cloudflare IP
 * Plugin URI: 			https://www.solegraphics.com
 * Description: 		Ensure client IP is correct when sitting behind CloudFlare. Fixes AutoShip 403 issues.
 * Version: 			1.0.0
 * Author: 				Sole Graphics
 * Author URI: 			https://www.solegraphics.com
 * License: 			GPL-2.0+
 * License URI: 		http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: 		sole-cloudflare-ip
 * Domain Path: 		/languages
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once 'includes/IpUtils.php';
require_once 'includes/IpRewrite.php';

function sole_cloudflare_ip_rewrite() {
    return new SoleGraphics\IpRewrite();
}
$GLOBALS['solecloudflareip'] = sole_cloudflare_ip_rewrite();

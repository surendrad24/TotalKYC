<?php
/*
 * TotalKYC API Plugin for Wordpress
 * @package   totalkyc-api
 * @link      https://github.com/surendrad24/totalkyc-api
 * @author    Zack Mclane <hi@surendradonthamsetti.com>
 * @copyright 2022-2023 Zack Mclane
 * @license   GPL v2 or later
 * 
 * Plugin Name:  TotalKYC Plugin
 * Plugin URI:   www.digitalchameleontechnologies.com
 * Description:  TotalKYC plugin APIs allow you to authenticate 15+ acceptable KYC documents in real-time directly through Government Sources. 
 * Version:      1.0
 * Author:       Zack 
 * Author URI:   https://www.surendradonthamsetti.com
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  totalkyc-plugin
 * Domain Path:  /languages
 * Requires PHP: 5.3.6
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
*/
add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}


?>
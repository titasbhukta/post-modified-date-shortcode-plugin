<?php

/**
 * @link              https://titasbhukta.com
 * @since             1.0.0
 * @package           Post_Modified_Date_Shortcode
 *
 * @wordpress-plugin
 * Plugin Name:       Post Modified Date Shortcode
 * Plugin URI:        https://titasbhukta.com/plugin/post-modified-date-shortcode/
 * Description:       This is a plugin which gives you a shortcode to show the last modified date of a post instead of the publish date.
 * Version:           1.0.0
 * Author:            Titas Bhukta
 * Author URI:        https://titasbhukta.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       post-modified-date-shortcode
 * Domain Path:       /languages
 */


 function last_modified_time() {
    $modified_time = get_the_modified_time('F jS, Y');
    return "Last modified on: " . $modified_time;
}
add_shortcode('last_modified', 'last_modified_time');


?>
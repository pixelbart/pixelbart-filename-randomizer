<?php
/**
 * Plugin Name: Pixelbart Filename Randomizer
 * Description: Generates a unique filename for uploaded files using a random string.
 * Author: Pixelbart
 * Author URI: https://pixelbart.de
 * Version: 1.0.0
 * Plugin URI: https://github.com/pixelbart/pixelbart-filename-randomizer
 */

defined('ABSPATH') || exit;

add_filter('wp_unique_filename', function($filename, $ext, $dir, $unique_filename_callback, $alt_filenames, $number) {
    $uniqueName = bin2hex(random_bytes(16));
    $filename = $uniqueName . $ext;
    return $filename;
}, 10, 5);

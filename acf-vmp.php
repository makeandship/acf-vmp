<?php

/*
Plugin Name: Advanced Custom Fields: VMP
Plugin URI: http://www.github.com/makeandship/acf-vmp
Description: Select a Virtual Medicinal Product (VMP) from Dictionary of Medicines and Devices
Version: 1.0.0
Author: Make + Ship
Author URI: https://makeandship.com
*/

// exit if accessed directly
if (!defined('ABSPATH')) {
    exit();
}

// check if class already exists
if (!class_exists('acf_plugin_vmp')):
    class acf_plugin_vmp
    {
        /*
         *  __construct
         *
         *  This function will setup the class functionality
         *
         *  @type	function
         *  @date	17/02/2016
         *  @since	1.0.0
         *
         *  @param	n/a
         *  @return	n/a
         */

        var $settings;

        public function __construct()
        {
            // vars
            $this->settings = [
                'version' => '1.0.0',
                'url' => plugin_dir_url(__FILE__),
                'path' => plugin_dir_path(__FILE__),
            ];

            // set text domain
            // https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
            load_plugin_textdomain('acf-vmp', false, plugin_basename(dirname(__FILE__)) . '/lang');

            // include field
            add_action('acf/include_field_types', [$this, 'include_field_types']); // v5
            add_action('acf/register_fields', [$this, 'include_field_types']); // v4
        }

        /*
         *  include_field_types
         *
         *  This function will include the field type class
         *
         *  @type	function
         *  @date	17/02/2016
         *  @since	1.0.0
         *
         *  @param	$version (int) major ACF version. Defaults to 5
         *  @return	n/a
         */

        public function include_field_types($version = 4)
        {
            // include
            include_once 'fields/acf-vmp-v' . $version . '.php';
        }
    }

    // initialize
    new acf_plugin_vmp();

    // class_exists check
endif;

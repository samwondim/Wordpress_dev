<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://github.com/samwondim
 * @since      1.0.0
 *
 * @package    Crud
 * @subpackage Crud/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Crud
 * @subpackage Crud/includes
 * @author     Samuel  <samwondim@gmail.com>
 */

class Dashboard
{

    public function irent_settings()
    {
        $irent_callback = array($this, 'irent_menu_on_click');
        add_menu_page('IRENT_MENU', 'IRENT_MENU', 'manage_options', 'irent_menu', $irent_callback, '', 20);
    }

    public function irent_menu_on_click()
    {
        echo 'hello';
    }
}

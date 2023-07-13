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

class Homepage
{
    public function irent_greetings()
    {
        include_once irent_PLAGIN_DIR . 'public/partials/homepage_view/index.php';
        //irent_PLAGIN_URL
    }

    public function wp_ajax_irent_saveform()
    {
        $fullname = isset($_POST['full_name']) ? $_POST['full_name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $sex = isset($_POST['sex']) ? $_POST['sex'] : '';
        $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';

        update_user_meta(get_current_user_id(), 'irent_fullname', $fullname);
        update_user_meta(get_current_user_id(), 'irent_email', $email);
        update_user_meta(get_current_user_id(), 'irent_sex', $sex);
        update_user_meta(get_current_user_id(), 'irent_phone_number', $phone_number);

        echo json_encode(array('status' => 'success'));
        die();
    }
}

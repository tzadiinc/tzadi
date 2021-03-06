<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Asset URL
 * 
 * Create a local URL to your assets based on your basepath.
 *
 * @access  public
 * @param   string
 * @return  string
 */

if (!function_exists('myOrg_url')) {

    function myOrg_url($uri = '', $group = FALSE) {

        $CI = & get_instance();

        if( strpos($_SERVER['REQUEST_URI'],'https') !== false )
            $http = "https://";

        else
            $http = "http://";


        return $http . $CI->session->userdata("org_id") . "." . ENVIRONMENT . "/";


    }

}

/* End of file url_helper.php */
/* Location: ./application/helpers/url_helper.php */
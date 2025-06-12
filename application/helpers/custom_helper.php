<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_request_method')) {
  /**
   * Get the HTTP request method (e.g., GET, POST, etc.).
   *
   * @return string
   */
  function get_social_media()
  {
    $CI = &get_instance();

    $CI->load->model('Admin/social_media_model');
    return  $social_media = $CI->social_media_model->get_social_media_by_id(1);
    //echo $CI->db->last_query(); 
  }

  function get_address()
  {
    $CI = &get_instance();

    $CI->load->model('Admin/Address_model');
    return  $address = $CI->Address_model->get_address_by_id(1);
    //echo $CI->db->last_query(); 
  }

  function get_header_services()
  {
    $CI = &get_instance();

    $CI->load->model('Admin/Address_model');
    return $services_header = $CI->Home_model->getCategoryServices(1);

    //echo $CI->db->last_query(); 
  }
}

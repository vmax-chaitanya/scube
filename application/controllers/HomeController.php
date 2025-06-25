<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('captcha');

		$this->load->model('Home_model');
		$this->load->helper('download');
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Calcutta');
		// error_reporting(E_ALL);
		// ini_set('display_errors', 0);2508110877
	}
	public function index()
	{
		// echo 'PHP Version: ' . phpversion();
		// exit;
		// $data['meta_data'] =  $this->Home_model->getSeoRecordById('1');
		// $data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		// $data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		// $data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";

		// $data['captcha_image'] = $this->generate_captcha(0);

		// $data['services'] = "ddd";
		$data['jobs'] = $this->Home_model->get_active_jobs();
		$this->load->view('home/index', $data);
	}

	// public function job_details($encrypted_id)
	// {

	// 	$id = decrypt_id($encrypted_id);


	// 	$this->load->model('Home_model');
	// 	$data['job'] = $this->Home_model->get_job_by_id($id);

	// 	$this->load->view('home/detail', $data);
	// }

	public function job_details($slug)
	{
		$this->load->model('Home_model');
		$data['job'] = $this->Home_model->get_job_by_slug($slug);

		// if (!$data['job']) {
		// 	show_404();
		// }

		$this->load->view('home/detail', $data);
	}



	public function generate_captcha($return_image)
	{
		// echo "hi";
		$this->load->helper('captcha');

		$captcha_config = array(
			'img_path'      => './captcha/',
			'img_url'       => base_url('captcha/'),
			'font_path'     => './path/to/fonts/texb.ttf',
			'img_width'     => 150,
			'img_height'    => 50,
			'word_length'   => 6,
			'font_size'     => 30,
			'pool'          => '123456789',
			'colors'        => array(
				'background' => array(173, 216, 230),
				'border' => array(255, 255, 255),
				'text' => array(10, 10, 10),
				'grid' => array(173, 216, 230)
			)

		);


		$captcha = create_captcha($captcha_config);
		// 	echo $captcha['image']; 	
		// echo $captcha['word'];
		// Store CAPTCHA information in session
		$this->session->set_userdata('captcha_code', $captcha['word']);

		// Store CAPTCHA information in session
		// $this->session->set_userdata('captcha_code', $captcha['word']);

		if ($return_image) {
			// If $return_image is true, return the image URL
			echo $captcha['image'];
		} else {
			// If $return_image is false, echo the image directly
			return $captcha['image'];
		}
	}
}

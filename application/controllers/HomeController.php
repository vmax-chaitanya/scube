<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/contact_model'); // Load the Contact_model
		$this->load->model('Admin/CareerFormModel'); // Load the Contact_model
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
		// $data['tools'] = $this->Home_model->getActiveTools();
		// $data['clients'] = $this->Home_model->getActiveClients();
		// $data['team'] = $this->Home_model->getActiveTeams();
		// $data['testimonial'] = $this->Home_model->getActiveTestimonial();

		// $data['services'] = $this->Home_model->getCategoryServices(1);

		// $data['banners'] = $this->Home_model->getActiveBanners();
		// $data['trainings'] = $this->Home_model->getActiveTraining();
		// $data['captcha_image'] = $this->generate_captcha(0);

		//echo $this->db->last_query(); exit;;
		//print_r($data['banners']); exit;
		$data['services'] = "ddd";
		$this->load->view('home/index', $data);
	}

	

	public function about()
	{
	// 	$data['meta_data'] =  $this->Home_model->getSeoRecordById('2');
	// 	$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
	// 	$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
	// 	$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";

	// 	$data['team'] = $this->Home_model->getActiveTeams();
	// 	$data['faqs'] = $this->Home_model->getActiveFaqs();
		$data['testimonial'] = "tesr";

		$this->load->view('home/detail', $data);
	}
	public function custom_404()
	{
		$this->output->set_status_header('404');
		$this->load->view('home/404');
	}
	public function privacy_policy()
	{
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('11');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";

		$this->load->view('home/privacy_policy', $data);
	}
	public function disclamer()
	{
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('10');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";


		$this->load->view('home/disclamer', $data);
	}



	public function why_only_we()
	{
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('5');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";


		$this->load->view('home/why_only_we', $data);
	}

	public function why_digital_marketing()
	{
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('6');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";


		$this->load->view('home/why_digital_marketing', $data);
	}


	public function contact()
	{

		$data['meta_data'] =  $this->Home_model->getSeoRecordById('3');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";

		$data['services'] = $this->Home_model->getActiveServices(1);
		$data['captcha_image'] = $this->generate_captcha(0);
		$this->load->view('home/contact', $data);
	}





	// public function blog() {
	//     // Load the blog view
	//     $data['page_title']="Home || Value HR first||";

	//     $this->load->view('home/blog',$data);
	// }
	public function gallery()
	{
		// Load the FAQ view
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('12');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";

		$data['GalleryItems'] = $this->Home_model->getActiveGallery();
		$this->load->view('home/gallery', $data);
	}
	// public function faq()
	// {
	// 	// Load the FAQ view
	// 	$data['meta_data'] =  $this->Home_model->getSeoRecordById('faq'); 
	// 	$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] :"page_title";
	// 	$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] :"meta_description";
	// 	$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords'])? $data['meta_data']['meta_keywords'] :"meta_keywords";


	// 	$this->load->view('home/faq', $data);
	// }

	public function services()
	{
		// Load the services view
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('7');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";
		$data['servicesw'] = $this->Home_model->getActiveServicesNew();
		// echo "gi"; exit;
		$this->load->view('home/services', $data);
	}
	public function category_services($url)
	{
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('13');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";

		$categories = $this->Home_model->getServiceCategoryByUrl($url);

		$data['servicesw'] = $this->Home_model->getCategoryServices($categories['id']);
		//echo "<pre>"; print_r($data['services']); exit;
		$this->load->view('home/services', $data);
	}

	public function other_services()
	{
		// Load the services view

		$data['services'] = $this->Home_model->getActiveOtherServices();
		$this->load->view('home/services', $data);
	}
	public function service_detail($service_id)
	{
		//echo $service_id; exit;

		$data['services_detail'] = $this->Home_model->get_service_by_id($service_id);

		// $data['meta_data'] =  $this->Home_model->getSeoRecordById('home'); 
		$data['page_title'] = !empty($data['services_detail']['meta_name']) ? $data['services_detail']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['services_detail']['meta_description']) ? $data['services_detail']['meta_description'] : "page_title";
		$data['meta_keywords'] = !empty($data['services_detail']['meta_keywords']) ? $data['services_detail']['meta_keywords'] : "page_title";

		$data['services'] = $this->Home_model->getCategoryServices(1);

		$service_primary_id = 	 $data['services_detail']['id'];
		$type = 	 $data['services_detail']['type'];
		$module = 1;
		$data['services_module1'] = $this->Home_model->services_types($service_primary_id, $module);
		$module = 2;
		$data['services_module2'] = $this->Home_model->services_types($service_primary_id, $module);
		$module = 3;
		$data['services_module3'] = $this->Home_model->services_types($service_primary_id, $module);

		$data['service_faqs'] = $this->Home_model->getActiveServiceFaq($service_primary_id);
		//echo "<pre>"; print_r($data['services_types']); exit;
		$data['services_menu'] = $this->Home_model->getActiveServicesSideMenu($type);
		// echo $this->db->last_query(); exit;
		$data['upcoming_services'] = $this->Home_model->getUpcomingServices($service_primary_id, 5, $type);
		// echo $this->db->last_query(); exit;
		// $data['captcha_image'] = $this->generate_captcha(0); 

		$this->load->view('home/service_detail', $data);
	}


	public function training()
	{

		$data['meta_data'] =  $this->Home_model->getSeoRecordById('8');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";
		$data['certification_course'] = $this->Home_model->getActiveCertification();
		$data['trainings'] = $this->Home_model->getActiveTraining();
		$data['tools'] = $this->Home_model->getActiveTools();
		$data['certification_courses'] = $this->Home_model->getActiveCertificationCoursesTools();

		//print_r($data['training']); exit;
		$this->load->view('home/training', $data);
	}
	public function training_detail($training_id)
	{



		$data['training_detail'] = $this->Home_model->get_training_by_id($training_id);

		// $data['meta_data'] =  $this->Home_model->getSeoRecordById('home'); 
		$data['page_title'] = !empty($data['training_detail']['meta_name']) ? $data['training_detail']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['training_detail']['meta_description']) ? $data['training_detail']['meta_description'] : "page_title";
		$data['meta_keywords'] = !empty($data['training_detail']['meta_keywords']) ? $data['training_detail']['meta_keywords'] : "page_title";

		// echo "hi"; exit;
		//	 echo "<pre>"; print_r($data['training_detail']); exit;
		$service_primary_id = 	 $data['training_detail']['id'];
		$data['curriculums'] = $this->Home_model->getActiveCurriculum($service_primary_id);
		$data['key_highlites'] = $this->Home_model->getActiveKeyHighlites($service_primary_id);
		$data['trainings'] = $this->Home_model->getActiveTraining();
		$data['upcoming_trainings'] = $this->Home_model->getUpcomingTraining($service_primary_id, 5);
		$data['captcha_image'] = $this->generate_captcha(0);

		$this->load->view('home/training_detail', $data);
	}
	public function blogs()
	{
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('9');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";

		$data['blogs'] = $this->Home_model->get_all_blogs();
		//  print_r($data['blogs']); exit;
		$this->load->view('home/blog', $data);
	}
	public function blog_detail($blog_id)
	{
		$data['blogs'] = $this->Home_model->get_all_blogs();


		$data['blog'] = $this->Home_model->get_blog_by_id($blog_id);

		// $data['meta_data'] =  $this->Home_model->getSeoRecordById('home'); 
		$data['page_title'] = !empty($data['blog']['meta_name']) ? $data['blog']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['blog']['meta_description']) ? $data['blog']['meta_description'] : "page_title";
		$data['meta_keywords'] = !empty($data['blog']['meta_keywords']) ? $data['blog']['meta_keywords'] : "page_title";

		// echo $this->db->last_query(); exit;
		$data['captcha_image'] = $this->generate_captcha(0);

		$this->load->view('home/blog_detail', $data);
	}
	public function popup_enquiry()
	{
		// echo	$this->session->userdata('captcha_code');
		// 	print_r($this->input->post()); exit;
		if ($this->input->post('captcha1') != $this->session->userdata('captcha_code')) {
			$response = array(
				'status' => 'error',
				'message' => 'Captcha Mismatch'
			);
			echo json_encode($response);
			exit;
		}
		$data = array(
			'name' => $this->input->post('name1'),
			'email' => $this->input->post('email1'),
			'mobile' => $this->input->post('mobile1'),
			'message' => $this->input->post('message1'),
			'subject' => $this->input->post('subject1'),
			'services_ids' => $this->input->post('services_ids'),
			'status' => 1,
			'created_at' => date("Y-m-d H:i:s")
		);

		$result = $this->contact_model->create_contact($data);
		$contact_id = $this->db->insert_id();
		$data_contact = $this->contact_model->get_contact_by_id($contact_id);

		if ($result) {

			$services_names = "-";
			$subject = "Quick form details";
			$this->send_email_contact_form($data_contact, $services_names, $subject);

			$pdfFilePath =  base_url('' . 'assets/home/Brochure.pdf');

			$response = array(
				'status' => 'success',
				'message' => 'Thank you for your message. We will get in touch with you shortly',
				'pdfPath' => $pdfFilePath
			);
			echo json_encode($response);
			exit;
		} else {
			echo "Error inserting data.";
			exit;
		}
		exit;
	}

	public function training_enquiry()
	{
		//print_r($this->input->post()); exit;
		if ($this->input->post('captcha1') != $this->session->userdata('captcha_code')) {
			$response = array(
				'status' => 'error',
				'message' => 'Captcha Mismatch'
			);
			echo json_encode($response);
			exit;
		}
		$data = array(
			'name' => $this->input->post('name1'),
			'email' => $this->input->post('email1'),
			'mobile' => $this->input->post('mobile1'),
			'message' => $this->input->post('message1'),
			'subject' => $this->input->post('subject1'),
			//'services_ids' => $this->input->post('services_ids'),
			'status' => 1,
			'created_at' => date("Y-m-d H:i:s")
		);

		$result = $this->contact_model->create_contact($data);
		$contact_id = $this->db->insert_id();
		$data_contact = $this->contact_model->get_contact_by_id($contact_id);

		if ($result) {
			$data['training_detail'] = $this->Home_model->get_training_by_id($this->input->post('training_url'));
			$services_names = $data['training_detail']['name'];
			$subject = "Training form details";
			$this->send_email_contact_form($data_contact, $services_names, $subject);
			$pdfFilePath =  base_url('' . $data['training_detail']['brochure']);
			// echo $pdfFilePath;
			$response = array(
				'status' => 'success',
				'message' => 'Thank you for your message. We will get in touch with you shortly',
				'pdfPath' => $pdfFilePath
			);
			echo json_encode($response);
			exit;
		} else {
			$response = array(
				'status' => 'error',
				'message' => 'data not inserted',
				'pdfPath' => ''
			);
			echo json_encode($response);
			exit;
		}
		exit;
	}

	public function contact_enquiry()
	{
		//print_r($this->input->post()); exit;
		if ($this->input->post('captcha') != $this->session->userdata('captcha_code')) {
			$response = array(
				'status' => 'error',
				'message' => 'Captcha Mismatch'
			);
			echo json_encode($response);
			exit;
		}
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'subject' => $this->input->post('subject'),
			'coupon_id' => $this->input->post('copoun_id'),
			'message' => $this->input->post('message'),
			'services_ids' => $this->input->post('services_ids'),
			'status' => 1,
			'created_at' => date("Y-m-d H:i:s")
		);

		$result = $this->contact_model->create_contact($data);

		$contact_id = $this->db->insert_id();
		$data_contact = $this->contact_model->get_contact_by_id($contact_id);
		$services_ids = explode(',', $data_contact['services_ids']);
		$service_name_array = array();
		foreach ($services_ids as $service_id) {
			$service_data = $this->Home_model->get_service_names($service_id);
			if (!empty($service_data['name'])) {
				$service_name_array[] = $service_data['name'];
			}
		}
		$services_names = implode(', ', $service_name_array);

		if ($result) {
			$subject = "Contact form details";
			$this->send_email_contact_form($data_contact, $services_names, $subject);
			// echo "Thank you for your message. We will get in touch with you shortly";
			// exit;
			// Send success response
			$response = array(
				'status' => 'success',
				'message' => 'Thank you for your message. We will get in touch with you shortly'
			);
			echo json_encode($response);
			exit;
		} else {
			// echo "Error inserting data.";
			// exit;
			$response = array(
				'status' => 'error',
				'message' => 'Error inserting data.'
			);
			echo json_encode($response);
			exit;
		}
		exit;
	}
	public function seo()
	{
		// Load the about view
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('seo');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";


		$this->load->view('home/seo', $data);
	}
	public function careers()
	{
		//echo "hi"; exit;
		// Load the about view
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('4');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";

		// $data['careers_list'] = $this->Home_model->getActiveCareers();
		// $data['careers_list_form'] = $this->Home_model->getActiveCareers();
		$data['jobs'] = $this->Home_model->getJobsList();

		$data['captcha_image'] = $this->generate_captcha(0);

		// echo $this->db->last_query(); exit;
		$this->load->view('home/careers', $data);
	}
	// function send_email()
	// {
	// 	$this->load->library('email');

	// 	// Load sensitive data from configuration or environment variables
	// 	$config = array(
	// 		'protocol' => 'smtp',
	// 		'smtp_host' => 'mail.rdsindia.com',
	// 		'smtp_user' => 'chaithanya@digitalwinbusinessagency.com',
	// 		'smtp_pass' => '~Xl1xY7dwsao4ea6V',
	// 		'smtp_port' => 465,
	// 		'smtp_debug' => 2,
	// 		'smtp_crypto' => 'tls',
	// 		'mailtype' => 'html',
	// 		'charset' => 'utf-8',
	// 	);

	// 	$this->email->initialize($config);

	// 	$this->email->from('chaithanya@digitalwinbusinessagency.com', 'Your Name');
	// 	$this->email->to('chaitanyakadali3@gmail.com');
	// 	$this->email->subject('Email Subject');
	// 	$this->email->message('Email message goes here');

	// 	try {
	// 		if ($this->email->send()) {
	// 			echo 'Email sent successfully.';
	// 		} else {
	// 			show_error($this->email->print_debugger());
	// 		}
	// 	} catch (Exception $e) {
	// 		echo 'Email could not be sent. Error: ' . $e->getMessage();
	// 	}

	// 	// Load the appropriate view to display a response to the user
	// 	$this->load->view('email_view');
	// }
	// 	public function sendEmail()
	// 	{
	// 		//echo "fg"; exit;
	// 		$this->load->library('Phpmailer');

	// 		$smtp_host = "mail.rdsindia.com";
	// 		$smtp_user = "info@digitalwinbusinessagency.com";
	// 		$smtp_password = "digitalwin@123";
	// 		$smtp_port = 25;

	// 		$mail_from = "info@digitalwinbusinessagency.com";
	// 		$mail_from_name = "Value HR first";

	// 		$mail_to = "chaitanyakadali3@gmail.com";
	// 		$mail_to_name = "RDS Support";
	// $body = "
	//     <table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
	//         <thead>
	//             <tr style='background-color: #f2f2f2;'>
	//                 <th style='padding: 10px;'>Field</th>
	//                 <th style='padding: 10px;'>Value</th>
	//             </tr>
	//         </thead>
	//         <tbody>
	//             <tr>
	//                 <td style='padding: 10px;'>Name</td>
	//                 <td style='padding: 10px;'>chaitanya</td>
	//             </tr>
	//             <tr>
	//                 <td style='padding: 10px;'>Email</td>
	//                 <td style='padding: 10px;'>fddddddd@gmail.com</td>
	//             </tr>
	//             <tr>
	//                 <td style='padding: 10px;'>Mobile</td>
	//                 <td style='padding: 10px;'>7799348370</td>
	//             </tr>
	//             <tr>
	//                 <td style='padding: 10px;'>Subject</td>
	//                 <td style='padding: 10px;'>sdfs fg dfgdfg</td>
	//             </tr>
	//             <tr>
	//                 <td style='padding: 10px;'>Coupon ID</td>
	//                 <td style='padding: 10px;'>dfgdf gdfghd</td>
	//             </tr>
	//             <tr>
	//                 <td style='padding: 10px;'>Message</td>
	//                 <td style='padding: 10px;'>dfgd fgd fgd</td>
	//             </tr>
	//             <tr>
	//                 <td style='padding: 10px;'>Services IDs</td>
	//                 <td style='padding: 10px;'>1</td>
	//             </tr>
	//             <tr>
	//                 <td style='padding: 10px;'>Status</td>
	//                 <td style='padding: 10px;'>dfse fdf sdfs</td>
	//             </tr>
	//             <tr>
	//                 <td style='padding: 10px;'>Created At</td>
	//                 <td style='padding: 10px;'>12:</td>
	//             </tr>
	//         </tbody>
	//     </table>
	// ";

	// 		//$body = 'Test';

	// 		$this->phpmailer->IsSMTP();
	// 		$this->phpmailer->Host = $smtp_host;
	// 		$this->phpmailer->SMTPDebug = 1;
	// 		$this->phpmailer->SMTPAuth = true;
	// 		$this->phpmailer->Port = $smtp_port;
	// 		$this->phpmailer->Username = $smtp_user;
	// 		$this->phpmailer->Password = $smtp_password;

	// 		$this->phpmailer->SetFrom($mail_from, $mail_from_name);
	// 		$this->phpmailer->AddReplyTo($mail_from, $mail_from_name);

	// 		$this->phpmailer->Subject = "PHPMailer Test Subject via smtp, basic with authentication";
	// 		$this->phpmailer->MsgHTML($body);

	// 		$address = $mail_to;
	// 		$this->phpmailer->AddAddress($address, $mail_to_name);

	// 		if (!$this->phpmailer->Send()) {
	// 			echo "Mailer Error: " . $this->phpmailer->ErrorInfo;
	// 		} else {
	// 			echo "Message sent!";
	// 		}
	// 	}
	public function send_email_contact_form($message, $services_names, $subject)
	{
		if (!empty($message['name'])) {
			//echo "fg"; exit;
			//	print_r($message); exit();
			$this->load->library('Phpmailer');
			$message_body = "
		<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
			<tr>
				<th>Field</th>
				<th>Value</th>
			</tr>";

			// Add row for Name if it's not empty
			if (!empty($message['name'])) {
				$message_body .= "
			<tr>
				<td>Name</td>
				<td>{$message['name']}</td>
			</tr>";
			}

			// Add row for Email if it's not empty
			if (!empty($message['email'])) {
				$message_body .= "
			<tr>
				<td>Email</td>
				<td>{$message['email']}</td>
			</tr>";
			}

			// Add row for Mobile if it's not empty
			if (!empty($message['mobile'])) {
				$message_body .= "
			<tr>
				<td>Mobile</td>
				<td>{$message['mobile']}</td>
			</tr>";
			}

			// Add row for Subject if it's not empty
			if (!empty($message['subject'])) {
				$message_body .= "
			<tr>
				<td>Subject</td>
				<td>{$message['subject']}</td>
			</tr>";
			}

			// Add row for Coupon ID if it's not empty
			if (!empty($message['coupon_id'])) {
				$message_body .= "
			<tr>
				<td>Coupon ID</td>
				<td>{$message['coupon_id']}</td>
			</tr>";
			}

			// Add row for Message if it's not empty
			if (!empty($message['message'])) {
				$message_body .= "
			<tr>
				<td>Message</td>
				<td>{$message['message']}</td>
			</tr>";
			}

			// Add row for Services if it's not empty
			if (!empty($services_names)) {
				$message_body .= "
			<tr>
				<td>Services</td>
				<td>{$services_names}</td>
			</tr>";
			}

			// Add row for Received At if it's not empty
			if (!empty($message['created_at'])) {
				$message_body .= "
			<tr>
				<td>Received At</td>
				<td>{$message['created_at']}</td>
			</tr>";
			}

			$message_body .= "</table>";

			// Define the path to the PDF file
			// $pdfFilePath = FCPATH . 'assets/home/Brochure.pdf';

			// Check if the file exists
			// if (file_exists($pdfFilePath)) {
			//     $this->phpmailer->AddAttachment($pdfFilePath);
			// } 

			$smtp_host = "localhost";
			$smtp_user = "info@digitalwinbusinessagency.com";
			$smtp_password = "digitalwinba@12345";
			$smtp_port = 25;

			$mail_from = "info@digitalwinbusinessagency.com";
			$mail_from_name = "Value HR first";

			$mail_to = "chaitanyakadali3@gmail.com";
			$mail_to_name = "Chaitanya";

			$body = $message_body;

			$this->phpmailer->IsSMTP();
			$this->phpmailer->Host = $smtp_host;
			$this->phpmailer->SMTPDebug = 0;
			$this->phpmailer->SMTPAuth = true;
			$this->phpmailer->Port = $smtp_port;
			$this->phpmailer->Username = $smtp_user;
			$this->phpmailer->Password = $smtp_password;
			$this->phpmailer->SetFrom($mail_from, $mail_from_name);
			$this->phpmailer->AddReplyTo($mail_from, $mail_from_name);
			$this->phpmailer->Subject = $subject;
			$this->phpmailer->MsgHTML($body);
			//$address = $mail_to;
			// 		$this->phpmailer->AddAttachment($pdfFilePath);
			$this->phpmailer->AddAddress($mail_to, $mail_to_name);
			$this->phpmailer->AddAddress('suresh6k@gmail.com', "Suresh");

			// 		echo $this->phpmailer->ErrorInfo; exit;
			if (!$this->phpmailer->Send()) {
				// echo "Mailer Error: " . $this->phpmailer->ErrorInfo;
			} else {
				//echo "Message sent!";
			}
			return true;
		}
	}




	public function career_form()
	{
		//print_r($this->input->post()); exit;
		if ($this->input->post('captcha') != $this->session->userdata('captcha_code')) {
			$response = array(
				'status' => 'error',
				'message' => 'Captcha Mismatch'
			);
			echo json_encode($response);
			exit;
		}
		if (!empty($_FILES['resume']['name'])) {

			$temp = $_FILES['resume']['tmp_name'];
			$name = $_FILES['resume']['name'];
			$fileName = time() . $name;
			$path = "./assets/images/resume/$fileName";
			$image_name = '/assets/images/resume/' . $fileName;
			$a = move_uploaded_file($temp, $path);
		}

		$data = array(
			'name' => $this->input->post('career_name'),
			'email' => $this->input->post('career_email'),
			'mobile' => $this->input->post('careeer_mobile'),
			'career_id' => $this->input->post('career_list'),
			'resume' => $image_name,
			'message' => $this->input->post('message'),
			'status' => 1,
			'created_at' => date("Y-m-d H:i:s")
		);

		$result = $this->CareerFormModel->createCareerFormSubmission($data);
		$id = $this->db->insert_id();
		$data_contact = $this->Home_model->getCareerById($id);

		//print_r($data_contact); exit;
		if ($result) {
			$subject = "Careers form details";
			$this->send_email_career_form($data_contact, $subject);
			// echo "Success";

			$response = array(
				'status' => 'success',
				'message' => 'Thank you for your message. We will get in touch with you shortly'
			);
			echo json_encode($response);
			exit;
		} else {
			$response = array(
				'status' => 'error',
				'message' => 'Something went wrong'
			);
			echo json_encode($response);
			exit;
		}
		exit;
	}
	public function send_email_career_form($message, $subject)
	{

		if (!empty($message['name'])) {
			//echo "fg"; exit;
			//	print_r($message); exit();
			$this->load->library('Phpmailer');
			$message_body = "
		<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
			<tr>
				<th>Field</th>
				<th>Value</th>
			</tr>";

			// Add row for Name if it's not empty
			if (!empty($message['name'])) {
				$message_body .= "
			<tr>
				<td>Name</td>
				<td>{$message['name']}</td>
			</tr>";
			}

			// Add row for Email if it's not empty
			if (!empty($message['email'])) {
				$message_body .= "
			<tr>
				<td>Email</td>
				<td>{$message['email']}</td>
			</tr>";
			}

			// Add row for Mobile if it's not empty
			if (!empty($message['mobile'])) {
				$message_body .= "
			<tr>
				<td>Mobile</td>
				<td>{$message['mobile']}</td>
			</tr>";
			}

			// Add row for Applied For if it's not empty
			if (!empty($message['position'])) {
				$message_body .= "
			<tr>
				<td>Applied For</td>
				<td>{$message['position']}</td>
			</tr>";
			}

			// Add row for Message if it's not empty
			if (!empty($message['message'])) {
				$message_body .= "
			<tr>
				<td>Message</td>
				<td>{$message['message']}</td>
			</tr>";
			}

			// Add row for Received At if it's not empty
			if (!empty($message['created_at'])) {
				$message_body .= "
			<tr>
				<td>Received At</td>
				<td>{$message['created_at']}</td>
			</tr>";
			}

			$message_body .= "</table>";

			// Define the path to the PDF file
			$pdfFilePath = FCPATH . $message['resume'];

			// Check if the file exists
			if (file_exists($pdfFilePath)) {
				$this->phpmailer->AddAttachment($pdfFilePath);
			}


			$smtp_host = "localhost";
			$smtp_user = "info@digitalwinbusinessagency.com";
			$smtp_password = "digitalwinba@12345";
			$smtp_port = 25;

			$mail_from = "info@digitalwinbusinessagency.com";
			$mail_from_name = "Value HR first";

			$mail_to = "chaitanyakadali3@gmail.com";
			$mail_to_name = "Chaitanya";

			$body = $message_body;

			$this->phpmailer->IsSMTP();
			$this->phpmailer->Host = $smtp_host;
			$this->phpmailer->SMTPDebug = 1;
			$this->phpmailer->SMTPAuth = true;
			$this->phpmailer->Port = $smtp_port;
			$this->phpmailer->Username = $smtp_user;
			$this->phpmailer->Password = $smtp_password;
			$this->phpmailer->SetFrom($mail_from, $mail_from_name);
			$this->phpmailer->AddReplyTo($mail_from, $mail_from_name);
			$this->phpmailer->Subject = $subject;
			$this->phpmailer->MsgHTML($body);
			//$address = $mail_to;
			$this->phpmailer->AddAttachment($pdfFilePath);
			$this->phpmailer->AddAddress($mail_to, $mail_to_name);
			$this->phpmailer->AddAddress('suresh6k@gmail.com', "Suresh");
			if (!$this->phpmailer->Send()) {
				// echo "Mailer Error: " . $this->phpmailer->ErrorInfo;
			} else {
				//echo "Message sent!";
			}
			return true;
		}
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








	//08/11/2024//

	public function OutdoorAdvertising()
	{
		$data['meta_data'] =  $this->Home_model->getSeoRecordById('14');
		$data['page_title'] = !empty($data['meta_data']['meta_name']) ? $data['meta_data']['meta_name'] : "page_title";
		$data['meta_description'] = !empty($data['meta_data']['meta_description']) ? $data['meta_data']['meta_description'] : "meta_description";
		$data['meta_keywords'] = !empty($data['meta_data']['meta_keywords']) ? $data['meta_data']['meta_keywords'] : "meta_keywords";


		$this->load->view('home/OutdoorAdvertising', $data);
	}
}

<?php
class FAQ extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('Admin/faq_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // echo $this->db->last_query(); exit;
        // echo "<pre>"; print_r($data['faqs']); exit;
        $data['service_id'] = $this->input->get('service_id'); // Pass it to the view
        $data['faqs'] = $this->faq_model->get_all_faqs($data['service_id']);

        $this->load->view('admin/faq_list', $data);
    }

    public function add()
    {
        // $data['faqs'] = $this->faq_model->get_all_pages();

        $data['service_id'] = $this->input->get('service_id'); // Pass it to the view
        $this->load->view('admin/faq_create', $data);
    }

    public function create()
    {
      //  echo "ffff"; exit;
//echo "<pre>"; print_r($this->input->post()); exit;
        // $this->form_validation->set_rules('type', 'Type', 'required|in_list[1,2]');
        $this->form_validation->set_rules('question', 'Question', 'required|max_length[500]');
        $this->form_validation->set_rules('answer', 'Answer', 'required|max_length[500]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        $service_id = $this->input->post('page_id');
        if ($this->form_validation->run() === FALSE) {
            // $data['pages'] = $this->faq_model->get_all_pages();
            echo "ffffw"; exit;
            if ($service_id) {
                redirect('admin/faq_create?service_id=' . $service_id); // Redirect to the service-specific FAQ list
            } else {
                redirect('admin/faq_create'); // Redirect to the general FAQ list
            }
            //$this->load->view('admin/faq_create', $data);
        } else {
            if ($this->input->post('page_id') != "") {
                $type = "2";
            } else {
                $type = "1";

            }
            $data = array(
                'type' => $type,
                'page_id' => $this->input->post('page_id'),
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('answer'),
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2'
            );

            $result = $this->faq_model->create_faq($data);
            if ($result) {
                $this->session->set_flashdata('success', 'FAQ created successfully.');
                if ($service_id) {
                    redirect('admin/faq?service_id=' . $service_id); // Redirect to the service-specific FAQ list
                } else {
                    redirect('admin/faq'); // Redirect to the general FAQ list
                }
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/faq');
            }
        }
    }

    public function edit($id,$service_id= null )
    {
        $data['service_id'] = $service_id;
        $data['faq'] = $this->faq_model->get_faq_by_id($id);
        // $data['pages'] = $this->faq_model->get_all_pages();
        $this->load->view('admin/faq_edit', $data);
    }

    public function update($id )
    {
     
        $this->form_validation->set_rules('question', 'Question', 'required|max_length[500]');
        $this->form_validation->set_rules('answer', 'Answer', 'required|max_length[500]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');
        $service_id = $this->input->post('page_id');
        if ($this->form_validation->run() === FALSE) {
            $data['faq'] = $this->faq_model->get_faq_by_id($id);
            $data['pages'] = $this->faq_model->get_all_pages();
            $this->load->view('admin/faq_edit', $data);
        } else {
            if ($this->input->post('page_id') != "") {
                $type = "2";
            } else {
                $type = "1";
            }
            $data = array(
                'type' => $type,
                'page_id' => $this->input->post('page_id'),
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('answer'),
                'status' => $this->input->post('status'),
                'created_at' => time(),
                'created_by' => $this->input->post('created_by')
            );

            $result = $this->faq_model->update_faq($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'FAQ updated successfully.');
                if ($service_id) {
                    redirect('admin/faq?service_id=' . $service_id); // Redirect to the service-specific FAQ list
                } else {
                    redirect('admin/faq'); // Redirect to the general FAQ list
                }
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/faq');
            }
        }
    }

    public function delete($id,$service_id= null)
    {
        $this->faq_model->delete_faq($id);
        if ($service_id) {
            redirect('admin/faq?service_id=' . $service_id); // Redirect to the service-specific FAQ list
        } else {
            redirect('admin/faq'); // Redirect to the general FAQ list
        }
        //redirect('admin/faq');
    }
}
?>
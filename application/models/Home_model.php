<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Example method to get all blog entries
    public function get_all_blogs()
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('status', '1'); // Fetch only active blogs
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Example method to get a specific blog entry by ID
    public function get_blog_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Add more methods here for other functionalities as needed
    public function getActiveBanners()
    {
        $this->db->where('type', '1');
        $this->db->where('status', '1');
        return $this->db->get('banners')->result_array();
    }
    public function getActiveTraining()
    {
        $this->db->where('status', '1');
        $this->db->order_by('sort_order', 'ASC');
        return $this->db->get('training')->result_array();
    }
    public function get_training_by_id($id)
    {
        $this->db->where('training_url', $id);
        $query = $this->db->get('training');
        return $query->row_array();
    }

    public function getActiveCurriculum($training_id)
    {
        $this->db->where('status', '1');
        $this->db->where('training_id', $training_id);
        return $this->db->get('training_curricullum')->result_array();
    }

    public function getActiveKeyHighlites($training_id)
    {
        $this->db->where('status', '1');
        $this->db->where('training_id', $training_id);
        return $this->db->get('key_highlights')->result_array();
    }
    public function getActiveCertification()
    {
        $this->db->where('status', '1');
        return $this->db->get('certification_courses')->result_array();
    }
    public function getActiveTools()
    {
        $this->db->where('status', '1');
        $this->db->where('type', '3');
        return $this->db->get('gallery')->result_array();
    }
    public function getActiveClients()
    {
        $this->db->where('status', '1');
        $this->db->where('type', '2');
        return $this->db->get('gallery')->result_array();
    }
    public function getActiveTeams()
    {
        $this->db->where('status', '1');
        $this->db->where('type', '4');
        return $this->db->get('gallery')->result_array();
    }
    public function getActiveFaqs()
    {
        $this->db->where('status', '1');
        $this->db->where('type', '1');
        return $this->db->get('faq')->result_array();
    }
    public function getActiveTestimonial()
    {
        $this->db->where('status', '1');
        // $this->db->where('type', '4');
        return $this->db->get('testimonials')->result_array();
    }
    public function getActiveCertificationCoursesTools()
    {
        $this->db->where('status', '1');
        $this->db->where('type', '4');
        return $this->db->get('gallery')->result_array();
    }
    public function getActiveServices($type)
    {
        $this->db->where('type', $type);
        $this->db->where('status', '1');
        return $this->db->get('services')->result_array();
    }
    public function getCategoryServices($type)
    {
        $this->db->where('type', $type);
        $this->db->where('status', '1');
        return $this->db->get('services')->result_array();
    }
    public function getActiveServicesSideMenu($type)
    {
        $this->db->where('type', $type);
        $this->db->where('status', '1');
        $initialResult = $this->db->get('services')->result_array();

        // Check if the initial result set has less than 10 records
        if (count($initialResult) < 10) {
            $additionalRecordsNeeded = 10 - count($initialResult);

            // Fetch additional records without any additional conditions
            $this->db->where('status', '1');
            $this->db->limit($additionalRecordsNeeded);
            $additionalResult = $this->db->get('services')->result_array();

            // Merge the initial and additional results
            $result = array_unique(array_merge($initialResult, $additionalResult), SORT_REGULAR);
        } else {
            $result = $initialResult;
        }

        return $result;
    }
    public function getActiveOtherServices()
    {
        $this->db->where('type', '2');
        $this->db->where('status', '1');
        return $this->db->get('services')->result_array();
    }
    public function get_service_by_id($id)
    {
        $this->db->where('service_url', $id);
        $query = $this->db->get('services');
        return $query->row_array();
    }
    public function getActiveServiceFaq($service_id)
    {
        $this->db->where('status', '1');
        $this->db->where('type', '2');
        $this->db->where('page_id', $service_id);
        return $this->db->get('faq')->result_array();
    }
    public function services_types($service_id, $module)
    {
        $this->db->where('status', '1');
        $this->db->where('type', $module);
        $this->db->where('service_id', $service_id);
        return $this->db->get('services_cards')->result_array();
    }
    // public function services_we_choose($service_id)
    // {
    //     $this->db->where('status', '1');
    //    // $this->db->where('type', '2');
    //     $this->db->where('service_id', $service_id);
    //     return $this->db->get('services_cards')->result_array();
    // }
    public function getActiveServiceNames()
    {
        $this->db->select('id,name,type,service_url');
        $this->db->where('status', '1');
        $this->db->where('type', '1');
        return $this->db->get('services')->result_array();
    }
    public function getActiveOtherServiceNames()
    {
        $this->db->select('id,name,type,service_url');
        $this->db->where('status', '1');
        $this->db->where('type', '2');
        return $this->db->get('services')->result_array();
    }
    public function getFooterServiceNames()
    {
        $this->db->select('id,name,service_url');
        $this->db->where('status', '1');
        $this->db->where('type', '1');
        $this->db->order_by("id", "desc");
        $this->db->limit(6);
        return $this->db->get('services')->result_array();
    }
    public function getFooterOtherServiceNames()
    {
        $this->db->select('id,name,service_url');
        $this->db->where('status', '1');
        $this->db->where('type', '2');
        $this->db->order_by("id", "desc");
        $this->db->limit(6);
        return $this->db->get('services')->result_array();
    }
    public function getUpcomingServices($current_service_id, $limit, $type)
    {
        // Fetch upcoming services based on the current service's ID
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('id >', $current_service_id);
        // $this->db->where('type', $type); // Filter by the type of service if needed
        $this->db->where('status', '1'); // Filter by active status if needed
        $this->db->order_by('id', 'ASC');
        $this->db->limit($limit);
        $query = $this->db->get();

        $upcoming_services = $query->result_array();

        // If no upcoming services found, fetch random services
        if (count($upcoming_services) < 3) {
            $this->db->select('*');
            $this->db->from('services');
            // $this->db->where('type', $type); // Filter by the type of service if needed
            $this->db->where('status', '1'); // Filter by active status if needed
            // $this->db->order_by('RAND()'); // Get random services
            $this->db->limit($limit);
            $query = $this->db->get();

            $upcoming_services = $query->result_array();
        }

        return $upcoming_services;
    }
    public function getUpcomingTraining($current_service_id, $limit)
    {
        // Fetch upcoming services based on the current service's ID
        $this->db->select('*');
        $this->db->from('training');
        $this->db->where('id >', $current_service_id);

        $this->db->where('status', '1'); // Filter by active status if needed
        $this->db->order_by('id', 'ASC');
        $this->db->limit($limit);
        $query = $this->db->get();

        $upcoming_services = $query->result_array();

        // If no upcoming services found, fetch random services
        if (count($upcoming_services) < 3) {
            $this->db->select('*');
            $this->db->from('training');

            $this->db->where('status', '1'); // Filter by active status if needed
            // $this->db->order_by('RAND()'); // Get random services
            $this->db->limit($limit);
            $query = $this->db->get();

            $upcoming_services = $query->result_array();
        }

        return $upcoming_services;
    }
    public function getActiveCareers()
    {
        $this->db->where('status', '1');
        return $this->db->get('careers_jobs')->result_array();
    }

    // public function getActiveBlog()
    // {
    //     $this->db->where('status', '1');
    //     return $this->db->get('blogs')->result_array();
    // }
    // public function get_blog_by_id($id)
    // {
    //     $this->db->where('id', $id);
    //     $query = $this->db->get('blogs');
    //     return $query->row_array();
    // }

    public function getActiveServicesCategories()
    {
        return $this->db->get_where('services_categories', array('status' => '1'))->result_array();
    }
    public function getServiceCategoryByUrl($url)
    {
        $this->db->select('id');
        $this->db->like('url', $url, 'both'); // 'both' means '%url%'
        $query = $this->db->get('services_categories');
        return $query->row_array();
    }
    public function getActiveServicesNew()
    {
        return $this->db->get_where('services', array('status' => '1'))->result_array();
    }
    public function getActiveTrainings()
    {
        return $this->db->get_where('training', array('status' => '1'))->result_array();
    }
    public function getHeaderTrainingNames()
    {
        $this->db->select('id,name,training_url');
        $this->db->where('status', '1');
        $this->db->order_by('sort_order', 'ASC');
        // $this->db->limit(6);
        return $this->db->get('training')->result_array();
    }
    public function getFooterTrainingNames()
    {
        $this->db->select('id,name,training_url');
        $this->db->where('status', '1');
        $this->db->order_by("sort_order", "ASC");
        $this->db->limit(6);
        return $this->db->get('training')->result_array();
    }
    public function get_contact_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('contact');
        return $query->row_array();
    }
    public function get_service_names($id)
    {
        $this->db->select('name');
        $this->db->where('id', $id);
        $query = $this->db->get('services');
        return $query->row_array();
    }
    public function getCareerById($id)
    {
        $this->db->where('career_form.id', $id);
        $this->db->join('careers_jobs', 'careers_jobs.id = career_form.career_id', 'inner');
        $query = $this->db->get('career_form');
        return $query->row_array();
    }
    public function getActiveGallery()
    {
        $this->db->where('type', '1');
        $this->db->where('status', '1');
        return $this->db->get('gallery')->result_array();
    }

    public function get_meta_tag_by_name($page_name)
    {
        $this->db->like('page_name', $page_name);
        return $this->db->get('meta_tags_data')->row_array();
    }
    public function getSeoRecordById($id)
    {
        // Retrieve a specific SEO record by ID
        return $this->db->get_where('static_pages_seo', array('page_id' => $id))->row_array();
    }
    public function getJobsList()
    {
        return $this->db
            ->where('status', '1')
            ->get('careers_jobs')
            ->result_array();
    }
}

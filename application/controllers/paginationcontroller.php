<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /**
    *Class for creating pagination
    **/
    class PaginationController extends CI_Controller 
        {
            /**
            *Function to set constructor to load model and library
            *@param null
            *@return null
            **/
            public function __construct() 
            {
                parent:: __construct();
                $this->load->model('paginationmodel');
                $this->load->library('pagination');
            }


            /**
            *Function to set configurations for pagination and display user details
            *@param null
            *@return null
            **/
            public function userDetails() 
            {
                $config = array();
                $config["base_url"] = base_url() . "index.php/paginationcontroller/userDetails";
                $config["total_rows"] = $this->paginationmodel->recordCount();
                $config["per_page"] = 5;
                $config["uri_segment"] = 3;
                $config['next_link'] = 'Next';
                $config['prev_link'] = 'Previous';

                $this->pagination->initialize($config);

                // Page information  
                if($this->uri->segment(3)){
                    $page = ($this->uri->segment(3));
                }
                else{
                    $page = 0;
                }

                $data["results"] = $this->paginationmodel->fetchData($config["per_page"], $page);
                $data["links"] = $this->pagination->create_links();

                // View data according to array.
                $this->load->view('paginationview', $data);
            }

        }
?>
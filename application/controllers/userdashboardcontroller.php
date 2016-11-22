<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*Class for load dashboard, infinite scroll
**/
class UserDashboardController extends CI_Controller 
    {
        /**
        *Function Constructor to load model userdashboardmodel
        *@param null
        *@return null
        **/
        public function __construct()
        {
            parent::__construct();
            $this->load->model('userdashboardmodel');
        }

        /**
        *Function to load User Dashboard view
        *@param null
        *@return null
        **/
        public function loadUserHome()
        {
            // condition check for logged in and user type 1
            if(isset($this->session->userdata['logged_in']) && ($this->session->userdata['user_type']) == 1 ){
                
                if($total_data = $this->userdashboardmodel->get_all_count()){
                    $content_per_page = 5; 
                    $this->data['total_data'] = ceil($total_data->tol_records/$content_per_page);
                    $this->load->view('dashboard', $data);
                }
                else{
                    redirect('my404');
                }
            }

            // condition check for logged in and user type 2
            elseif(isset($this->session->userdata['logged_in']) && ($this->session->userdata['user_type']) == 2 ){
                
                if($total_data = $this->userdashboardmodel->get_all_count()){
                    $content_per_page = 5; 
                    $this->data['total_data'] = ceil($total_data->tol_records/$content_per_page);
                    $this->load->view('dashboard', $data);
                }
                else{
                    redirect('my404');
                }
            }
            else{
                redirect('login');
            }
        }

        /**
        *Function to load more user data, implementing infinite scroll
        *@param
        *@return
        **/
        public function loadUserData()
        {
            $group_no = $this->input->post('group_no');
            $content_per_page = 5;
            $start = ceil($group_no * $content_per_page);
            if ($all_content = $this->userdashboardmodel->get_all_content($start,$content_per_page)) {
                foreach ($all_content as $key => $value) {
                    echo ;
                }
            }
        }
    }
?>

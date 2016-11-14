<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*Class for listing users from database in admin dashboard
**/
class UserListingController extends CI_Controller 
    {
        /**
        *Function to list users
        *@param void
        *@return void
        */
        public function listUser()
            {
                if ($this->input->is_ajax_request()) {
                    $this->load->model('userlistingmodel');
                    $credentials['result']= $this->userlistingmodel->userDetails();
                    echo json_encode($credentials);
                }

                else{
                    redirect('my404');
                } 
            }

        /**
        *Function to list users
        *@param void
        *@return void
        */
        public function enableUser()
            {
                $credentials = array("id"=> $this->uri->segment(3));
                $this->load->model('userlistingmodel');
                if($this->userlistingmodel->userEnable($credentials)){
                    $this->load->view('admindashboard');
                }
                else{
                    redirect('my404');
                }
            }

        /**
        *Function to list users
        *@param void
        *@return void
        */
        public function disableUser()
            {
                $credentials = array("id"=> $this->uri->segment(3));
                $this->load->model('userlistingmodel');
                if($this->userlistingmodel->userDisable($credentials)){
                    $this->load->view('admindashboard');
                }
                else{
                    redirect('my404');
                }
            }
    }
?>
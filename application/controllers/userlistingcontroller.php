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
    }
?>
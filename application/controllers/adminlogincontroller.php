<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*Class for creating session, login and logout for admin
**/
class AdminLoginController extends CI_Controller 
    {
        
        /**
        *Function to check session
        *@param void
        *@return void
        */
        public function checkSession()
        {
            if (isset($this->session->userdata['logged_in']) && ($this->session->userdata['user_type']) == 2 ) {

            }
            else{
                $this->load->view('adminlogin');
            }
        }

        
        /**
        *Function to authenticate admin login
        *@param void
        *@return void
        */
        
        public function loginUser()
        {
            // Ensuring post request
            if ($this->input->post()) {
                $this->form_validation->set_rules('email', 'Email', 
                    'required|valid_email|max_length[35]|min_length[5]|trim');
                $this->form_validation->set_rules('password', 'Password',
                    'required|max_length[15]|min_length[5]|trim|alpha_numeric');

                // Validating form post
                if ($this->form_validation->run() == FALSE){
                    $this->load->view('adminlogin');
                }

                else{
                    $credentials=array(
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('password')),
                        );

                    $this->load->model('adminloginmodel');
                    
                    if ($this->adminloginmodel->checkIfAdminExists($credentials['email'])) {
                        if ($this->adminloginmodel->verifyPassword($credentials)) {
                            // setting session
                            $credentials['logged_in'] = TRUE;
                            $credentials['user_type'] = 2;
                            $this->session->set_userdata($credentials);
                            $this->checkSession();

                        }
                        else{
                            $this->load->view('adminlogin'); 
                        }

                    }
                    else{
                        redirect('adminlogin'); 
                    }
                }
            }

            else{
                redirect('adminlogin');
            }
        }

        /**
        *Function to perform logout for admin: Unsets and destroys session
        *@param void
        *@return void
        */
        public function logout()
        {
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_type');
            $this->session->sess_destroy();
            redirect('adminlogin'); 
        }
    }
?>
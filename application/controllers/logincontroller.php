<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*Class for creating session, login and logout
**/
class LoginController extends CI_Controller 
    {
        
        /**
        *Function to check session
        *@param void
        *@return void
        */
        public function checkSession()
        {
            if (isset($this->session->userdata['logged_in']) &&  ($this->session->userdata['user_type']) == 1) {
                $this->load->view('dashboard');
            }
            elseif (isset($this->session->userdata['logged_in']) &&  ($this->session->userdata['user_type']) == 2) {
                $this->load->view('dashboard');
            }
            else{
                $this->load->view('login');
            }
        }

        
        /**
        *Function to authenticate user login
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
                    $this->load->view('login');
                }

                else{
                    $credentials=array(
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('password')),
                        );

                    $this->load->model('loginmodel');
                    
                    if ($this->loginmodel->checkIfUserExists($credentials['email'])) {
                        if ($this->loginmodel->verifyPassword($credentials)) {
                            if ($this->loginmodel->checkIfUserActivated($credentials)) {
                                if ($this->loginmodel->checkIfUserDisabled($credentials)){
                                // setting session
                                    $credentials['logged_in'] = TRUE;
                                    $credentials['user_type'] = 1;
                                    $this->session->set_userdata($credentials);
                                    $this->checkSession();
                                }
                                else{
                                    $this->load->view('blocked');
                                }
                            }
                            else{
                                $this->load->view('activationError');
                            }
                        }
                        else{
                            $this->load->view('login'); 
                        }

                    }
                    else{
                        redirect('login'); 
                    }
                }
            }

            else{
                redirect('login');
            }
        }

        /**
        *Function to perform logout: Unsets and destroys session
        *@param void
        *@return void
        */
        public function logout()
        {
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_type');
            $this->session->sess_destroy();

            $this->load->library('facebook');
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_type');
            $this->facebook->destroySession();
            redirect('login'); 
        }
    }
?>
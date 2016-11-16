<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*Class for performing signup
**/
class SignUpController extends CI_Controller 
    {


        /**
        *Function to perform signup
        *@param void
        *@return void
        */
        public function signUp()
        {
            // Ensuring post request
            if ($this->input->post()) {
                
                $this->form_validation->set_rules('name', 'Name', 'required|max_length[35]| min_length[5]|trim|alpha_numeric');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[35]| min_length[5]|trim');
                $this->form_validation->set_rules('password', 'Password','required|min_length[5]|max_length[35]|trim|alpha_numeric|matches[confirm_password]');
                $this->form_validation->set_rules('confirm_password', 'Confirm Password','required|min_length[5]|max_length[35]|trim|alpha_numeric');

                $data['email'] = $this->input->post('email');

                // Validating form post
                if ($this->form_validation->run() == FALSE){
                    $this->load->view('signup',$data);
                }

                else{

                    // creating activation code by hasing timestap and salt
                    $timestamp = NOW();
                    $salt= sha1(md5("ousfzbf6esoinpoy56tuluatraducjtionfç6bi3reio6ngr7atuitvo6metdetrttpeswebàpartirdeliau"));
                    $activation_code= md5($salt.$timestamp);
                    
                    $credentials=array(
                        'user_name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('password')),
                        'activation' => $activation_code,
                        'user_type' => 1,
                        'signup' => date("Y-m-d H:i:s")
                        );

                    $this->load->model('signupmodel');

                    // checking if user exists
                    if ($this->signupmodel->checkIfUserExists($credentials['email'])){
                        $this->session->set_flashdata('message',"Email already exits. Try another.");
                        redirect('signup');
                    }
                    else{
                        if($this->signupmodel->registerUser($credentials)){
                            $this->sendEmail($activation_code);
                        }
                        else{
                            redirect('signup');
                        }
                    }
                }
            }

            else{
                $this->load->view('signup');
            }
        }

        /**
        *Fuction for sending email
        *@param null
        *@return null
        **/
        public function sendEmail($activation_code)
        {

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'akashsprakashnew@gmail.com';
            $config['smtp_pass']    = 'meakash*5';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html'; // or text
            $config['validation'] = TRUE; // bool whether to validate email or not 
            $this->email->initialize($config); 

            $this->email->from('akashsprakashnew@gmail.com','Akash S');
            $this->email->to($this->input->post('email'));

            $user_email= $this->input->post('email');
            $user_rand = random_string('alnum', 25);

            $this->email->subject('Successfully Registered'); 
            $this->email->message("Thanks for signing up!
                Your account has been created, you can login with the following credentials 
                after you have activated your account by pressing the url below.
                Please click this link to activate your account:
               <a href='localhost/User/index.php/verify/$user_email/$activation_code'>Click Here</a>"); 

            //Send mail 
            if($this->email->send()) {
                $this->load->view('successpage'); 
            }
            else{
                $this->session->set_flashdata("email_sent","Error in sending Email."); 
                redirect('signup');
            }
        }

        /**
        *Fuction to activate user account
        *@param null
        *@return null
        **/
        public function activateAccount() 
        {

            if (filter_var($this->uri->segment(2), FILTER_VALIDATE_EMAIL) && ctype_alnum($this->uri->segment(3))) {
                $credentials=array(
                    'email' => $this->uri->segment(2),
                    'activation' => $this->uri->segment(3)
                    );
                $this->load->model('signupmodel');

                // checking if user exists
                if ($this->signupmodel->checkIfUserExists($credentials['email'])){
                    if($this->signupmodel->activateUser($credentials)){
                        $this->load->view('activate');
                    }
                    else{
                        redirect($this->uri->uri_string());
                    }
                }
                else{
                    redirect('my404');
                }

            }
            else{
                redirect('my404');
            }
        }

    }
?>
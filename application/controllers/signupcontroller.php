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
            
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[35]| min_length[5]|trim');
            $this->form_validation->set_rules('password', 'Password','required|min_length[5]|max_length[35]|trim|alpha_numeric|matches[confirm_password]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password','required|min_length[5]|max_length[35]|trim|alpha_numeric');

            // Validating form post
            if ($this->form_validation->run() == FALSE){
                $this->load->view('signup');
            }

            else{
                $credentials=array(
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password'))
                    );

                $this->load->model('signupmodel');

                // checking if user exists
                if ($this->signupmodel->checkIfUserExists($credentials['email'])){
                    $this->session->set_flashdata('message',"Email already exits. Try another.");
                    redirect('signup');
                }
                else{
                    // @.todo - change the name of the function
                    if($this->signupmodel->registerUser($credentials)){
                        $this->sendEmail();
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
    public function sendEmail()
    {

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'akashsprakashnew@gmail.com';
        $config['smtp_pass']    = '';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or text
        $config['validation'] = TRUE; // bool whether to validate email or not 
        $this->email->initialize($config); 

        $this->email->from('akashsprakashnew@gmail.com','Akash S Prakash');
        $this->email->to($this->input->post('email'));

        $this->email->subject('Successfully Registered'); 
        $message=" <h1>Thankyou for registering with us.</h1> ";
        $this->email->message("$message"); 

        //Send mail 
        if($this->email->send()) {
            $this->load->view('successpage'); 
        }
        else{
            $this->session->set_flashdata("email_sent","Error in sending Email."); 
            redirect('signup');
        }
    }
}
?>
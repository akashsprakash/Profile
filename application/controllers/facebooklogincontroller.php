<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*Class for perform login with Facebook
**/
require_once APPPATH.'libraries/facebook.php';
class FacebookLoginController extends CI_Controller 
    {

        /**
        *Function to login with facebook
        *@param void
        *@return void
        */
        public function facebookLogin()
        {
            $this->load->library('facebook');
            // Get user's login information
            $user = $this->facebook->getUser();
            
            if (!empty($user)) {

                $userProfile = $this->facebook->api('/me/');

                // Preparing data for database insertion
                $credentials= array(
                    'facebook_id' => $userProfile['id'],
                    'user_name' => $userProfile['name'],
                    'user_type' => 2,
                    'signup' => date("Y-m-d H:i:s")
                    );

                $this->load->model('facebookloginmodel');

                if ($this->facebookloginmodel->checkIfUserExists($credentials['facebook_id'])) {
                    // setting session
                    $credentials['logged_in'] = TRUE;
                    // $credentials['user_type'] = 2;
                    $this->session->set_userdata($credentials);
                    redirect('login');
                    // $this->checkSession();
                }
                else{
                    if($this->facebookloginmodel->registerUser($credentials)){
                        // setting session
                        $credentials['logged_in'] = TRUE;
                        // $credentials['user_type'] = 2;
                        $this->session->set_userdata($credentials);
                        redirect('login');
                        // $this->checkSession();
                    }
                }
            } 
            else {
                // Store users facebook login url
                $data['login_url'] = $this->facebook->getLoginUrl();
                redirect($data['login_url']);
            }
        }
    }
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /**
    **Class for Custom controller
    **/
    class my404 extends CI_Controller 
    { 
        /**
        *fuction to load custom 404error page
        *@param null
        *@return null
        **/
        public function index() 
        { 

            $this->load->view('my_404');
        } 
    } 
?> 
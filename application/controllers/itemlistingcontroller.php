<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ItemListingController extends CI_Controller
    {

        /**
         *function to list items in table
         *@param void
         *@return null
         */
        public function listingDisplay()
        {
            $this->load->model('itemlistingmodel');
            $data['result']= $this->itemlistingmodel->listItem();
            // return string from controller is stored in result
            // data passed to view from controller
            $this->load->view('itemlisting',$data);  
        }  
    }
?>
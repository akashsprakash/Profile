<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ItemListingModel extends CI_Model
    {

        /**
         *function to load model from item
         *@param void
         *@return user details
         */
        public function listItem()
        {
            $query= $this->db->get('userprofile')->result();
            return $query;
        }       
    }
?>
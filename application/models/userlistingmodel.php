<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*Class for listing users
**/
class UserListingModel extends CI_Model
    {

        /**
        * Function to list user details
        * @param
        * @return
        **/
        public function userDetails()
        {
            $this->db->select('*');
            $this->db->from('userprofile');
            $query = $this->db->get();
            return $query->result();
        }

        /**
        * Function to check status of user
        * @param
        * @return
        **/
        public function checkIfUserDisabled()
        {
        }
    }
?>
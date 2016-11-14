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
        * Function to disable user
        * @param
        * @return
        **/
        public function userDisable($credentials)
        {
            $data = array("status"=> 2);
            $this->db->where('id',$credentials['id']);
            $query = $this->db->update('userprofile',$data);
            return $query;
        }

        /**
        * Function to enable user
        * @param
        * @return
        **/
        public function userEnable($credentials)
        {
            $data = array("status"=> 1);
            $this->db->where('id',$credentials['id']);
            $query = $this->db->update('userprofile',$data);
            return $query;
        }
    }
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*Class for checking if registered facebook user
**/
class FacebookLoginModel extends CI_Model
    {

        /**
        * Function to check if user exists in facebook_id
        * @param string $facebook_id Facebook ID to check user
        * @return boolean Return true if user exists, else false
        **/
        public function checkIfUserExists($facebook_id)
        {
            $this->db->where('facebook_id',$facebook_id);
            $query = $this->db->get('userprofile');

            if ($query->num_rows() > 0){
                return true;
            }
            else{
                return false;
            }
        }

        /**
        * Function to register new user
        * @param array $data User details from controller
        * @return boolean $result Return true if insertion performed, else false
        **/
        // @.todo - change the name of the function
        public function registerUser($data)
        {
            $result= $this->db->insert('userprofile',$data);
            return $result;
        }
    }
?>
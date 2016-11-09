<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
**Class for checking if user exits and user registeration
**/
class SignupModel extends CI_Model
    {

        /**
        * Function to check if user exists
        * @param string $email Email to check user
        * @return boolean Return true if user exists, else false
        **/
        public function checkIfUserExists($email)
        {
            $this->db->where('email',$email);
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
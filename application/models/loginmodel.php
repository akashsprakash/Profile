<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// @.todo - comments for the class
/**
*Class for checking if registered user and password authentication
**/
class LoginModel extends CI_Model
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
        *Function to verify password
        *@param array $data Data of admin
        *@return boolean Return true if password match, else false
        **/
        public function checkIfUserActivated($data)
        {
            $this->db->select('activation');
            $this->db->where('email',$data['email']);
            $query = $this->db->get('userprofile');

            foreach ( $query->result() as $row )
            {
                $user_status= $row->activation;
            }

            if( empty($user_status)){
                return true;
            }    
            else{
                return false;
            }
        }

        /**
        *Function to verify password
        *@param array $data Data of user
        *@return boolean Return true if password match, else false
        **/
        public function verifyPassword($data)
        {
            $this->db->select('password');
            $this->db->where('email',$data['email']);
            $query = $this->db->get('userprofile');

            foreach ( $query->result() as $row )
            {
                $password = $row->password;
            }

            if( $data['password'] === $password ){
                return true;
            }    
            else{
                return false;
            }
        }
    }
?>
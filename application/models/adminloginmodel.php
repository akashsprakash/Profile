<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*Class for checking if admin and password authentication
**/
class AdminLoginModel extends CI_Model
    {

        /**
        * Function to check if admin
        * @param string $email Email to check user
        * @return boolean Return true if user exists, else false
        **/
        public function checkIfAdminExists($email)
        {
            $this->db->where('email',$email);
            $query = $this->db->get('adminprofile');

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
        public function verifyPassword($data)
        {
            $this->db->select('password');
            $this->db->where('email',$data['email']);
            $query = $this->db->get('adminprofile');

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
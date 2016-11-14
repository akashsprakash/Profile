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

        /**
        * Function to activate user
        * @param array $data User details from controller
        * @return boolean $result Return true if updation performed, else false
        **/
        public function activateUser($data)
        {
            $this->db->select('activation');
            $this->db->where('email',$data['email']);
            $query = $this->db->get('userprofile');

            foreach ($query->result() as $row) 
            {
                $user_status= $row->activation;
            }
            if ($user_status === $data['activation']) {
                $update_status = array('activation' => null);
                $this->db->where('email',$data['email']);
                $result = $this->db->update('userprofile' ,$update_status);
                return $result;
            }
            else{
                redirect('my404');
            }
        }

    }
?>
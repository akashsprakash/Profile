<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /**
    * Class for pagination model
    */
    class PaginationModel extends CI_Model
    {

        /**
        *Function to get count of table entries
        *@param null
        *@return total count of rows in 'userprofile'
        **/
        public function recordCount() 
        {
            return $this->db->count_all('userprofile');
        }

        /**
        *Function to fetch data from userprofile
        *@param null
        *@return null
        **/
        public function fetchData($limit, $start) 
        {
            $this->db->limit($limit, $start);
            $query = $this->db->get('userprofile');

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }


    }
?>
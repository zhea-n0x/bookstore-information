<?php
defined('BASEPATH') OR exit('No Direct Script Allowed');

class Loader extends CI_Model{
    //book detail
    public function get_book(){
        //get_data
        $this->db->select('*');
        $this->db->from('tbl_book_detail');
        $this->db->join('tbl_author','tbl_author.author_id = tbl_book_detail.author_id');
        $this->db->join('tbl_category','tbl_category.category_id = tbl_book_detail.category_id');
        $this->db->join('tbl_publisher', 'tbl_publisher.publisher_id = tbl_book_detail.publisher_id');
        $this->db->join('tbl_location', 'tbl_location.location_id = tbl_book_detail.location_id');
        
        return $this->db->get()->result_array();
    }

    
    public function get_author(){
        $this->db->select('*');
        $this->db->from('tbl_author');

        return $this->db->get()->result_array();
    }

    public function get_publish(){
        $this->db->select('*');
        $this->db->from('tbl_publisher');

        return $this->db->get()->result_array();
    }

    public function get_location(){
        $this->db->select('*');
        $this->db->from('tbl_location');

        return $this->db->get()->result_array();
    }

    public function get_category(){
        $this->db->select('*');
        $this->db->from('tbl_category');

        return $this->db->get()->result_array();
    }

    public function get_all_admin(){
        $this->db->select('*');
        $this->db->from('tbl_admin');

        return $this->db->get()->result_array();
    }
    //admin
    public function get_admin($email){
        $this->db->where('email', $email);
        
        return $this->db->get('tbl_admin')->row();
    }
}

?>
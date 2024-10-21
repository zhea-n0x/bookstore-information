<?php

class Admin_model extends CI_Model{
    //get
    public function getBook()
    {
        $this->db->select('*');
        $this->db->from('tbl_book_detail');
        $this->db->join('tbl_author','tbl_author.author_id = tbl_book_detail.author_id');
        $this->db->join('tbl_category','tbl_category.category_id = tbl_book_detail.category_id');
        $this->db->join('tbl_publisher', 'tbl_publisher.publisher_id = tbl_book_detail.publisher_id');
        $this->db->join('tbl_location', 'tbl_location.location_id = tbl_book_detail.location_id');
        
        return $this->db->get()->result_array();
    }

    public function getAuthor(){
        return $this->db->get('tbl_author')->result_array();
    }

    public function getCategory(){
        return $this->db->get('tbl_category')->result_array();
    }

    public function getPublish(){
        return $this->db->get('tbl_publisher')->result_array();
    }

    public function getLocation(){
        return $this->db->get('tbl_location')->result_array();
    }

    public function getUser(){
        return $this->db->get('tbl_admin')->result_array();
    }

    public function countBook(){
        return $this->db->count_all('tbl_book_detail');
    }

    public function countAuthor(){
        return $this->db->count_all('tbl_author');
    }

    public function countLocation(){
        return $this->db->count_all('tbl_location');
    }

    public function countAdmin(){
        return $this->db->count_all('tbl_admin');
    }
    //get by id
    //get book
    public function getBookById($book_id){
        return $this->db->get_where('tbl_book_detail', ['book_id' => $book_id])->row_array();
    }

    public function getLocationById($location_id){
        return $this->db->get_where('tbl_location',['location_id' => $location_id])->row_array();
    }

    public function getAuthorById($author_id){
        return $this->db->get_where('tbl_author',['author_id' => $author_id])->row_array();
    }

    public function getPublisherById($publisher_id){
        return $this->db->get_where('tbl_publisher',['publisher_id' => $publisher_id])->row_array();
    }

    public function getCategoryById($category_id){
        return $this->db->get_where('tbl_category',['category_id' => $category_id])->row_array();
    }

    public function getAdminById($id){
        return $this->db->get_where('tbl_admin',['admin_id' => $id])->row_array();
    }
    //end get

    //insert data
    public function insertlocation(){
        $data = [
            "location_id" => $this->input->post('ident', true),
            "location" => $this->input->post('lokasi', true) 
        ];

        $this->db->insert('tbl_location', $data);
    }

    public function insertcategory(){
        $data = [
            "category_id" => $this->input->post('id', true),
            "category_name" => $this->input->post('nama', true) 
        ];

        $this->db->insert('tbl_category', $data);
    }

    public function insertbook(){
        $data = [
            "book_id" => $this->input->post('id',true),
            "book_title" => $this->input->post('judul',true),
            "author_id" => $this->input->post('author', true),
            "category_id" => $this->input->post('kategori', true),
            "publisher_id" => $this->input->post('publisher', true),
            "location_id" => $this->input->post('location', true),
            "price" => $this->input->post('harga',true),
            "stock_unit" => $this->input->post('stock',true)
        ];

        $this->db->insert('tbl_book_detail', $data);
    }

    public function insertauthor(){
        $data = [
            "author_id" => $this->input->post('id',true),
            "author_name" => $this->input->post('nama',true),
            "email" => $this->input->post('email', true),
            "years_active" => $this->input->post('aktif', true),
            "country" => $this->input->post('negara', true)
        ];

        $this->db->insert('tbl_author', $data);
    }

    public function insertpublisher(){
        $data = [
            "publisher_id" => $this->input->post('id',true),
            "publisher_name" => $this->input->post('penerbit',true),
            "email" => $this->input->post('email', true),
            "address" => $this->input->post('alamat', true)
        ];

        $this->db->insert('tbl_publisher', $data);
    }

    public function insertadmin($post){
        $this->db->insert('tbl_admin',$post);
    }
    //end insert

    //update data
    public function updatelocation(){
        $data = [
            "location" => $this->input->post('lokasi', true) 
        ];
        $this->db->where('location_id',$this->input->post('ident'));
        $this->db->update('tbl_location', $data);
    }

    public function updatecategory(){
        $data = [
            "category_name" => $this->input->post('nama', true) 
        ];
        $this->db->where('category_id',$this->input->post('id'));
        $this->db->update('tbl_category', $data);
    }

    public function updatebook(){
        $data = [
            "book_id" => $this->input->post('id',true),
            "book_title" => $this->input->post('judul',true),
            "author_id" => $this->input->post('author', true),
            "category_id" => $this->input->post('kategori', true),
            "publisher_id" => $this->input->post('publisher', true),
            "location_id" => $this->input->post('location', true),
            "price" => $this->input->post('harga',true),
            "stock_unit" => $this->input->post('stock',true)
        ];

        $this->db->where('book_id',$this->input->post('id'));
        $this->db->update('tbl_book_detail', $data);
    }

    public function updateauthor(){
        $data = [
            "author_id" => $this->input->post('id',true),
            "author_name" => $this->input->post('nama',true),
            "email" => $this->input->post('email', true),
            "years_active" => $this->input->post('aktif', true),
            "country" => $this->input->post('negara', true)
        ];

        $this->db->where('author_id',$this->input->post('id'));
        $this->db->update('tbl_author', $data);
    }

    public function updatepublisher(){
        $data = [
            "publisher_id" => $this->input->post('id',true),
            "publisher_name" => $this->input->post('penerbit',true),
            "email" => $this->input->post('email', true),
            "address" => $this->input->post('alamat', true)
        ];

        $this->db->where('publisher_id',$this->input->post('id'));
        $this->db->update('tbl_publisher', $data);
    }

    public function updateadmin($post){
        $this->db->update('tbl_admin',$post);
    }

    //end update data

    //delete data
    public function removelocation($location_id){
        $this->db->where('location_id',$location_id);
        $this->db->delete('tbl_location');
    }

    public function removebook($book_id){
        $this->db->where('book_id',$book_id);
        $this->db->delete('tbl_book_detail');
    }
    
    public function removeauthor($author_id){
        $this->db->where('author_id',$author_id);
        $this->db->delete('tbl_author');
    }

    public function removepublisher($publisher_id){
        $this->db->where('publisher_id',$publisher_id);
        $this->db->delete('tbl_publisher');
    }

    public function removecategory($category_id){
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }

    public function removeadmin($admin_id){
        $this->db->where('admin_id',$admin_id);
        $this->db->delete('tbl_admin');
    }
    //end delete

    
}


?>
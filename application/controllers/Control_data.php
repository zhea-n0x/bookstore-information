<?php

defined('BASEPATH') or EXIT('No Direct Script Allowed');

class Control_data extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
        $this->load->helper('form','url');
    }

    //insert data
    public function insertlocation(){
        
        $this->form_validation->set_rules('ident','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('lokasi','Nama Lokasi', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/add_location');
        }else{
            $this->Admin_model->insertlocation();
            $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
            redirect('admin/location_management');
        }

    }
    public function insertbook(){
        
        $this->form_validation->set_rules('id','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('judul','Judul', 'required');
        $this->form_validation->set_rules('harga','Harga', 'required|numeric');
        $this->form_validation->set_rules('author','Penulis', 'required');
        $this->form_validation->set_rules('kategori','Kategori', 'required');
        $this->form_validation->set_rules('publisher','Penerbit', 'required');
        $this->form_validation->set_rules('location','Lokasi', 'required');
        $this->form_validation->set_rules('stock','Stok', 'required|numeric');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/add_book');
        }else{
            $this->Admin_model->insertbook();
            $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
            redirect('admin/book_management');
        }

    }

    public function insertauthor(){

        $this->form_validation->set_rules('id','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('aktif','Aktif', 'required');
        $this->form_validation->set_rules('negara','Negara', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/add_author');
        }else{
            $this->Admin_model->insertauthor();
            $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
            redirect('admin/author_management');
        }

    }

    public function insertpublisher(){

        $this->form_validation->set_rules('id','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('penerbit','Nama Penerbit', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat','Alamat', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/add_publisher');
        }else{
            $this->Admin_model->insertpublisher();
            $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
            redirect('admin/publisher_management');
        }

    }

    public function insertcategory(){

        $this->form_validation->set_rules('id','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('nama','Nama Kategori', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/add_category');
        }else{
            $this->Admin_model->insertcategory();
            $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
            redirect('admin/category_management');
        }
    }

    public function insertadmin(){
            $config['upload_path']     = 'assets/img/admin_photo';
            $config['allowed_types']   = 'gif|jpg|png|jpeg';
            $config['max_size']        = 3096;
            $config['file_name']       = 'photo-'.date('ymd').'-'.substr(md5(rand()),0,10);

            $this->load->library('upload',$config);
            $this->upload->initialize($config);

            if(@$_FILES['image']['name'] != null){
                if($this->upload->do_upload('image')){
                    $post['admin_id'] = $this->input->post('id');
                    $post['admin_name'] = $this->input->post('nama');
                    $post['email'] = $this->input->post('email');
                    $post['password'] = md5($this->input->post('password'));
                    $post['img_admin'] = $this->upload->data('file_name');

                    $this->Admin_model->insertadmin($post);
                    $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
                    redirect('admin/user_management');

                }
            }else{
                $post['admin_id'] = $this->input->post('id');
                $post['admin_name'] = $this->input->post('nama');
                $post['email'] = $this->input->post('email');
                $post['password'] = md5($this->input->post('password'));
                $post['img_admin'] = 'default.png';

                $this->Admin_model->insertadmin($post);
                $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan, Gambar Default');
                redirect('admin/user_management');
            }
    }
    //end insert

    //update data
    public function updatelocation(){
        
        $this->form_validation->set_rules('ident','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('lokasi','Nama Lokasi', 'required');

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Nissa-Bookstore Admin | Edit Lokasi";
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/edit_location');
        }else{
            $this->Admin_model->updatelocation();
            $this->session->set_flashdata('pesan','Data Berhasil Diedit');
            redirect('admin/location_management');
        }

    }

    public function updatecategory(){
        
        $this->form_validation->set_rules('id','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('nama','Nama Kategori', 'required');

        if($this->form_validation->run() == FALSE){
            $data['title'] = "Nissa-Bookstore Admin | Edit Kategori";
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/edit_category');
        }else{
            $this->Admin_model->updatecategory();
            $this->session->set_flashdata('pesan','Data Berhasil Diedit');
            redirect('admin/category_management');
        }

    }

    public function updatebook(){
        
        $this->form_validation->set_rules('id','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('judul','Judul', 'required');
        $this->form_validation->set_rules('harga','Harga', 'required|numeric');
        $this->form_validation->set_rules('author','Penulis', 'required');
        $this->form_validation->set_rules('kategori','Kategori', 'required');
        $this->form_validation->set_rules('publisher','Penerbit', 'required');
        $this->form_validation->set_rules('location','Lokasi', 'required');
        $this->form_validation->set_rules('stock','Stok', 'required|numeric');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/add_book');
        }else{
            $this->Admin_model->updatebook();
            $this->session->set_flashdata('pesan','Data Berhasil Diedit');
            redirect('admin/book_management');
        }

    }

    public function updateauthor(){

        $this->form_validation->set_rules('id','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('aktif','Aktif', 'required');
        $this->form_validation->set_rules('negara','Negara', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/add_author');
        }else{
            $this->Admin_model->updateauthor();
            $this->session->set_flashdata('pesan','Data Berhasil Diedit');
            redirect('admin/author_management');
        }

    }

    public function updatepublisher(){

        $this->form_validation->set_rules('id','Identifikasi', 'required|numeric');
        $this->form_validation->set_rules('penerbit','Nama Penerbit', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('alamat','Alamat', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('pesan',validation_errors());
            redirect('admin/add_publisher');
        }else{
            $this->Admin_model->updatepublisher();
            $this->session->set_flashdata('pesan','Data Berhasil Diedit');
            redirect('admin/publisher_management');
        }

    }

    public function updateadmin(){
        $config['upload_path']     = 'assets/img/admin_photo';
        $config['allowed_types']   = 'gif|jpg|png|jpeg';
        $config['max_size']        = 3096;
        $config['file_name']       = 'photo-'.date('ymd').'-'.substr(md5(rand()),0,10);

        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if(@$_FILES['image']['name'] != null){
            if($this->upload->do_upload('image')){
                $post['admin_id'] = $this->input->post('id');
                $post['admin_name'] = $this->input->post('nama');
                $post['email'] = $this->input->post('email');
                $post['password'] = md5($this->input->post('password'));
                $post['img_admin'] = $this->upload->data('file_name');

                $this->Admin_model->updateadmin($post);
                $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
                redirect('admin/user_management');

            } else {

                $post['admin_id'] = $this->input->post('id');
                $post['admin_name'] = $this->input->post('nama');
                $post['email'] = $this->input->post('email');
                $post['password'] = md5($this->input->post('password'));
                $post['img_admin'] = 'default.png';

                $this->Admin_model->updateadmin($post);
                $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan, Gambar Default');
                redirect('admin/user_management');
            }
        }else{
            echo $error = error_log('$message');
        }
}
    //end update data
    
    //remove data
    public function remove_location($location_id){
        $this->Admin_model->removelocation($location_id);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/location_management');
    }

    public function remove_book($book_id){
        $this->Admin_model->removebook($book_id);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/book_management');
    }

    public function remove_author($author_id){
        $this->Admin_model->removeauthor($author_id);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/author_management');
    }

    public function remove_publisher($publisher_id){
        $this->Admin_model->removepublisher($publisher_id);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/publisher_management');
    }

    public function remove_category($category_id){
        $this->Admin_model->removecategory($category_id);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/category_management');
    }

    public function remove_admin($admin_id){
        $this->Admin_model->removeadmin($admin_id);
        $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/user_management');
    }
    //end remove
}

?>
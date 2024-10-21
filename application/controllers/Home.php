<?php

defined('BASEPATH') or exit('No Direct Script Access Allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('index');
    }

    public function book(){
        $this->load->model('loader');
        $data['title'] = 'Halaman Daftar Buku';
        $data['bookdetail'] = $this->loader->get_book();
        $this->load->view('home/booklist',$data);  
    }

    public function author(){
        $this->load->model('loader');
        $data['title'] = 'Halaman Daftar Penulis';
        $data['authordetail'] = $this->loader->get_author();
        $this->load->view('home/authorlist',$data);
    }

    public function publisher(){
        $this->load->model('loader');
        $data['title'] = 'Halaman Daftar Penerbit';
        $data['publishdetail'] = $this->loader->get_publish();

        $this->load->view('home/publisherlist',$data);
    }


    
}

?> 
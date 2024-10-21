<?php 

defined('BASEPATH') or EXIT('No Direct Script Allowed');

class Admin extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper('form');    
    }
    //load table_data
    public function index(){    
        $data['title'] = "Nissa-Bookstore Admin | Dashboard";
        $data['jmlbuku'] = $this->Admin_model->countBook();
        $data['jmlauthor'] = $this->Admin_model->countAuthor();
        $data['jmllokasi'] = $this->Admin_model->countLocation();
        $data['jmladmin'] = $this->Admin_model->countAdmin();
        $this->load->view('management/dashboard',$data);
    }

    public function update_countries(){
        $content=file_get_contents("https://restcountries.com/v3.1/all");
        $result=json_decode($content,true);
        foreach( $result as $val){
            $this->db->query("INSERT INTO tbl_countries VALUES('".$val['name']['common']."')");
        }
    }

    public function book_management(){
        $data['bookdetail'] = $this->Admin_model->getBook();
        $data['title'] = "Nissa-Bookstore Admin | Book Management";
        $this->load->view('management/content/book_list',$data);
    }

    public function author_management(){
        $data['authordetail'] = $this->Admin_model->getAuthor();
        $data['title'] = "Nissa-Bookstore Admin | Author Management";
        $this->load->view('management/content/author_list',$data);
    }

    public function category_management(){
        $data['catdetail'] = $this->Admin_model->getCategory();
        $data['title'] = "Nissa-Bookstore Admin | Category Management";
        $this->load->view('management/content/category_list',$data);
    }

    public function publisher_management(){
        $data['pubdetail'] = $this->Admin_model->getPublish();
        $data['title'] = "Nissa-Bookstore Admin | Publisher Management";
        $this->load->view('management/content/publisher_list',$data);
    }

    public function location_management(){
        $data['locdetail'] = $this->Admin_model->getLocation();
        $data['title'] = "Nissa-Bookstore Admin | Location Management";
        $this->load->view('management/content/location_list',$data);
    }

    public function user_management(){
        $data['userdetail'] = $this->Admin_model->getUser();
        $data['title'] = "Nissa-Bookstore Admin | User-Management";
        $this->load->view('management/user/user_list',$data); 
    }

    //end table view

    //load form view
    //add view
    public function add_book(){
        $data['author'] = $this->Admin_model->getAuthor();
        $data['category'] = $this->Admin_model->getCategory();
        $data['publisher'] = $this->Admin_model->getPublish();
        $data['location'] = $this->Admin_model->getLocation();
        $data['title'] = "Nissa-Bookstore Admin | Tambah Buku";
        $this->load->view('management/content/form/book',$data);
    }

    public function add_location(){
        $data['title'] = "Nissa-Bookstore Admin | Tambah Lokasi";
        $this->load->view('management/content/form/location',$data);
    }

    public function add_author(){
        $data['countries'] = $this->db->get('tbl_countries')->result();
        $data['title'] = "Nissa-Bookstore Admin | Tambah Penulis";
        $this->load->view('management/content/form/author',$data); 
    }

    public function add_publisher(){
        $data['title'] = "Nissa-Bookstore Admin | Tambah Penerbit";
        $this->load->view('management/content/form/publisher', $data);
    }

    public function add_category(){
        $data['title'] = "Nissa-Bookstore Admin | Tambah Kategori";
        $this->load->view('management/content/form/category', $data);
    }

    public function add_admin(){
        $data['title'] = "Nissa-Bookstore Admin | Tambah Admin";
        $this->load->view('management/user/form/add_admin', $data);
    }
    //end add

    //edit view
    public function edit_location($location_id)
    {   
        $data['location'] = $this->Admin_model->getLocationById($location_id);
        $data['title'] = "Nissa-Bookstore Admin | Edit Lokasi";
        $this->load->view('management/content/form/edit_location',$data);
    }

    public function edit_book($book_id)
    {
        $data['author'] = $this->Admin_model->getAuthor();
        $data['category'] = $this->Admin_model->getCategory();
        $data['publisher'] = $this->Admin_model->getPublish();
        $data['location'] = $this->Admin_model->getLocation();
        $data['book'] = $this->Admin_model->getBookById($book_id);
        $data['title']= "Nissa-Bookstore Admin | Edit Buku";
        $this->load->view('management/content/form/edit_book',$data);
    }

    public function edit_author($author_id)
    {
        $data['countries'] = $this->db->get('tbl_countries')->result();
        $data['author'] = $this->Admin_model->getAuthorById($author_id);
        $data['title'] = "Nissa Bookstore Admin | Edit Author";
        $this->load->view('management/content/form/edit_author',$data);
    }

    public function edit_publisher($publisher_id)
    {
        $data['publisher'] = $this->Admin_model->getPublisherById($publisher_id);
        $data['title'] = "Nissa Bookstore Admin | Edit Publisher";
        $this->load->view('management/content/form/edit_publisher',$data);
    }

    public function edit_category($category_id)
    {   
        $data['category'] = $this->Admin_model->getCategoryById($category_id);
        $data['title'] = "Nissa-Bookstore Admin | Edit Kategori";
        $this->load->view('management/content/form/edit_category',$data);
    }
    //end view
    //end form view

    public function configuration($id)
    {

        //$data['admin'] = $this->session->userdata('id');
        //$data['admin'] = $this->session->userdata('nama');
        //$data['admin'] = $this->session->userdata('email');
        //$data['admin'] = $this->session->usedata('password');
        //$data['admin'] = $this->session->userdata('img');
        $data['admin'] = $this->Admin_model->getAdminById($id);
        $data['title'] = "Admin Profile Settings";
        $this->load->view('management/user/form/edit_admin',$data);
    }

}

?>
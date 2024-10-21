<?php

defined('BASEPATH') or EXIT('No Direct Script Are Allowed');

class Auth extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('loader');
    }

    public function index(){
        if($this->session->userdata('authenticated'))
            redirect('admin');

        $this->load->view('login');
    }

    public function login(){
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $user = $this->loader->get_admin($email);

        if(empty($user)){
            $this->session->set_flashdata('message','Email tidak terdaftar');
            redirect('auth');
        }else{
            if($password == $user->password){
                $session = array(
                    'authenticated'=> true,
                    'id'=> $user->admin_id,
                    'nama'=> $user->admin_name,
                    'email'=> $user->email,
                    'password'=> $user->password,
                    'img'=> $user->img_admin
                );

                $this->session->set_userdata($session);
                redirect('admin');
            }else{
                $this->session->set_flashdata('message','Password tidak cocok');
                redirect('auth');
            }
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}
?>
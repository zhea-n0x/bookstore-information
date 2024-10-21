<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');

class Simple_login {
 // SET SUPER GLOBAL
 var $CI = NULL;
 public function __construct() {
 $this->CI =& get_instance();
 }

 // Proteksi halaman
 public function cek_login() {
 if($this->CI->session->userdata('email') == '') {
 $this->CI->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Illegal Access Detected !</div>');
 redirect(base_url('web/admin/login'));
 }
 }
}
?>
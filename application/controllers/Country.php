<?php
class Country extends CI_Controller{
    function index(){
        $data['judul'] = "Daftar Negara";
        $this->load->view("header",$data);
        echo "Daftar Negara";
        $this->load->view("navigation");
        $this->load->view("footer");
    }
}
?>
<?php
class Home extends CI_Controller{
    function index(){
        $data['nama'] = "Albert";
        $data['judul'] = "Codeigniter";
        $this->load->view("header",$data);
        $this->load->view("navigation");
        $this->load->view("content1",$data);
        $this->load->view("footer");
    }
}

?>
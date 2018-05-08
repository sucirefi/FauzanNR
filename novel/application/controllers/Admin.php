<?php
  class Admin extends CI_Controller{
      function index(){
        $data['content']='admin/home_view';
          $this->load->view("admin/template",$data);
      }

  }
  ?>

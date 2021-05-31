<?php

class Home extends CI_controller{

    function index(){
      
        $this->load->model('Home_model');
        $menus=$this->Home_model->get();
        $data=array();
        $data['menus']=$menus;
        $this->load->view('home/home',$data);
      
    }
}
<?php

class Home extends CI_controller{

    function index(){
        // if(empty($this->session->userdata['user']))
        // {
        $this->load->model('Home_model');
        $menus=$this->Home_model->get();
        $data=array();
        $data['menus']=$menus;
        $this->load->view('home/home',$data);
        // }
        // else{
        //     $this->load->model('Home_model');
        //     $menus=$this->Home_model->gettype();
        //     $data=array();
        //     $data['menus']=$menus;
        //     $this->load->view('home/home',$data);
        // }
    }
}
<?php

class Custorder extends CI_controller{

    function index(){
        if(empty($this->session->userdata['user'])|| $_SESSION['user']['is_cust']==0){
            redirect(base_url().'login');
        }
        else{
        $this->load->model('Customer_model');
        $orders=$this->Customer_model->getorder();
        $data=array();
        $data['orders']=$orders;
        $this->load->view('home/custorder',$data);
        }
        
    }

}
<?php

class Dashboard extends CI_controller{

    function index(){


        if(empty($this->session->userdata['user']) || $_SESSION['user']['is_cust']==1){
            $this->session->set_flashdata('errorMsg','Login as Shop');
            redirect(base_url().'login');
        }

        else{
        $this->load->view('admin/dashboard');
        }
    }
    function signOut(){

        $this->session->unset_userdata('user');
        $this->session->set_flashdata('errorMsg','Successfully Logged out');
        redirect(base_url().'login');
    }
}
?>

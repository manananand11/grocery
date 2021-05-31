<?php

class Login extends CI_controller{

    function index(){
        $this->load->model('User_model');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()==false){
            
            $this->load->view('admin/login');
        }
        else{
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $user=$this->User_model->doLogin($username,$password);

            if(!empty($user) && $user['is_cust']==0){
                $this->session->set_userdata('user',$user);
               
                redirect(base_url().'dashboard');
            }
            elseif($user['is_cust']==1)
            {
                $this->session->set_userdata('user',$user);
                redirect(base_url());
            }
            
            else{
                $this->session->set_flashdata('errorMsg','Either username or password is incorrect');
                redirect(base_url().'login');
            }
        }

        
    }

}

?>
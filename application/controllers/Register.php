<?php

class Register extends CI_controller{

    function index()
    {
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->model('Restaurant_model');

        $this->form_validation->set_rules('name','Name','trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('contact','Contact','required|exact_length[10]');
        $this->form_validation->set_rules('regn','Registration','required');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');

        if($this->form_validation->run()==true)
        {
            $form_array=array();
            $form_array['username']=$this->input->post('name');
            $form_array['password']=$this->input->post('password');
            $form_array['is_cust']=0;

            $form=array();
            $form['name']=$this->input->post('name');
            $form['contact']=$this->input->post('contact');
            $form['regn']=$this->input->post('regn');

            $this->Restaurant_model->create($form);

            $this->User_model->create($form_array);
            $this->session->set_flashdata('errorMsg','Registration Succesful. Please login');
            redirect(base_url().'login');
        }
        else
        {
        $this->load->view('admin/register');
        }
    }
    function add()
    {
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->model('Customer_model');

        $this->form_validation->set_rules('name','Name','trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('contact','Contact','required|exact_length[10]');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');

        if($this->form_validation->run()==true)
        {
            $form_array=array();
            $form_array['username']=$this->input->post('name');
            $form_array['password']=$this->input->post('password');
            $form_array['is_cust']=1;

            $form=array();
            $form['name']=$this->input->post('name');
            $form['contact']=$this->input->post('contact');
            $form['address']=$this->input->post('address');
            $form['pref']=$this->input->post('type');

            $this->Customer_model->create($form);

            $this->User_model->create($form_array);
            $this->session->set_flashdata('errorMsg','Registration Succesful. Please login');
            redirect(base_url().'login');
        }
        else
        {
        $this->load->view('admin/registeradd');
        }
    }

}
?>
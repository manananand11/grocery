<?php
   class Menu extends CI_controller{
   
       
       public function index(){
   
           if(empty($this->session->userdata['user'])|| $_SESSION['user']['is_cust']==1){
               redirect(base_url().'login');
           }
           else{
           $this->load->model('Menu_model');
           $menus=$this->Menu_model->get();
           $data=array();
           $data['menus']=$menus;
           $this->load->view('admin/menu/list',$data);
           }
       }
       
       
       public function add()
       {
           if(empty($this->session->userdata['user'])|| $_SESSION['user']['is_cust']==1){
               redirect(base_url().'login');
           }
           else{
           $this->load->library('form_validation');
           $this->load->model('Menu_model');
   
           $this->form_validation->set_rules('name','Name','trim|required|is_unique[menus.name]');
           $this->form_validation->set_rules('price','price','required');
           $this->form_validation->set_rules('type','Type','required');
           $this->form_validation->set_rules('desc','Desc','trim|required');
          
   
           if($this->form_validation->run()==true)
           {
               $image=array(
                   'upload_path'=>'./assets/image',
                   'allowed_types'=>'jpg|png|jpeg',
                   'max_size'=>4000
               );
               $this->load->library("upload",$image);
   
               if (!$this->upload->do_upload('image'))
               {
   
                   
                   $this->session->set_flashdata('errorMsg',$this->upload->display_errors());
                   $this->load->view('admin/menu/add');
               }
               else{
                   $fd=$this->upload->data();
                   $fn=$fd['file_name'];
               
   
   
               $form_array=array();
               $form_array['name']=$this->input->post('name');
               $form_array['price']=$this->input->post('price');
               $form_array['type']=$this->input->post('type');
               $form_array['desc']=$this->input->post('desc');
               $form_array['restaurant']=$_SESSION['user']['username'];
               $form_array['image']=$fn;
               $form_array['created_at']=date('Y-m-d');
   
               $this->Menu_model->create($form_array);
   
               $this->session->set_flashdata('success','Menu item Added!');
               redirect(base_url().'menu/index');
               }
           }
           else{
               $this->load->view('admin/menu/add');
           }
       }
           
       }
   
       public function edit($id)
       {
           if(empty($this->session->userdata['user'])|| $_SESSION['user']['is_cust']==1){
               redirect(base_url().'login');
           }
           else{
           $data=array();
           $this->load->library('form_validation');
           $this->load->model('Menu_model');
   
           $menu=$this->Menu_model->getMenu($id);
   
           if(empty($menu))
           {
               $this->session->set_flashdata('success','Menu not found');
               redirect(base_url().'menu/index');
           }
   
           $this->form_validation->set_rules('name','Name','trim|required');
           $this->form_validation->set_rules('price','price','required');
           $this->form_validation->set_rules('type','Type','required');
           $this->form_validation->set_rules('desc','Desc','trim|required');
   
           if($this->form_validation->run()==true)
           {
               $image=array(
                   'upload_path'=>'./assets/image',
                   'allowed_types'=>'jpg|png|jpeg',
                   'max_size'=>4000
               );
               $this->load->library("upload",$image);
   
               if (!$this->upload->do_upload('image'))
               {
                   $this->session->set_flashdata('errorMsg',$this->upload->display_errors());
                   $this->load->view('admin/menu/add');
               }
               else{
                   $fd=$this->upload->data();
                   $fn=$fd['file_name'];
               
               $form_array=array();
               $form_array['name']=$this->input->post('name');
               $form_array['price']=$this->input->post('price');
               $form_array['type']=$this->input->post('type');
               $form_array['desc']=$this->input->post('desc');
               $form_array['restaurant']=$_SESSION['user']['username'];
               $form_array['image']=$fn;
               $form_array['created_at']=date('Y-m-d');
   
               $this->Menu_model->update($id,$form_array);
   
               $this->session->set_flashdata('success','Menu Item updated!');
               redirect(base_url().'menu/index');
               }
           }
           else{
               $data['menu']=$menu;
               $this->load->view('admin/menu/edit',$data);
           }
   
       }
       }
   
       function delete($id){
           if(empty($this->session->userdata['user'])|| $_SESSION['user']['is_cust']==1){
               redirect(base_url().'login');
           }
           else{
           
           $this->load->model('Menu_model');
           $this->Menu_model->delete($id);
   
           $this->session->set_flashdata('success','Menu Item Deleted!');
           redirect(base_url().'menu/index');
       }
       }
   }
   ?>
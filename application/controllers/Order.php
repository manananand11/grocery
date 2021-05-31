<?php
   class Order extends CI_controller{
   
       function index(){
           if(empty($this->session->userdata['user'])|| $_SESSION['user']['is_cust']==1){
               redirect(base_url().'login');
           }else{
           $this->load->model('Order_model');
           $orders=$this->Order_model->get();
           $data=array();
           $data['orders']=$orders;
           $this->load->view('admin/order',$data);
           }
       }
       public function add($id)
       {
           if(empty($this->session->userdata['user'])|| $_SESSION['user']['is_cust']==0){
               
               $this->session->set_flashdata('errorMsg','Please login as customer');
               redirect(base_url().'login');
           }
           else{
           
           $this->load->model('Order_model');
           $this->load->model('Customer_model');
           $orders=$this->Order_model->getid($id);
           $customers=$this->Customer_model->getname($_SESSION['user']['username']);
           
               $form_array=array();
               $form_array['item']=$orders[0]['name'];
               $form_array['price']=$orders[0]['price'];
               $form_array['customer_name']=$_SESSION['user']['username'];
               $form_array['contact']=$customers[0]['contact'];
               $form_array['restaurant']=$orders[0]['restaurant'];
               $form_array['created_at']=date('Y-m-d');
   
               $this->Order_model->create($form_array);
   
               $this->session->set_flashdata('success','Order Successfully Placed!');
               redirect(base_url());
          
       }
           
       }
   }
   ?>
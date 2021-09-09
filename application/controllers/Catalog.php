<?php

class Catalog extends CI_controller{

    function add($slug){

        $this->load->model('Catalog_model');
        $menus=$this->Catalog_model->get($slug);
        $data=array();
        $data['menus']=$menus;
        $this->load->view('home/catalog',$data);

    }
}

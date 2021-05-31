<?php

class Order_model extends CI_model{


    function create($formArray)
    {
        $this->db->insert('orders',$formArray);
    }

    function get(){
        $this->db->order_by('id', 'DESC');
        $this->db->where('restaurant',$_SESSION['user']['username']);
       $orders= $this->db->get('orders')->result_array();
        return $orders;
    }

    function getid($id)
    {
        $this->db->where('id',$id);
       $orders= $this->db->get('menus')->result_array();
        return $orders;
    }


}
?>
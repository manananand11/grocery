<?php


class Customer_model extends CI_model{

    function create($formArray)
    {
        $this->db->insert('customers',$formArray);
    }
    function getname($name)
    {
        $this->db->where('name',$name);
       $customers= $this->db->get('customers')->result_array();
        return $customers;
    }
    function getorder()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->where('customer_name',$_SESSION['user']['username']);
       $customers= $this->db->get('orders')->result_array();
        return $customers;
    }
} 


?>
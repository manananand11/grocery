<?php

class Home_model extends CI_model{
    function get(){
        $this->db->order_by('id', 'DESC');
    $menus= $this->db->get('menus')->result_array();
    return $menus;
    }
   
}
?>
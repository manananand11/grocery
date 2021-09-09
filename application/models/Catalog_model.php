<?php

class Catalog_model extends CI_model{
    function get($slug){
        $this->db->order_by('id', 'DESC');
        $this->db->where('restaurant',$slug);
    $menus= $this->db->get('menus')->result_array();
    return $menus;
    }

}
?>

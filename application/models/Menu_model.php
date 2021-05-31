<?php

class Menu_model extends CI_model{

    function create($formArray)
    {
        $this->db->insert('menus',$formArray);
    }
    function get(){
        $this->db->where('restaurant',$_SESSION['user']['username']);
       $menus= $this->db->get('menus')->result_array();
        return $menus;
    }

    function update($id,$array){
        $this->db->where('id',$id);
        $this->db->update('menus',$array);
    }

    function  getMenu($id)
    {
        $this->db->where('id',$id);
        $menu=$this->db->get('menus')->row_array();
        return $menu;
    }
    function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('menus');
    }


}
?>
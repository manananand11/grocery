<?php


class Restaurant_model extends CI_model{

    function create($formArray)
    {
        $this->db->insert('restaurants',$formArray);
    }
} 


?>
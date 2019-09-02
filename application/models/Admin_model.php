<?php


class Admin_model extends CI_Model{


    public function insert($data)
    {
        $this->db->insert('news',$data);
    }

    public function getAll()
    {
        return $this->db->order_by('id','DESC')->get('news')->result_array();
    }



}
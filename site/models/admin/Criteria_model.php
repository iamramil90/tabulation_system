<?php

/**
 * Created by PhpStorm.
 * User: rgonzales
 * Date: 7/12/2016
 * Time: 11:57 AM
 */
class Criteria_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_criteria(){

        $query = $this->db->query("SELECT * from criteria");

        return $query;
    }

    public function save_criteria($post){

        $criteria_id = (int)$post['criteria_id'];

        $this->db->set($post);

        if($criteria_id != ""){
            $this->db->where('criteria_id',$criteria_id);
            $this->db->update('criteria');
        }else{
            $this->db->insert('criteria');
        }


        return $this;
    }

    public function remove_criteria($criteria_id){

        $this->db->where('criteria_id',$criteria_id);
        $this->db->delete('criteria');

        return $this;

    }

}
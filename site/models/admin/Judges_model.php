<?php

/**
 * Created by PhpStorm.
 * User: rgonzales
 * Date: 7/13/2016
 * Time: 8:22 AM
 */
class Judges_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get_all_judges(){

        $query = $this->db->query("SELECT * from judges");
        return $query;
    }

    public function save_judge($post){

        $judge_id = (int)$post['judge_id'];

        $this->db->set($post);

        if($judge_id != ""){
            $this->db->where('judge_id',$judge_id);
            $this->db->update('judges');
        }else{
            $this->db->insert('judges');
        }


        return $this;
    }

    public function remove_judge($judge_id){

        $this->db->where('judge_id',$judge_id);
        $this->db->delete(judges);

        return $this;

    }
}
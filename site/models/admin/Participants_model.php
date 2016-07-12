<?php

/**
 * Created by PhpStorm.
 * User: ramil
 * Date: 7/9/16
 * Time: 1:13 PM
 */
class Participants_model extends CI_Model
{

    public function __construct()
    {

        parent::__construct();
    }

    public function getAllParticipants(){

        $query = $this->db->query("SELECT * from participants");
        
        
        return $query;
    }

   /* public function add_participant($post){

       $query =  $this->db->insert('participants',$post);

        return $query;
    }
*/
    public function save_participant($post){

        $entity_id = (int)$post['entity_id'];

        $this->db->set($post);

        if($entity_id != ""){
            $this->db->where('entity_id',$entity_id);
            $this->db->update('participants');
        }else{
            $this->db->insert('participants');
        }


        return $this;
    }
    
    public function remove_participant($entity_id){

        $this->db->where('entity_id',$entity_id);
        $this->db->delete(participants);

        return $this;

    }
    
    
}
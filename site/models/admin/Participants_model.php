<?php

/**
 * Created by PhpStorm.
 * User: ramil
 * Date: 7/9/16
 * Time: 1:13 PM
 */
class Participants_model extends CI_Model
{
    const IMAGE_FILE_PATH = '/media/participants/';


    public function __construct()
    {

        parent::__construct();
    }

    public function getAllParticipants(){

        $query = $this->db->query("SELECT e.*, GROUP_CONCAT(img.filepath,',') as images from participants
          as e  LEFT JOIN media as img ON e.entity_id = img.attrib_id GROUP BY e.entity_id ORDER BY e.entity_id");

        
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

    public function save_image($image,$entity_id){

        $image_filename = self::IMAGE_FILE_PATH . $image['file_name'];
        $this->db->set('filepath',$image_filename);
        $this->db->set('attrib_id',$entity_id);
        $this->db->insert('media');

        return $this;

    }
    
    
}
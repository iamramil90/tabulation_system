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

        $query = $this->db->query("SELECT e.*, GROUP_CONCAT(img.filepath,',') as images,GROUP_CONCAT(img.entity_id,',') as img_id from participants
          as e  LEFT JOIN media as img ON e.entity_id = img.attrib_id GROUP BY e.entity_id ORDER BY e.entity_id");

        
        return $query;
    }

    public function set_default_image($get){

        $participant_id = (int)$get['participant_id'];
        $image_id       = (int)$get['image_id'];

        $this->db->query("UPDATE media set set_default = CASE WHEN entity_id = $image_id THEN 1
                          ELSE 0 END WHERE attrib_id = $participant_id");

        return $this;
    }

    public function remove_selected_image($get){

        $image_id       = (int)$get['image_id'];

        $this->db->delete('media', array('entity_id' => $image_id));

        return $this;
    }

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
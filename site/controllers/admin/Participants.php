<?php

/**
 * Created by PhpStorm.
 * User: ramil
 * Date: 7/9/16
 * Time: 1:19 PM
 */
class Participants extends CI_Controller{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/participants_model');
        $this->load->library('upload');

        if(!$this->session->userdata('logged_in')){
            redirect('admin','refresh');
        }
    }

    public function index()
    {

        $collection['participants'] = $this->participants_model->getAllParticipants();;

        $data['content_title'] = "Manage Contestant";
        $data['content'] = $this->load->view('admin/participants/grid',$collection,true);
        $data['title'] = 'Manage Contestant';
        $this->load->view('admin/template.php',$data);
    }

    public function save(){

        $post = $this->input->post();

        try{

            $query =$this->participants_model->save_participant($post);

            $entity_id = $query->db->insert_id() > 0 ? $query->db->insert_id() : $post['entity_id']; // participant_ID

            if($entity_id > 0 && is_uploaded_file($_FILES['participant_image']['tmp_name'])) {

               $image =  $this->_upload_image('participant_image');

                if(!$image['error']){
                    $this->participants_model->save_image($image['upload_data'],$entity_id);
                }
            }

            $this->session->set_flashdata('success', 'Successfully saved!');

        }catch (Exception $e){

            $this->session->set_flashdata('error', 'Error: '.$e->getMessage());
        }

            redirect('admin/participants/');
    }

    public function remove(){
        
        $entity_id = $this->uri->segment(4); //segment 4 entity_id
        try{

            $this->participants_model->remove_participant($entity_id);
            $this->session->set_flashdata('success', 'Successfully removed!');


        }catch (Exception $e){
            $this->session->set_flashdata('error', 'Error: '.$e->getMessage());
        }

        redirect('admin/participants/');
    }

    public function loadform(){

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        $data = json_decode($request->info,true);
        $this->load->view('admin/participants/form',$data);
    }

    private function _upload_image($image){

        $config['file_name']            = 'IMG' . rand();
        $config['upload_path']          = $_SERVER['DOCUMENT_ROOT'] . '/media/participants/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload($image))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data = array('error' => 0,'upload_data' => $this->upload->data());
        }

        return $data;
    }
}

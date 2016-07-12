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

        if(!$this->session->userdata('logged_in')){
            redirect('admin','refresh');
        }
    }

    public function index()
    {

        $participants = $this->participants_model->getAllParticipants();
        $collection['participants'] = $participants;

        $data['content_title'] = "Manage Contestant";
        $data['content'] = $this->load->view('admin/participants/grid',$collection,true);
        $data['title'] = 'Manage Contestant';
        $this->load->view('admin/template.php',$data);
    }

    public function save(){

        $post = $this->input->post();

        try{

            $this->participants_model->save_participant($post);

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

  
}

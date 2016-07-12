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


        $data['form_modal'] = $this->load->view('admin/contestant/form',true,true);
        $data['content_title'] = "Manage Contestant";
        $data['content'] = $this->load->view('admin/contestant/grid',$collection,true);
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

       $entity_id = $this->input->get('entity_id');

        try{

            $this->participants_model->remove_participant($entity_id);
            $this->session->set_flashdata('success', 'Successfully removed!');


        }catch (Exception $e){
            $this->session->set_flashdata('error', 'Error: '.$e->getMessage());
        }

        redirect('admin/participants/');
    }
}

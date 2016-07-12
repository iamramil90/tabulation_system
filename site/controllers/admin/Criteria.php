<?php

/**
 * Created by PhpStorm.
 * User: rgonzales
 * Date: 7/12/2016
 * Time: 11:49 AM
 */
class Criteria extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->model('admin/criteria_model');

        if(!$this->session->userdata('logged_in')){
            redirect('admin','refresh');
        }
    }

    public function index(){
        $collection['criteria'] = $this->criteria_model->get_all_criteria();

       // $data['form_modal'] = $this->load->view('admin/criteria/form',true,true);
        $data['content_title'] = "Manage Criteria";
        $data['content'] = $this->load->view('admin/criteria/grid',$collection,true);
        $data['title'] = 'Manage Criteria';
        $this->load->view('admin/template.php',$data);
    }

    public function save(){
        $post = $this->input->post();

        try{
            
            $this->criteria_model->save_criteria($post);

            $this->session->set_flashdata('success', 'Successfully saved!');

        }catch (Exception $e){

            $this->session->set_flashdata('error', 'Error: '.$e->getMessage());
        }

        redirect('admin/criteria/');
    }

    public function remove(){

        $criteria_id = $this->uri->segment(4); //segment 4 entity_id

        try{

            $this->criteria_model->remove_criteria($criteria_id);
            $this->session->set_flashdata('success', 'Successfully removed!');


        }catch (Exception $e){
            $this->session->set_flashdata('error', 'Error: '.$e->getMessage());
        }

        redirect('admin/criteria');
    }


    public function loadform(){

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        $data = json_decode($request->info,true);
        $this->load->view('admin/criteria/form',$data);
    }

}
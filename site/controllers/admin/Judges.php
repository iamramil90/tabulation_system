<?php

/**
 * Created by PhpStorm.
 * User: rgonzales
 * Date: 7/13/2016
 * Time: 8:06 AM
 */
class Judges extends CI_Controller{

    public function __construct(){

        parent::__construct();

        $this->load->model('admin/judges_model');
        $this->load->library('encryption');

        if(!$this->session->userdata('logged_in')){
            redirect('admin','refresh');
        }
    }

    public function index(){

        $collection['judges'] = $this->judges_model->get_all_judges();;
 
        $data['content_title'] = "Manage Judges";
        $data['content'] = $this->load->view('admin/judges/grid',$collection,true);
        $data['title'] = 'Manage Judges';
        $this->load->view('admin/template.php',$data);
    }

    public function save(){

        $post = $this->input->post();
        $post['password'] = $this->encryption->encrypt($post['password']);
        try{

            $this->judges_model->save_judge($post);

            $this->session->set_flashdata('success', 'Successfully saved!');

        }catch (Exception $e){

            $this->session->set_flashdata('error', 'Error: '.$e->getMessage());
        }

        redirect('admin/judges/');
    }

    public function remove(){

        $judge_id = $this->uri->segment(4); //segment 4 entity_id
        try{

            $this->judges_model->remove_judge($judge_id);
            $this->session->set_flashdata('success', 'Successfully removed!');


        }catch (Exception $e){
            $this->session->set_flashdata('error', 'Error: '.$e->getMessage());
        }

        redirect('admin/judges/');
    }

    public function loadform(){

        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);

        $data = json_decode($request->info,true);
        $this->load->view('admin/judges/form',$data);
    }

}
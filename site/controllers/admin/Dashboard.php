<?php

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data['form_modal'] = "";
        $data['content_title'] = "Dashboard";
        $data['content'] = $this->load->view('admin/dashboard/content',TRUE,TRUE);
        $data['title'] = 'Dashboard';
        $this->load->view('admin/template.php',$data);
    }
}
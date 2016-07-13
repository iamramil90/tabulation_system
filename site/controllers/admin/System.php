<?php

/**
 * Created by PhpStorm.
 * User: ramil
 * Date: 7/11/16
 * Time: 9:06 PM
 */
class System extends CI_Controller
{

   const ADMIN_ROLE = 'super_user';

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $data['content'] = '';
        $data['content_title'] = 'Manage Criteria';
        $data['title'] = 'Manage Criteria';
        $this->load->view('admin/template.php',$data);
    }

    public function my_account(){

        $data['content'] = $this->load->view('admin/system/my_account',TRUE,TRUE);
        $data['content_title'] = 'My Account';
        $data['title'] = 'My Account';
        $this->load->view('admin/template.php',$data);
    }

    public function save_account(){

        $post = $this->input->post();
        $post['admin_role'] = self::ADMIN_ROLE;

        

    }
}
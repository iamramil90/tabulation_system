<?php

/**
 * Created by PhpStorm.
 * User: rgonzales
 * Date: 7/12/2016
 * Time: 7:35 AM
 */
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/login_model');


    }

    public function index(){

        $data['title'] = "Administrator";
        $this->load->view('admin/html/login',$data);
    }

    public function login(){

        $error = FALSE;
        $username = $this->input->post('username');
        $password = md5($this->input->post('password')); //encrypt password

        if($username == ''){
            $error = TRUE;
        }
        if($password == ''){
            $error = TRUE;
        }

        $user_record = $this->login_model->user_account($username,$password);

       if(($user_record->num_rows() > 0) && !$error){

           $user = $user_record->row();

           $this->_set_user_session($user);
           $this->login_model->update_last_login($user->user_id);

           redirect('admin/dashboard');
       }else{

           $this->session->set_flashdata('error', 'Invalid User Name or Password.');
           redirect('admin');
       }
    }

    //store user data into session
    private function _set_user_session($user){

        $data = array(
            'user_id'  => $user->user_id,
            'username'     => $user->username,
            'logged_in' => TRUE
        );

        $this->session->set_userdata($data);
    }

    //Logout admin user and redirect to login page
    public function logout(){
        $this->session->unset_userdata('logged_in');
        redirect('admin');
    }

}
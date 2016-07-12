<?php

/**
 * Created by PhpStorm.
 * User: rgonzales
 * Date: 7/12/2016
 * Time: 8:30 AM
 */
class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function user_account($username,$password){

        $result = $this->db->query("SELECT * from admin_user WHERE username='{$username}' AND password = '{$password}' AND is_active=1");

        return $result;

    }

    //set last login
    public function update_last_login($user_id){

        if(isset($user_id)){
            $this->db->set('last_login', 'NOW()', FALSE);
            $this->db->where('user_id',$user_id);
            $this->db->update('admin_user');
        }

    }
}
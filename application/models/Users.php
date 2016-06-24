<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Model {

    public function getUsers()
    {
        $users=$this->db->get('Users');
        
        return $users->result();
        
    }
    public function Login_model($data)
    {
        $query = "email = '".$data['email']."' AND password = '".$data['password']."'";
        $this->db->where($query);
        $user=$this->db->get('Users');
        return $user->result();
        
    }
    
}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('Login_view');
    }

    public function tryLogin() {
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $this->load->model('Users');
        $user = $this->Users->Login_model($data);

        if (count($user) == 1) {
            $this->session->set_userdata('email', $user[0]->email);
            $this->session->set_userdata('password', $user[0]->password);
                    $this->load->view('Home_view');
        } else {
            $this->index();
        }
    }

}
?>
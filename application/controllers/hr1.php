<?php

class Hr1 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login_id')) {
            return redirect('home');
            exit();
        }


        $this->load->view('private/hr/header', ['username' => $this->get_admin()]);
        $this->load->view('private/hr/footer');
    }
    public function index()
    {
        $this->load->view('private/hr/hr1_view');

    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('login_id')) {
            return redirect('home');
            exit();
        }
        $this->load->view('private/dashboard/dashboard_header', ['username' => $this->get_admin()]);

    }
    public function index()
    {
        $this->load->view('private/dashboard/dashboard_view');
        $this->load->view('private/dashboard/dashboard_footer');
    }

    public function documentation()
    {
        $this->load->view('private/dashboard/documentation');
        $this->load->view('private/dashboard/dashboard_footer');

    }
    public function support()
    {
        $this->load->view('private/dashboard/support');
        $this->load->view('private/dashboard/dashboard_footer');
    }
    public function prefrences()
    {
        $this->load->view('private/dashboard/prefrences');
        $this->load->view('private/dashboard/dashboard_footer');
    }
    public function logout()
    {
        $this->session->unset_userdata('login_id');
        return redirect('home');
    }
}
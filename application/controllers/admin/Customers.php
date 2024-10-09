<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customers extends CI_Controller
{
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('general_model');

    }
    public function index()
    {
    //    $this->data['active_users'] = $this->general_model->getCount('kariger_details', [], 1);
    //     $this->data['inactive_users'] = $this->general_model->getCount('kariger_details', [], 0);
        $this->load->view('admin/header');
        $this->load->view('admin/main_header');
        $this->load->view('admin/sidebar');
        // $this->load->view('admin/dashboard',$this->data);
        $this->load->view('admin/customers');

        $this->load->view('admin/footer');

    }
    public function orders(){
        $this->load->view('admin/header');
        $this->load->view('admin/main_header');
        $this->load->view('admin/sidebar');
        // $this->load->view('admin/dashboard',$this->data);
        $this->load->view('admin/orders');

        $this->load->view('admin/footer');

    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation'); 
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('general_model');

        $this->form_validation->set_error_delimiters("<div class='error'>", "</div>");
    }

    public function index()
    {
       
        $admin_data = $this->session->userdata('admin');

        if (!empty($admin_data) && isset($admin_data['id'])) {
            redirect('dashboard', 'refresh');
        } else {
            redirect('admin_login', 'refresh');
        }
    }
    public function login()

    {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() === true) {
           
            $password = md5($this->input->post('password'));
            $email = $this->input->post('email');
            $where = array('email' => $email, 'password' => $password);
            $user = $this->general_model->getOne('ssl_users', $where);
            if ($user) {
                    $session = array(
                        'id' => $user->id,
                        'email' => $user->email,
                        
                    );
                    $this->session->set_userdata('admin', $session);
                    $this->session->set_flashdata('message', array('1', 'Successfully login'));
                    redirect('dashboard', 'refresh');
               
            } else {
                $this->session->set_flashdata('message', array('0', 'Invalid email or password.'));
                redirect('admin_login', 'refresh');

            }
        }
        $this->data['title'] = 'mobilebiodta|Login';
        $this->load->view('admin/login', $this->data);

    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', array('1', 'Successfully logout.'));
        redirect('auth/login', 'refresh');
    }

}
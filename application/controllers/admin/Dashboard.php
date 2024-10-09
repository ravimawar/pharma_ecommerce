<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
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
        $this->data['categories'] = $this->general_model->getCount('categories', [], 1);
        $this->data['products'] = $this->general_model->getCount('products', [], 1);
        $this->load->view('admin/header');
        $this->load->view('admin/main_header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard',$this->data);
        $this->load->view('admin/footer');

    }
    public function getprofiles()
    {
        $this->load->library('datatables');
        
        $this->datatables
            ->select('kariger_details.id, kariger_details.photo, kariger_details.name, kariger_details.experience, kariger_details.rate, kariger_details.mobile, kariger_details.location')
            ->from('kariger_details')
            ->where('kariger_details.isActive', 1); 

        
        $action = '<a class="btn btn-sm btn-primary edit" title="Edit" id="edit" data-id="$1"><i class="mdi mdi-pencil"></i></a> ';
        $action .= '<button class="btn btn-sm btn-danger delete-btn" data-id="$1" title="Delete"><i class="mdi mdi-delete"></i></button>';


        $this->datatables->add_column('Actions', '$1' === '123' ? '' : $action, 'kariger_details.id');
        
        echo $this->datatables->generate();
    }
        public function profile_list(){
        $this->load->view('admin/header');
        $this->load->view('admin/main_header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/profile_list');
        $this->load->view('admin/footer');
    }

    public function getprofiles_inactive()
    {
        $this->load->library('datatables');
    
        $this->datatables
            ->select('kariger_details.id, kariger_details.photo, kariger_details.name, kariger_details.experience, kariger_details.rate, kariger_details.mobile, kariger_details.location')
            ->from('kariger_details')
            ->where('kariger_details.isActive', 0); 
    
        $action = '<button class="btn btn-sm btn-success activate" data-id="$1" title="Activate"> click to Activate</button>';
    
        // Add action buttons to the last column
        $this->datatables->add_column('Actions', $action, 'kariger_details.id');
    
        echo $this->datatables->generate();
    }
 public function profiles_inactive(){
    $this->load->view('admin/header');
    $this->load->view('admin/main_header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/inactive_profile');
    $this->load->view('admin/footer');
  }

  public function getUserData()
  {
      $id = $this->input->post('id');
      $user = $this->db->where('id', $id)->get('kariger_details')->row();
      if ($user) {
          echo json_encode(['success' => true, 'data' => $user]);
      } else {
          echo json_encode(['success' => false]);
      }
  }
  public function updateUser(){
    $id = $this->input->post('userId');
    if($_FILES){
                $ids = uniqid() . '.jpg';
                $upload_dir = 'uploads/';
                $target_file = $upload_dir . $ids;
                $new_file_tmp = $_FILES['updateprofile']['tmp_name'];
              move_uploaded_file($new_file_tmp, $target_file);
             
    }
    $data = [
        'name' => $this->input->post('userName'),
        'photo' => $target_file, 
        'experience' => $this->input->post('userExperience'),
        'rate' => $this->input->post('rate'),
        'mobile' => $this->input->post('mobile'),
        'location' => $this->input->post('location'),
       ];

    $this->db->where('id', $id)->update('kariger_details', $data);
    if ($this->db->affected_rows() > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
  }

  public function delete_profile(){
    $id = $this->input->post('id');
    $data = [
        'isActive' => 0,
    ];
    $this->db->where('id', $id)->update('kariger_details', $data);
    if ($this->db->affected_rows() > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
  }
  public function reactive_user(){
    $id = $this->input->post('id');
    $data = [
        'isActive' => 1,
    ];
    $this->db->where('id', $id)->update('kariger_details', $data);
    if ($this->db->affected_rows() > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
  }
  
  }

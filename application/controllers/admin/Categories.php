<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Categories extends CI_Controller
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
    
        $this->load->view('admin/header');
        $this->load->view('admin/main_header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/categories');
        $this->load->view('admin/footer');

    }
    public function getcategories()
{
    $this->load->library('datatables');

    // Select the id, name, and image path
    $this->datatables
        ->select('categories.id, categories.name, categories.image')
        ->from('categories')
        ->where('categories.isActive', 1);

    // Define the actions
    $action = '<a class="btn btn-sm btn-primary edit" id="edit" title="Edit" data-id="$1"><i class="mdi mdi-pencil"></i></a> ';
    $action .= '<button class="btn btn-sm btn-danger delete-btn" data-id="$1" title="Delete"><i class="mdi mdi-delete"></i></button>';

    // Add the actions column
    $this->datatables->add_column('Actions', '$1' === '123' ? '' : $action, 'categories.id');

    // Generate and return the JSON
    echo $this->datatables->generate();
}


    public function addCategories(){
        $target_file = "";
        $categoryName = $this->input->post('categoryName');

        if (!empty($_FILES['categoryimage']['name'])) {
            $name = $categoryName . '.jpg';
            $upload_dir = 'uploads/categoryimage/';
            $target_file = $upload_dir . $name;
            $new_file_tmp = $_FILES['categoryimage']['tmp_name'];


            move_uploaded_file($new_file_tmp, $target_file);

            
        }
        $data = [
            'name' => $categoryName,
            'image' => $target_file,
            'created_on' => date('Y-m-d H:i:s') 
        ];
    
        
        $exist = $this->general_model->getOne('categories', array('name' => $categoryName));
        if ($exist) {
            echo json_encode(['success' => 'exist']); 
            exit;
        } else {
            $this->general_model->insert('categories', $data);
            $insert_id = $this->db->insert_id();
        }
    
        
        if (isset($insert_id) && $insert_id) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    
        
    }
    
    public function getsingalCategories(){
        $id = $this->input->post('id');
      $categories = $this->db->where('id', $id)->get('categories')->row();
      if ($categories) {
          echo json_encode(['success' => true, 'data' => $categories]);
      } else {
          echo json_encode(['success' => false]);
      }
    }
    public function updateCategories(){
        $id = $this->input->post('id');
        $existingCategory = $this->db->where('id', $id)->get('categories')->row();
        $target_file = $existingCategory->image;
        $categoryName = $this->input->post('name');
        if (!empty($_FILES['image']['name'])) {
            
            $name = $categoryName . '.jpg';
            $upload_dir = 'uploads/categoryimage/';
            $target_file = $upload_dir . $name;
            $new_file_tmp = $_FILES['image']['tmp_name'];
           move_uploaded_file($new_file_tmp, $target_file);
          }
         
          $data = [
            'name' => $this->input->post('name'),
            'image' => $target_file, 
           ];
   
        $this->db->where('id', $id)->update('categories', $data);
        if ($this->db->affected_rows() > 0) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    }

    public function delete_categorie(){
        $id = $this->input->post('id');
        $data = [
            'isActive' => 0,
        ];
        $this->db->where('id', $id)->update('categories', $data);
        if ($this->db->affected_rows() > 0) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
      }
    
}
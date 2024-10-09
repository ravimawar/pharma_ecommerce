<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product extends CI_Controller
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
        $this->data['categories'] = $this->general_model->getData('categories', ['id','name'], ['isActive' => 1]);
        $this->load->view('admin/header');
        $this->load->view('admin/main_header');
        $this->load->view('admin/sidebar');
        // $this->load->view('admin/dashboard',$this->data);
        $this->load->view('admin/products',$this->data);

        $this->load->view('admin/footer');

    }
    public function getproducts() {
        $this->load->library('datatables');
    
        $this->datatables
            ->select('products.id, products.name, products.image, products.quntity, products.price, products.mrp')
            ->from('products')
            ->where('products.isActive', 1);
    
        $action = '<a class="btn btn-sm btn-primary edit" title="Edit" data-id="$1"><i class="mdi mdi-pencil"></i></a> ';
        $action .= '<button class="btn btn-sm btn-danger delete-btn" data-id="$1" title="Delete"><i class="mdi mdi-delete"></i></button>';
    
        $this->datatables->add_column('Actions', $action, 'products.id');
    
        echo $this->datatables->generate();
    }
        
    public function add_product(){
        $postData = $this->input->post();
        
        $productName = $this->input->post('productName');
        $target_file = "";
       if (!empty($_FILES['productImage']['name'])) {
            $name = $productName . '.jpg';
            $upload_dir = 'uploads/productimage/';
            $target_file = $upload_dir . $name;
            $new_file_tmp = $_FILES['productImage']['tmp_name'];


            move_uploaded_file($new_file_tmp, $target_file);

            
        }
        $data = [
            'name' => $productName,
            'categories_id' => $postData['categoryId'],
            'description' => $postData['productDescription'],
            'mrp' => $postData['productMRP'],
            'price' => $postData['productPrice'],
            'quntity' => $postData['productQuantity'],
            'image' => $target_file,
            'created_on' => date('Y-m-d H:i:s') 
        ];
    
        
        $exist = $this->general_model->getOne('products', array('name' => $productName));
        if ($exist) {
            echo json_encode(['success' => 'exist']); 
            exit;
        } else {
            $this->general_model->insert('products', $data);
            echo json_encode(['success' => true]);
           
        }
       
    }


  public function getsingalproduct() {
    $id = $this->input->post('id');

    $user = $this->db->where('id', $id)->get('products')->row();

    if ($user) {
        $category = $this->db->select('name')
                             ->where('id', $user->categories_id)
                             ->get('categories')
                             ->row();

        $user->category_name = $category ? $category->name : 'Unknown';
            echo json_encode(['success' => true, 'data' => $user]);
    } else {
        echo json_encode(['success' => false]);
    }
}
public function updateproduct(){
    
        $id = $this->input->post('prd_id');
        $existingCategory = $this->db->where('id', $id)->get('products')->row();
        $target_file = $existingCategory->image;
        $productName = $this->input->post('name');
        if (!empty($_FILES['editProductImage']['name'])) {
            $name = $productName . '.jpg';
            $upload_dir = 'uploads/productimage/';
            $target_file = $upload_dir . $name;
            $new_file_tmp = $_FILES['editProductImage']['tmp_name'];
           move_uploaded_file($new_file_tmp, $target_file);
          }
         
    $data = [
        'categories_id ' => $this->input->post('editCategory'),
        'name' => $this->input->post('editProductName'), 
        'description' => $this->input->post('editProductDescription'),
        'mrp' => $this->input->post('editProductMRP'),
        'price' => $this->input->post('editProductPrice'),
        'image' => $target_file,
        'quntity' => $this->input->post('editProductQuantity'),
       ];
    $this->db->where('id', $id)->update('products', $data);
    if ($this->db->affected_rows() > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }

}
public function delete_product(){
    $id = $this->input->post('id');
    $data = [
        'isActive' => 0,
    ];
    $this->db->where('id', $id)->update('products', $data);
    if ($this->db->affected_rows() > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
  }

}

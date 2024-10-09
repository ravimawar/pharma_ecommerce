<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('general_model');

    }
	public function index($category_id = null)
{
    if ($category_id !== null) {
        $this->data['products'] = $this->general_model->getall('products', array('isActive' => 1, 'categories_id' => $category_id));
    } else {
        $this->data['products'] = $this->general_model->getall('products', array('isActive' => 1));
    }

    $this->load->view('header');
    $this->load->view('product_view', $this->data);
    $this->load->view('footer');
}

	public function product_details($id){
        $this->data['products'] = $this->general_model->getOne('products', array('isActive' => 1, 'id' => $id));
        $this->load->view('header');
		$this->load->view('product_details_view',$this->data);
		$this->load->view('footer');
    }
}

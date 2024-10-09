<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('general_model');

    }
	
	public function index()
	{
		
		$this->data['cart_contents'] = $this->cart->contents();
// echo "<pre>";
// print_r( $this->data['cart_contents']);die;
		$this->load->view('header');
		$this->load->view('cart_view',$this->data);
		$this->load->view('footer');

	}
	public function save_cart()
    {

		// $this->cart->destroy();
		// echo "hi";
		// die;
		$data       = array();
        $product_id = $this->input->post('id');
        $results    = $this->general_model->getOne('products',array('id'=>$product_id));

        if ($results) {
			$data['id']      = $results->id;
			$data['name']    = $results->name;
			$data['price']   = $results->price;
			$data['qty']     = 1; 
			$data['mrp']     = $results->mrp;
			$data['image']   = $results->image;
	        $this->cart->insert($data);
			echo json_encode(['success' => true]);
		} else {
			echo json_encode(['success' => false]);
		}
    }
	public function update_quantity()
	{
		$rowid = $this->input->post('rowid');
		$qty = $this->input->post('quantity');
	
		if ($rowid && $qty) {
			$data = array(
				'rowid' => $rowid,
				'qty' => $qty
			);
			$this->cart->update($data);
			
			
			echo json_encode(['success' => true]);
		} else {
			echo json_encode(['success' => false]);
		}
	}
	
	public function remove()
	{
		$rowid = $this->input->post('rowid');
	
		if ($rowid) {
			$data = array(
				'rowid' => $rowid,
				'qty' => 0
			);
			$this->cart->update($data);
	
			echo json_encode(['success' => true]);
		} else {
			echo json_encode(['success' => false]);
		}
	}
	
}

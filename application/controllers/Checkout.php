<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('general_model');
        $this->load->library('cart'); // Load the cart library
    }
    
    public function index()
    {
        // Get cart data
        $cart_data = $this->cart->contents();
        $data['cart_items'] = $cart_data; // Pass cart data to the view

        // Calculate subtotal and total
        $subtotal = 0;
        foreach ($cart_data as $item) {
            $subtotal += $item['subtotal'];
        }

        // Define delivery charge (static value)
        $delivery_charge = 100; // Static delivery charge
        $total = $subtotal + $delivery_charge; // Calculate total

        $data['subtotal'] = $subtotal;
        $data['total'] = $total;
        $data['delivery_charge'] = $delivery_charge;

        $this->load->view('header');
        $this->load->view('checkout_view', $data); // Pass the data to the view
        $this->load->view('footer');
    }
}

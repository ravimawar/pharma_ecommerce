<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('general_model');

    }
	public function index()
	{
		$this->data['categories']= $this->general_model->getall('categories',array('isActive'=>1));
		$this->data['anticancer']= $this->general_model->getall('products',array('isActive'=>1,'categories_id'=>2));
		
		$this->data['covid']= $this->general_model->getall('products',array('isActive'=>1,'categories_id'=>7));

		
		$this->load->view('header');
		$this->load->view('home_view',$this->data);
		$this->load->view('footer');

	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login_view');
		$this->load->view('footer');

	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('include/header_view');
		$this->load->view('home_view');
		$this->load->view('include/footer_view');

        
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		$data['title'] = "Home";
		$this->load->view('include/header_view', $data);
		$this->load->view('home_view');
		$this->load->view('include/footer_view');

        
	}

	public function view_products()
	{
		$this->load->helper('url');
		$this->load->model('Products_model');
		//$data['products'] = $this->Products_model->getAllProducts();
		$data['title'] = "View All Products";
		$this->load->view('include/header_view', $data);
		$this->load->view('products_view', $data);
		$this->load->view('include/footer_view');

		
	}

}

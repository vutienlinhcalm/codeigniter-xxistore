<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('IndexModel');
		$this->data['brand'] = $this->IndexModel->getBrandHome();
	}
	
	public function index()
	{
		$this->data['product'] = $this->IndexModel->getAllProduct();
		$this->load->view('pages/common/header',$this->data);
		$this->load->view('pages/common/slider');
		$this->load->view('pages/home',$this->data);
		$this->load->view('pages/common/footer');
	}

	public function brand($brandid)
	{
		$this->data['brand_product'] = $this->IndexModel->getBrandProduct($brandid);
		$this->data['brandname'] = $this->IndexModel->getBrandName($brandid);
		$this->load->view('pages/common/header',$this->data);
		// $this->load->view('pages/common/slider');
		$this->load->view('pages/brand',$this->data);
		$this->load->view('pages/common/footer');
	}

	public function product($productid)
	{
		
		$this->data['productdetails'] = $this->IndexModel->getProductDetails($productid);
		$this->load->view('pages/common/header',$this->data);
		//$this->load->view('pages/common/slider');
		$this->load->view('pages/product_detail',$this->data);
		$this->load->view('pages/common/footer');
	}

	public function cart()
	{
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/slider');
		$this->load->view('pages/cart');
		$this->load->view('pages/common/footer');
	}

	public function login()
	{
		$this->load->view('pages/common/header');
		$this->load->view('pages/common/slider');
		$this->load->view('pages/login');
		$this->load->view('pages/common/footer');
	}
	
	
}

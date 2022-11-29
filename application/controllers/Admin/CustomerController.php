<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // nếu (Session loggedIn không tồn tại) chưa đăng nhập thì không truy cập được vào trang Admin/Dashboard
        if(!$this->session->userdata('LoggedIn')){
            redirect(base_url('Admin/Login'));
        }
    }
	public function checklogin(){
        if(!$this->session->userdata('LoggedIn')){
            redirect(base_url('Admin/Login'));
        }
    }
	public function index()
	{
     
        $this->load->view('admincommon/header');
        $this->load->view('admincommon/navbar');
        // Lấy dữ liệu từ model
        $this->load->model('Admin/CustomerModel');
        $data['customer']  = $this->CustomerModel->selectCustomer();

		$this->load->view('Admin/customer/list',$data);
        $this->load->view('admincommon/footer');
	}  


    public function view($customerid){
        $this->load->view('admincommon/header');
        $this->load->view('admincommon/navbar');

        $this->load->model('Admin/CustomerModel');
        $data['customer']  = $this->CustomerModel->selectCustomerByid($customerid);

		$this->load->view('Admin/customer/view',$data);
        $this->load->view('admincommon/footer');
    }

   
}

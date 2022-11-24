<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // nếu (Session loggedIn không tồn tại) chưa đăng nhập thì không truy cập được vào trang Admin/Dashboard
        if(!$this->session->userdata('LoggedIn')){
            redirect(base_url('Admin/Login'));
        }
    }
	// public function checklogin(){
    //     if($this->session->userdata('LoggedIn')){
    //         redirect(base_url('Admin/Dashboard'));
    //     }else{
    //         redirect(base_url('Admin/Login'));
    //     }
    // }
	public function index()
	{
      //  $this->checklogin();
        $this->load->view('templates/Header');
        $this->load->view('admincommon/navbar');
		$this->load->view('Admin/Dashboard');
        $this->load->view('templates/Footer');
	}
    public function logout(){
        //$this->checklogin();
        // $this->session->Sess_destroy(); xóa tất cả các session
        $this->session->unset_userdata('LoggedIn');//Xóa session LoggedIn thông báo thành công và chuyển qua trang Admin/Login
        $this->session->set_flashdata('message', 'Logout Successfully');
        redirect(base_url('Admin/Login'));
    }
    
    
}

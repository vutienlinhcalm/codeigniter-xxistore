<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin/LoginModel');
    }
	
	public function index()
	{
        $this->load->view('admincommon/header');
		$this->load->view('Admin/login');
        $this->load->view('admincommon/footer');
	}
    public function login(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required',['required' => 'You must provide a email %s.']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required',['required' => 'You must provide a password %s.']);
        
        if ($this->form_validation->run())
        {
               $email = $this->input->post('email');
               $password = sha1($this->input->post('password'));
               $result = $this->LoginModel->checklogin($email,$password);
               if($result){
                $session_array = [
                    'adminid' => $result[0]->adminid,
                    'adminname' => $result[0]->adminname,
                    'email'=> $result[0]->email,
                ];
                
                // Tạo Session LoggedIn với đầu vào là session_array
                $this->session->set_userdata('LoggedIn',$session_array);
                // Trả lỗi về cho trang Login
                $this->session->set_flashdata('success', 'Login Successfully');
                redirect(base_url('/Admin/Dashboard'));
               }else{
                $this->session->set_flashdata('error', 'Wrong Email or Password');
                redirect(base_url('Admin/Login'));

               }
        }
        else
        {
                $this->index();
        }
    }
}

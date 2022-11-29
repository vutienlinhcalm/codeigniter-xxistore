<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrandController extends CI_Controller {
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
      //  $this->checklogin();
        $this->load->view('admincommon/header');
        $this->load->view('admincommon/navbar');
        // Lấy dữ liệu từ model
        $this->load->model('Admin/BrandModel');
        $data['brand']  = $this->BrandModel->selectBrand();

		$this->load->view('Admin/brand/list',$data);
        $this->load->view('admincommon/footer');
	}  
    public function create()
	{
      //  $this->checklogin();
        $this->load->view('admincommon/header');
        $this->load->view('admincommon/navbar');
		$this->load->view('Admin/brand/create');
        $this->load->view('admincommon/footer');
	}  
    // select databrand
    public function store(){
        $this->form_validation->set_rules('brandname', 'Brand Name', 'trim|required',['required' => 'You must provide a  %s.']);
        $this->form_validation->set_rules('description', 'Description', 'trim|required',['required' => 'You must provide a %s.']);
        
        if ($this->form_validation->run())
        { 
            // upload image
            $ori_filename = $_FILES['image']['name'];
            $new_name = time()."".str_replace('','-',$ori_filename);
            $config=[
                'upload_path' => './uploads/imagebrand',
                'allowed_types' =>'gif|jpg|png|jpeg',
                'file_name' => $new_name,
            ];
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('image'))
            {       // gán lỗi vào mảng $error
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('admincommon/header');
                    $this->load->view('admincommon/navbar');
                    $this->load->view('Admin/brand/create',$error);
                    $this->load->view('admincommon/footer');
            }
            else
            {
                // upload file image từ view vào brand_image
                    $brand_image = $this->upload->data('file_name');

                    //$this->load->view('upload_success', $brand_image);
                    // Gán dữ liệu bảng brand cho data_brand
                    $data_brand = [
                        'brandid' => $this->input->post('brandid'),
                        'brandname' => $this->input->post('brandname'),
                        'description'=> $this->input->post('description'),
                        'image' =>$brand_image,
                        'status'=> $this->input->post('status')
                    ];
                    $this->load->model('Admin/BrandModel');
                    $this->BrandModel->insertBrand($data_brand);
                    $this->session->set_flashdata('success','Add Brand successfully');
                    redirect(base_url('Admin/brand/create'));
            }
            
        }else{
            $this->create();
        }
    }
    public function edit($brandid){
        $this->load->view('admincommon/header');
        $this->load->view('admincommon/navbar');

        $this->load->model('Admin/BrandModel');
        $data['brand']  = $this->BrandModel->selectBrandByid($brandid);

		$this->load->view('Admin/brand/edit',$data);
        $this->load->view('admincommon/footer');
    }

    public function update($brandid){
        $this->form_validation->set_rules('brandname', 'Brandname', 'trim|required',['required' => 'You must provide a email %s.']);
        $this->form_validation->set_rules('description', 'Description', 'trim|required',['required' => 'You must provide a password %s.']);
        
        if ($this->form_validation->run())
        { 
            if(!empty($_FILES['image']['name']))
            {
            // upload image
                $ori_filename = $_FILES['image']['name'];
                $new_name = time()."".str_replace('','-',$ori_filename);
                $config=[
                    'upload_path' => './uploads/imagebrand',
                    'allowed_types' =>'gif|jpg|png|jpeg',
                    'file_name' => $new_name,
                ];
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image'))
                {       // gán lỗi vào mảng $error
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admincommon/header');
                        $this->load->view('admincommon/navbar');
                        $this->load->view('Admin/brand/create',$error);
                        $this->load->view('admincommon/footer');
                }
                else
                {
                    // upload file image từ view vào brand_image
                        $brand_image = $this->upload->data('file_name');

                        //$this->load->view('upload_success', $brand_image);
                        // Gán dữ liệu bảng brand cho data_brand
                        $data_brand = [
                            'brandid' => $this->input->post('brandid'),
                            'brandname' => $this->input->post('brandname'),
                            'description'=> $this->input->post('description'),
                            'image' =>$brand_image,
                            'status'=> $this->input->post('status')
                        ];
                       
                }
            }else{
                $data_brand = [
                    'brandid' => $this->input->post('brandid'),
                    'brandname' => $this->input->post('brandname'),
                    'description'=> $this->input->post('description'),
                    'status'=> $this->input->post('status')
                ];
            }
            $this->load->model('Admin/BrandModel');
            $this->BrandModel->updateBrand($brandid,$data_brand);
            $this->session->set_flashdata('success','Update Brand successfully');
            redirect(base_url('Admin/brand/list'));
        }else{
            $this->edit($brandid);
        }
    }
    public function delete($brandid){
        $this->load->model('Admin/BrandModel');
        $this->BrandModel->deleteBrand($brandid);
        $this->session->set_flashdata('success','Update Brand successfully');
        redirect(base_url('Admin/brand/list'));
    }
}

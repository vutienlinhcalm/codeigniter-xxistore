<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {
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
        $this->load->model('Admin/ProductModel');
        $data['product']  = $this->ProductModel->selectAllproduct();

		$this->load->view('Admin/product/list',$data);
        $this->load->view('admincommon/footer');
	}  
    public function create()
	{
      //  $this->checklogin();
        $this->load->view('admincommon/header');
        $this->load->view('admincommon/navbar');
        // lấy dữ liệu của brand
        $this->load->model('Admin/BrandModel');
        $data['brand']  = $this->BrandModel->selectBrand();

		$this->load->view('Admin/product/create',$data);
        $this->load->view('admincommon/footer');
	}  
    // select dataproduct
    public function store(){
        $this->form_validation->set_rules('productname', 'Product Name', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('description', 'Description', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('price', 'Price', 'trim|required',['required' => 'You must provide a  %s.']);
        $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('toneperfume', 'Tone Perfume', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('topincense', 'Top Incense', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('middlenote', 'Middle Notes', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('lastnote', 'Last Notes', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('capacity', 'Capacity', 'trim|required',['required' => 'You must provide a %s.']);
        
        if ($this->form_validation->run())
        { 
            // upload image
            $ori_filename = $_FILES['image']['name'];
            $new_name = time()."".str_replace('','-',$ori_filename);
            $config=[
                'upload_path' => './uploads/imageproduct',
                'allowed_types' =>'gif|jpg|png|jpeg',
                'file_name' => $new_name,
            ];
            $this->load->library('upload', $config);
            // Kiểm tra image 
            if ( ! $this->upload->do_upload('image'))
            {       // gán lỗi vào mảng $error
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('admincommon/header');
                    $this->load->view('admincommon/navbar');
                    $this->load->view('Admin/product/create',$error);
                    $this->load->view('admincommon/footer');
            }
            else
            {
                // upload file image từ view vào product_image
                    $product_image = $this->upload->data('file_name');

                    //$this->load->view('upload_success', $product_image);
                    // Gán dữ liệu bảng product cho data_product
                    $data_product = [
                        'productid' => $this->input->post('productid'),
                        'productname' => $this->input->post('productname'),
                        'description'=> $this->input->post('description'),
                        'image' =>$product_image,
                        'price'=> $this->input->post('price'),
                        'quantity'=> $this->input->post('quantity'),
                        'toneperfume'=> $this->input->post('toneperfume'),
                        'topincense'=> $this->input->post('topincense'),
                        'middlenote'=> $this->input->post('middlenote'),
                        'lastnote'=> $this->input->post('lastnote'),
                        'capacity'=> $this->input->post('capacity'),
                        'brand_id'=> $this->input->post('brand_id'),
                        'gender'=> $this->input->post('gender')
                        
                    ];
                    $this->load->model('Admin/ProductModel');
                    $this->ProductModel->insertProduct($data_product);
                    $this->session->set_flashdata('success','Add product successfully');
                    redirect(base_url('Admin/product/list'));
            }
            
        }else{
            $this->create();
        }
    }
    public function edit($productid){
        $this->load->view('admincommon/header');
        $this->load->view('admincommon/navbar');
        // lấy dữ liệu của brand
        $this->load->model('Admin/BrandModel');
        $data['brand']  = $this->BrandModel->selectBrand();
        // lấy dữ liệu ProductModel 
        $this->load->model('Admin/ProductModel');
        $data['product']  = $this->ProductModel->selectProductByid($productid);

		$this->load->view('Admin/product/edit',$data);
        $this->load->view('admincommon/footer');
    }

    public function update($productid){
        $this->form_validation->set_rules('productname', 'Product Name', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('description', 'Description', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('price', 'Price', 'trim|required',['required' => 'You must provide a  %s.']);
        $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('toneperfume', 'Tone Perfume', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('topincense', 'Top Incense', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('middlenote', 'Middle Notes', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('lastnote', 'Last Notes', 'trim|required',['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('capacity', 'Capacity', 'trim|required',['required' => 'You must provide a %s.']);

        if ($this->form_validation->run())
        { 
            if(!empty($_FILES['image']['name']))
            {
            // upload image
                $ori_filename = $_FILES['image']['name'];
                $new_name = time()."".str_replace('','-',$ori_filename);
                $config=[
                    'upload_path' => './uploads/imageproduct',
                    'allowed_types' =>'gif|jpg|png|jpeg',
                    'file_name' => $new_name,
                ];
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('image'))
                {       // gán lỗi vào mảng $error
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admincommon/header');
                        $this->load->view('admincommon/navbar');
                        $this->load->view('Admin/product/create',$error);
                        $this->load->view('admincommon/footer');
                }
                else
                {
                    // upload file image từ view vào product_image
                        $product_image = $this->upload->data('file_name');

                        //$this->load->view('upload_success', $product_image);
                        // Gán dữ liệu bảng product cho data_product
                        $data_product = [
                            'productid' => $this->input->post('productid'),
                            'productname' => $this->input->post('productname'),
                            'description'=> $this->input->post('description'),
                            'image' =>$product_image,
                            'price'=> $this->input->post('price'),
                            'quantity'=> $this->input->post('quantity'),
                            'toneperfume'=> $this->input->post('toneperfume'),
                            'topincense'=> $this->input->post('topincense'),
                            'middlenote'=> $this->input->post('middlenote'),
                            'lastnote'=> $this->input->post('lastnote'),
                            'capacity'=> $this->input->post('capacity'),
                            'brand_id'=> $this->input->post('brand_id'),
                            'gender'=> $this->input->post('gender')
                        ];
                       
                }
            }else{
                $data_product = [
                        'productid' => $this->input->post('productid'),
                        'productname' => $this->input->post('productname'),
                        'description'=> $this->input->post('description'),
                        'price'=> $this->input->post('price'),
                        'quantity'=> $this->input->post('quantity'),
                        'toneperfume'=> $this->input->post('toneperfume'),
                        'topincense'=> $this->input->post('topincense'),
                        'middlenote'=> $this->input->post('middlenote'),
                        'lastnote'=> $this->input->post('lastnote'),
                        'capacity'=> $this->input->post('capacity'),
                        'brand_id'=> $this->input->post('brand_id'),
                        'gender'=> $this->input->post('gender')
                ];
            }
            $this->load->model('Admin/ProductModel');
            $this->ProductModel->updateProduct($productid,$data_product);
            $this->session->set_flashdata('success','Update product successfully');
            redirect(base_url('Admin/product/list'));
        }else{
            $this->edit($productid);
        }
    }
    public function delete($productid){
        $this->load->model('Admin/ProductModel');
        $this->ProductModel->deleteProduct($productid);
        $this->session->set_flashdata('success','Delete product successfully');
        redirect(base_url('Admin/product/list'));
    }
}

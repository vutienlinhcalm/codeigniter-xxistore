<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('IndexModel');
		$this->load->library('pagination');
		$this->data['brand'] = $this->IndexModel->getBrandHome();
	}
	
	public function index()
	{
		//custom config link
		$config = array();
        $config["base_url"] = base_url(). '/pagination'; 
		$config['total_rows'] = $this->IndexModel->countAllProduct(); //đếm tất cả sản phẩm //8 //hàm ceil làm tròn phân trang 
		$config["per_page"] = 9; //từng trang 9 sản phẩn
        $config["uri_segment"] = 2; //lấy số trang hiện tại
		$config['use_page_numbers'] = TRUE; //trang có số
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		//end custom config link
		$this->pagination->initialize($config); //tự động tạo trang
		$this->page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0; //current page active 
		$this->data["links"] = $this->pagination->create_links(); //tự động tạo links phân trang dựa vào trang hiện tại
		$this->data['allproduct_pagination'] = $this->IndexModel->getIndexPagination($config["per_page"], $this->page);
		//pagination
		//$this->data['product'] = $this->IndexModel->getAllProduct();
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
		$this->load->view('pages/brand',$this->data);
		$this->load->view('pages/common/footer');
	}

	public function product($productid)
	{
		
		$this->data['productdetails'] = $this->IndexModel->getProductDetails($productid);
		$this->load->view('pages/common/header',$this->data);
		$this->load->view('pages/product_detail',$this->data);
		$this->load->view('pages/common/footer');
	}


	public function cart()
	{
		$this->load->view('pages/common/header',$this->data);
		$this->load->view('pages/cart');
		$this->load->view('pages/common/footer');
	}
	public function checkout(){
		if($this->session->userdata('LoggedInCustomer') && $this->cart->contents()){
		$this->load->view('pages/common/header',$this->data);
		$this->load->view('pages/checkout');
		$this->load->view('pages/common/footer');
		}else {
			redirect(base_url().'cart');
		}
	}
	public function confirm_checkout(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required',['required' => 'You must provide a  %s.']);
        $this->form_validation->set_rules('address', 'address', 'trim|required',['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required',['required' => 'You must provide a  %s.']);
        $this->form_validation->set_rules('name', 'Full name', 'trim|required',['required' => 'You must provide a %s.']);
		
		if($this->form_validation->run()){
			$email = $this->input->post('email');
            $address = $this->input->post('address');
			$phone = $this->input->post('phone');
            $name =$this->input->post('name');
            $paymethod =$this->input->post('paymethod');

			$data_shipping = array(
				'name'=>$name,
				'email'=>$email,
				'phone'=>$phone,
				'address'=>$address,
				'method'=>$paymethod
		   );
			   $this->load->model('IndexModel');
               $result = $this->IndexModel->insertShipping($data_shipping);
			
               if($result){
				// order 
				$order_code = rand(00,999);
				$data_order = array(
					'order_code'=>$order_code,
					'ship_id'=>$result,
					'status'=> 1
			   );
			    $insert_order = $this->IndexModel->insertOders($data_order);
			   // order details
			   foreach($this->cart->contents()as $items){
				$data_order_detail = array(
					'order_code'=>$order_code,
					'product_id'=>$items['id'],
					'quantity'=> $items['qty']
			   );
			   $insert_order_detail = $this->IndexModel->insertOderDetails($data_order_detail);
			   }
                $this->session->set_flashdata('success', 'Xác nhận thanh toán thành công');
				$this->cart->destroy();
				// Gửi email
				$to_email = $email;
				$subject = 'Bạn đã đặt đơn hàng thành công';
				$message = 'Đơn hàng của bạn ở XII Store';
				$this->sendEmail($to_email,$subject,$message);
                redirect(base_url('/thanks'));
               }else{
                $this->session->set_flashdata('error', 'Xác nhận thanh toán thất bại');
                redirect(base_url('/checkout'));
               }
		}else {
			$this->checkout();
		}
	}
	public function thanks(){
		$this->load->view('pages/common/header',$this->data);
		$this->load->view('pages/thanks');
		$this->load->view('pages/common/footer');
	}
	public function sendEmail($to_mail,$subject,$message){
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_user'] = 'apolopass2001@gmail.com';
		$config['smtp_pass'] = 'ceazioisoaldebyd';//ceazioisoaldebyd
		$config['smtp_port']= 465;
		$config['charset'] = 'utf-8';

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");

		$this->email->from('apolopass2001@gmail.com', 'Your Name');
		$this->email->to($to_mail);
		// $this->email->cc('another@another-example.com');
		// $this->email->bcc('them@their-example.com');

		$this->email->subject($subject);
		$this->email->message($message);

		$this->email->send();

	}

	public function add_to_cart(){
		$productid = $this->input->post('productid');
		$quantity = $this->input->post('quantity');
		$this->data['productdetails'] = $this->IndexModel->getProductDetails($productid);
		// đặt hàng
		foreach($this->data['productdetails'] as $key => $proder){
			$cart = array(
				'id'    => $proder->productid,
				'qty'     => $quantity,
				'price'   	   => $proder->price,
				'name'    => $proder->productname,
				'options' => array('image' => $proder->image)
			);
		}
		$this->cart->insert($cart);
		redirect(base_url().'cart','refresh');
	}
	public function delete_all_cart(){
		$this->cart->destroy();
		redirect(base_url().'cart','refresh');

	}
	public function delete_item($rowid){
		$this->cart->remove($rowid);
		redirect(base_url().'cart','refresh');
	}
	public function update_cart_item(){
		$rowid = $this->input->post('rowid');
		$quantity = $this->input->post('quantity');
		foreach($this->cart->contents() as $items){
			if($items['rowid'] == $rowid){
				$data = array(
					'rowid' => $rowid,
					'qty'   => $quantity
			);
			}
		}
		$this->cart->update($data);
		redirect(base_url().'cart','refresh');
	}


	public function login()
	{
		$this->load->view('pages/common/header');
		$this->load->view('pages/login');
		$this->load->view('pages/common/footer');
	}
	public function loginCustomer(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required',['required' => 'You must provide a  %s.']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required',['required' => 'You must provide a %s.']);
        
        if ($this->form_validation->run())
        {
               $email = $this->input->post('email');
               $password = sha1($this->input->post('password'));
               $result = $this->IndexModel->checkloginCustomer($email,$password);
               if($result){
                $session_array = [
                    'customerid' => $result[0]->customerid,
                    'cusname' => $result[0]->cusname,
                    'email'=> $result[0]->email,
                ];
                
                // Tạo Session LoggedIn với đầu vào là session_array
                $this->session->set_userdata('LoggedInCustomer',$session_array);
                // Trả lỗi về cho trang Login
                $this->session->set_flashdata('success', 'Login Successfully');
                redirect(base_url('/'));
               }else{
                $this->session->set_flashdata('error', 'Wrong Email or Password');
                redirect(base_url('/login'));

               }
        }
        else
        {
                $this->login();
        }
	}


	public function logout(){
		$this->session->unset_userdata('LoggedInCustomer');
		redirect(base_url('/login'));
	}

	public function register(){
		$this->load->view('pages/common/header');
		$this->load->view('pages/register');
		$this->load->view('pages/common/footer');
	}

	public function register_Customer(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required',['required' => 'You must provide a  %s.']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required',['required' => 'You must provide a %s.']);
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required',['required' => 'You must provide a  %s.']);
        $this->form_validation->set_rules('cusname', 'Full name', 'trim|required',['required' => 'You must provide a %s.']);
		
        if ($this->form_validation->run())
        {
               $email = $this->input->post('email');
               $password = sha1($this->input->post('password'));
			   $phone = $this->input->post('phone');
               $cusname =$this->input->post('cusname');

			   $data_cus = array(
					'cusname'=>$cusname,
					'email'=>$email,
					'phone'=>$phone,
					'password'=>$password
			   );
			   
			    $this->load->model('IndexModel');
			   
            	$result = $this->IndexModel->insertCustomer($data_cus);
			   
               if($result){
                $session_array = [
                    'cusname' => $cusname,
                    'email'=> $email,
                ];
                
                // Tạo Session LoggedIn với đầu vào là session_array
                $this->session->set_userdata('LoggedInCustomer',$session_array);
                // Trả lỗi về cho trang Login
                $this->session->set_flashdata('success', 'Login Successfully');
                redirect(base_url('/'));
               }else{
                $this->session->set_flashdata('error', 'Wrong');
                $this->register();

               }
        }
        else
        {
			$this->register();

        }
	}

	public function searchProduct(){
		if(isset($_GET['keyword']) && $_GET['keyword'] != ''){
			$keyword = $_GET['keyword'];
		}
		$this->data['product'] = $this->IndexModel->getProductByKeyword($keyword);
		$this->data['productname'] = $keyword;
		$this->load->view('pages/common/header',$this->data);
		$this->load->view('pages/common/slider');
		$this->load->view('pages/searchproduct',$this->data);
		$this->load->view('pages/common/footer');
	}
	

	
}

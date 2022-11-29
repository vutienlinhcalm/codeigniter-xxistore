<?php 
    class OrderController extends CI_Controller{
        function __construct(){
            parent::__construct();
        }

        public function index(){
        
            $this->load->view('admincommon/header');
            $this->load->view('admincommon/navbar');
            // Lấy dữ liệu từ model
            $this->load->model('Admin/OrderModel');
            $data['order']  = $this->OrderModel->selectOrder();

            $this->load->view('Admin/order/list',$data);
            $this->load->view('admincommon/footer');
        }

        public function view($order_code){
            $this->load->view('admincommon/header');
            $this->load->view('admincommon/navbar');
            // Lấy dữ liệu từ model
            $this->load->model('Admin/OrderModel');
            $data['order_detail']  = $this->OrderModel->selectOrder_details($order_code);

            $this->load->view('Admin/order/view',$data);
            $this->load->view('admincommon/footer');
        }
    }
?>
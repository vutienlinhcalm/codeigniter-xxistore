<?php 
    class OrderModel extends CI_Model{
        function __construct()
        {
             parent::__construct();
        }

        public function selectOrder(){
            $query =  $this->db->select('orders.*,shipping.*')
           ->from('orders')
           ->join('shipping','orders.ship_id=shipping.shipid ')
           ->get();
           return $query->result();
        }

        public function selectOrder_details($order_code){
            $query =  $this->db->select('order_details.quantity as qty,order_details.product_id,order_details.order_code,product.*')
           ->from('order_details')
           ->join('product','order_details.product_id=product.productid')
           ->where('order_details.order_code',$order_code)
           ->get();
           return $query->result();
        }
    }
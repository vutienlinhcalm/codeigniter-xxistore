<?php 
    class IndexModel extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function checkloginCustomer($email, $password){
            $query = $this->db->where('email', $email)->where('password', $password)->get('customer');
            return $query->result();
        }
        public function insertCustomer($data_cus){
           return $this->db->insert('customer', $data_cus);  
        }

        public function insertShipping($data_shipping){
          $this->db->insert('shipping', $data_shipping);
          return $ship_id = $this->db->insert_id();
        }
        public function insertOders($data_order){
            return $this->db->insert('orders', $data_order);
        }
        public function insertOderDetails($data_order_detail){
            return $this->db->insert('order_details', $data_order_detail);
        }
        public function getBrandHome(){
            $query = $this->db->get_where('brand',['status'=>1]);
            return $query->result();
        }
        public function countAllProduct(){
            return $this->db->count_all('product');
        }
      
        // public function getAllProduct(){
        //     $query = $this->db->get_where('product',['quantity >'=>1]);
        //     return $query->result();
        // }
        public function getIndexPagination($limit,$start){
            $this->db->limit($limit,$start);
            $query = $this->db->get_where('product',['quantity >' => 1]);
            return $query->result();
        }
        public function getBrandProduct($brandid){
            $query =  $this->db->select('brand.brandname as brandname, product.*')
           ->from('product')
           ->join('brand','product.brand_id=brand.brandid')
           ->where('product.brand_id',$brandid)
           ->get();
           return $query->result();
        }

        public function getProductDetails($productid){
            $query =  $this->db->select('brand.brandname as brandname, product.*')
           ->from('product')
           ->join('brand','product.brand_id=brand.brandid')
           ->where('product.productid',$productid)
           ->get();
           return $query->result();
        }

        public function getBrandName($brandid){
            $this->db->select('brand.*');
            $this->db->from('brand');
            $this->db->limit(1);
            $this->db->where('brand.brandid',$brandid);
            $query = $this->db->get();
            $result = $query->row();
            return $brandname =  $result->brandname;
        } 
        
        public function getProductByKeyword($keyword){
            $query = $this->db->select('brand.brandname as brandname, product.*')
           ->from('product')
           ->join('brand','product.brand_id=brand.brandid')
           ->like('product.productname',$keyword)
           ->get();
           return $query->result();
        }
    }
?>
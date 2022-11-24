<?php 
    class IndexModel extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function getBrandHome(){
            $query = $this->db->get_where('brand',['status'=>1]);
            return $query->result();
        }
        public function getAllProduct(){
            $query = $this->db->get_where('product',['quantity >'=>1]);
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
    }
?>
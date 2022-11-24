<?php 
    class ProductModel extends CI_Model{
        function __construct()
        {
             parent::__construct();
        }
        public function insertProduct($data_product){
            return $this->db->insert('product',$data_product);
        }

        public function selectAllproduct(){
           $query =  $this->db->select('brand.brandname as brandname, product.*')
           ->from('product')
           ->join('brand','product.brand_id=brand.brandid')
           ->get();
           return $query->result();
        }

        public function selectProductByid($productid){
            $query = $this->db->get_where('product',['productid'=>$productid]);
            return $query->row();
        }

        public function updateProduct($productid,$data_product){
            return $this->db->update('product',$data_product,['productid'=>$productid]);
        }

        public function deleteProduct($productid){
            return $this->db->delete('product',['productid'=>$productid]);
        }
    }
?>
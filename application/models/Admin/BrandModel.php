<?php 
    class BrandModel extends CI_Model{
        function __construct()
        {
             parent::__construct();
        }
        public function insertBrand($data_brand){
            return $this->db->insert('brand',$data_brand);
        }

        public function selectBrand(){
           $query =  $this->db->get('brand');
           return $query->result();
        }

        public function selectBrandByid($brandid){
            $query = $this->db->get_where('brand',['brandid'=>$brandid]);
            return $query->row();
        }

        public function updateBrand($brandid,$data_brand){
            return $this->db->update('brand',$data_brand,['brandid'=>$brandid]);
        }

        public function deleteBrand($brandid){
            return $this->db->delete('brand',['brandid'=>$brandid]);
        }
    }
?>
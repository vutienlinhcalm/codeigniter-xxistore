<?php 
    class CustomerModel extends CI_Model{
        function __construct()
        {
             parent::__construct();
        }
        
        // public function insertBrand($data_brand){
        //     return $this->db->insert('brand',$data_brand);
        // }

        public function selectCustomer(){
           $query =  $this->db->get('customer');
           return $query->result();
        }

        public function selectCustomerByid($customerid){
            $query = $this->db->get_where('customer',['customerid'=>$customerid]);
            return $query->row();
        }

        // public function updateBrand($brandid,$data_brand){
        //     return $this->db->update('brand',$data_brand,['brandid'=>$brandid]);
        // }

        // public function deleteBrand($brandid){
        //     return $this->db->delete('brand',['brandid'=>$brandid]);
        // }
    }
?>
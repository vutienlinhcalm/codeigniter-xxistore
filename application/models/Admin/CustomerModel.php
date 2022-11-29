<?php 
    class CustomerModel extends CI_Model{
        function __construct()
        {
             parent::__construct();
        }
        
       

        public function selectCustomer(){
           $query =  $this->db->get('customer');
           return $query->result();
        }

        public function selectCustomerByid($customerid){
            $query = $this->db->get_where('customer',['customerid'=>$customerid]);
            return $query->row();
        }

       
    }
?>
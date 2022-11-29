<div class="container">
<div class="card">
  <div class="card-header">
    List Order
  </div>
  <?php
        if($this->session->flashdata('success')){
    ?>
        <div class="alert alert-success"> <?php echo $this->session->flashdata('success') ?></div>
    <?php 
        } elseif($this->session->flashdata('error')) {   
    ?>
        <div class="alert alert-danger"> <?php echo $this->session->flashdata('error') ?></div>
            
    <?php
        }
    ?>
  <div class="card-body">
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Order_code</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Status</th>
        <th scope="col">Manage</th>
        
        </tr>
    </thead>
    <!-- Biến vào là biến brand trong BranController index -->
    <?php  
      foreach($order as $key => $ord) { 
    ?>
    <tbody>
      
        <tr>
        <th scope="row"> <?php echo $key + 1 ?> </th>
        <td>  <?php echo $ord->order_code ?> </td>
        <td>  <?php echo $ord->name ?> </td>
        <td>  <?php echo $ord->phone ?> </td>
        <td>  <?php echo $ord->address ?> </td>
        <td> 
            <?php 
                if($ord->status == 1){
                    echo '<span class="text text-primary">Đang chờ xử lý</span>';
                }else if($ord->status == 2) {
                    echo '<span class="text text-success">Đã giao hàng</span>';
                }else {
                    echo '<span class="text text-danger">Đã hủy</span>';
                }
            ?> 
        </td>
        <td>  <?php  ?> </td>

        <td>
            <a href="<?php echo base_url('Admin/order/view/'.$ord->order_code) ?>"><button type="button" class="btn btn-outline-secondary">View</button></a>
        </td>
        </tr>

       <?php 
           }
       ?>

        

    </tbody>
    </table>
  </div>
</div>
</div>
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
  <a href="<?php echo base_url('Admin/order/list') ?>"><button type="button" class="btn btn-outline-secondary">List</button></a>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Order_code</th>
        <th scope="col">Product Name</th>
        <th scope="col">Product Image</th>
        <th scope="col">Product Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Subtotal</th>
        </tr>
    </thead>
    <!-- Biến vào là biến brand trong BranController index -->
    <?php  
      foreach($order_detail as $key => $ord) { 
    ?>
    <tbody>
      
        <tr>
        <th scope="row"> <?php echo $key + 1 ?> </th>
        <td>  <?php echo $ord->order_code ?> </td>
        <td>  <?php echo $ord->productname ?> </td>
        <td>  <img src="<?php  echo base_url("uploads/imageproduct/".$ord->image)  ?>" width="150" height="150">  </td>
        <td>  <?php echo number_format($ord->price),0,',','.' ?> </td>
        <td>  <?php echo $ord->qty ?> </td>
        <td> <?php echo number_format($ord->qty * $ord->price),0,',','.' ?></td>
        </tr>

       <?php 
           }
       ?>

        

    </tbody>
    </table>
  </div>
</div>
</div>
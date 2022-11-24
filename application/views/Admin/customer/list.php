<div class="container">
<div class="card">
  <div class="card-header">
    List Customer
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
        <th scope="col">Name</th>
        <th scope="col">Password</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        </tr>
    </thead>
    <!-- Biến vào là biến brand trong BranController index -->
    <?php  
      foreach($customer as $key => $cus) { 
    ?>
    <tbody>
      
        <tr>
        <th scope="row"> <?php echo $key + 1 ?> </th>
        <td>  <?php echo $cus->cusname ?> </td>
        <td>  <?php echo $cus->password ?> </td>
        <td>  <?php echo $cus->email ?> </td>
        <td>  <?php echo $cus->phone ?> </td>
        
        <td>
            <a href="<?php echo base_url('Admin/customer/view/'.$cus->customerid) ?>"><button type="button" class="btn btn-outline-secondary">View</button></a>
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
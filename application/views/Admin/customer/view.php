<div class="container">

<div class="card">
  <div class="card-header">
    View Customer Details
  </div>
  <div class="card-body">
  <a href="<?php echo base_url('Admin/customer/list') ?>"><button type="button" class="btn btn-outline-secondary">List Customer</button></a>
    <!-- chia nhỏ hình ảnh -->
  <form>  
  <!-- Hiện thị lỗi thi add sai trường -->
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
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Customer Name</label>
        <input disabled type="text" value="<?php echo $customer->cusname ?>" name="cusname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('cusname')."</span>"; ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input disabled type="text" value="<?php echo $customer->password ?>" name="password" class="form-control" id="exampleInputPassword1">
        <?php echo "<span class ='text text-danger'>". form_error('password')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input disabled type="email" name="email" value="<?php echo $customer->email ?>" class="form-control" id="exampleInputPassword1">
        <?php echo "<span class ='text text-danger'>". form_error('email')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone</label>
        <input disabled type="text" name="phone" value="<?php echo $customer->phone ?>" class="form-control" id="exampleInputPassword1">
        <?php echo "<span class ='text text-danger'>". form_error('phone')."</span>"; ?>
    </div>
    </form>
  </div>
  
</div>
    
</div>

<div class="container">
<form action="<?php echo base_url("registercustomer") ?>" method="POST">
    <h1>Đăng ký</h1>
    <!-- khi login đúng thì trả về success sai trả về error -->
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
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <?php echo "<span class ='text text-danger'>". form_error('email')."</span>"; ?>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Họ và Tên</label>
    <input type="text" name="cusname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <?php echo "<span class ='text text-danger'>". form_error('cusname')."</span>"; ?>

  </div>
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <?php echo "<span class ='text text-danger'>". form_error('phone')."</span>"; ?>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <?php echo "<span class ='text text-danger'>". form_error('password')."</span>"; ?>

  </div>
 
  <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>
</div>
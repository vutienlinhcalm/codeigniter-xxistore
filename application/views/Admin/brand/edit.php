<div class="container">

<div class="card">
  <div class="card-header">
    Edit Brand 
  </div>
  <div class="card-body">
    <!-- chia nhỏ hình ảnh -->
  <form action="<?php echo base_url('/Admin/brand/update/'.$brand->brandid) ?>" method="POST" enctype="multipart/form-data">  
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
        <label for="exampleInputEmail1" class="form-label">Brand name</label>
        <input type="text" value="<?php echo $brand->brandname ?>" name="brandname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('brandname')."</span>"; ?>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" value="<?php echo $brand->description ?>" name="description" class="form-control" id="exampleInputPassword1">
        <?php echo "<span class ='text text-danger'>". form_error('description')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
        <img src="<?php  echo base_url("uploads/imagebrand/".$brand->image)  ?>" width="150" height="150"> 
        <small> <?php if(isset($error)){echo $error;} ?> </small>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Status</label>
            <select class="form-select" name="status" aria-label="Default select example">  
            <?php 
                if( $brand->status == 1){
            ?>
                <option selected value="1">Active</option>
                <option value="0">InActive</option>
            <?php 
                }else { 
            ?>
                <option value="1">Active</option>
                <option selected value="0">InActive</option>
            <?php } ?>
            </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Brand</button>
    </form>
  </div>
  
</div>
    
</div>

<div class="container">

<div class="card">
  <div class="card-header">
    Addition New Product 
  </div>
  <div class="card-body">
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
    <!-- chia nhỏ hình ảnh -->
  <form action="<?php echo base_url('/Admin/product/store') ?>" method="POST" enctype="multipart/form-data">  
 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="productname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('productname')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="exampleInputPassword1">
        <?php echo "<span class ='text text-danger'>". form_error('description')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('price')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Quantity</label>
        <input type="text" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('quantity')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tone Perfume</label>
        <input type="text" name="toneperfume" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('toneperfume')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Top Incense</label>
        <input type="text" name="topincense" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('topincense')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Middle Notes</label>
        <input type="text" name="middlenote" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('middlenote')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Notes</label>
        <input type="text" name="lastnote" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('lastnote')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Capacity</label>
        <input type="text" name="capacity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('capacity')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
        <small> <?php if(isset($error)){echo $error;} ?> </small>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gender</label>
            <select class="form-select" name="gender" aria-label="Default select example">  
            <option value="0">Male</option>
            <option value="1">Female</option>
            <option value="2">Unisex</option>
            </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Brand</label>
            <select class="form-select" name="brand_id" aria-label="Default select example">  
            <?php 
                foreach($brand as $key => $valuebrand){
            ?>
            <option value="<?php echo $valuebrand->brandid ?>"><?php echo $valuebrand->brandname ?></option>
           
            <?php 
                }
            ?>
            </select>
    </div>

    <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
  </div>
  
</div>
    
</div>

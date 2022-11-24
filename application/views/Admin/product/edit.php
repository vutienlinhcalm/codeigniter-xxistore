<div class="container">

<div class="card">
  <div class="card-header">
    Edit Product 
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
  <form action="<?php echo base_url('/Admin/product/update/'.$product->productid) ?>" method="POST" enctype="multipart/form-data">  
 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" value="<?php echo $product->productname ?>" name="productname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('productname')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" value="<?php echo $product->description?>" name="description" class="form-control" id="exampleInputPassword1">
        <?php echo "<span class ='text text-danger'>". form_error('description')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" value="<?php echo $product->price?>" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('price')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Quantity</label>
        <input type="text" value="<?php echo $product->quantity?>" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('quantity')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tone Perfume</label>
        <input type="text" value="<?php echo $product->toneperfume?>" name="toneperfume" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('toneperfume')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Top Incense</label>
        <input type="text" value="<?php echo $product->topincense?>" name="topincense" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('topincense')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Middle Notes</label>
        <input type="text" value="<?php echo $product->middlenote?>" name="middlenote" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('middlenote')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Notes</label>
        <input type="text" value="<?php echo $product->lastnote?>" name="lastnote" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('lastnote')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Capacity</label>
        <input type="text" value="<?php echo $product->capacity?>" name="capacity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php echo "<span class ='text text-danger'>". form_error('capacity')."</span>"; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
        <img src="<?php  echo base_url("uploads/imageproduct/".$product->image)  ?>" width="150" height="150"> 
        <small> <?php if(isset($error)){echo $error;} ?> </small>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gender</label>
            <select class="form-select" name="gender" aria-label="Default select example"> 
            <?php 
                if( $product->gender == 0){
            ?>
                <option selected value="0">Male</option>
                <option value="1">Female</option>
                <option value="2">Unisex</option>
            <?php 
                }else if($product->gender == 1) { 
            ?>
                <option value="0">Male</option>
                <option selected value="1">Female</option>
                <option value="2">Unisex</option>
            <?php 
            } else { 
            ?> 
                <option value="0">Male</option>
                <option value="1">Female</option>
                <option selected value="2">Unisex</option>
            <?php
             }
            ?>
            </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Brand</label>
            <select class="form-select" name="brand_id" aria-label="Default select example">  
            <?php 
                foreach($brand as $key => $valuebrand){
            ?>
            <option <?php echo $valuebrand->brandid == $product->brand_id ? 'selected' : '' ?> value="<?php echo $valuebrand->brandid ?>"><?php echo $valuebrand->brandname ?></option>
           
            <?php 
                }
            ?>
            </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
  </div>
  
</div>
    
</div>

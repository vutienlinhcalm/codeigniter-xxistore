<div class="container">
<div class="card">
  <div class="card-header">
    List Product
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
    <a href="<?php echo base_url('Admin/product/create') ?>" class="btn btn-outline-success">Add New Product</a>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Tone Perfume</th>
        <th scope="col">Top Incense</th>
        <th scope="col">Middle Notes</th>
        <th scope="col">Last Notes</th>
        <th scope="col">Capacity</th>
        <th scope="col">Brand</th>
        <th scope="col">Gender</th>
        <th scope="col">Image</th>


        </tr>
    </thead>
    <!-- Biến vào là biến brand trong BranController index -->
    <?php  
      foreach($product as $key => $pro) { 
    ?>
    <tbody>
      
        <tr>
        <th scope="row"> <?php echo $key + 1 ?> </th>
        <td>  <?php echo $pro->productname ?> </td>
        <td>  <?php echo $pro->description ?> </td>
        <td>  <?php echo $pro->price ?> </td>
        <td>  <?php echo $pro->quantity ?> </td>
        <td>  <?php echo $pro->toneperfume ?> </td>
        <td>  <?php echo $pro->topincense ?> </td>
        <td>  <?php echo $pro->middlenote ?> </td>
        <td>  <?php echo $pro->lastnote ?> </td>
        <td>  <?php echo $pro->capacity ?> </td>
        <td>  <?php echo $pro->brandname ?> </td>
        <td>  
          <?php 
                if( $pro->gender == 0){
                  echo "Male";
                } else if( $pro->gender == 1){
                  echo "Female";
                }else{
                  echo "Unisex";
                } ?>
          </td>
        <td> 
           <img src="<?php  echo base_url("uploads/imageproduct/".$pro->image)  ?>" width="150" height="150"> 
           <!-- <img src="../../../../uploads/imagebrand/<?php echo $pro->image ?>" width="150" height="150">  -->
        </td>
        
        <td>
            <a href="<?php echo base_url('Admin/product/edit/'.$pro->productid) ?>"><button type="button" class="btn btn-outline-secondary">Update</button></a>
            <a onclick="return confirm('Are you sure delete') " href="<?php echo base_url('Admin/product/delete/'.$pro->productid) ?>"><button type="button" class="btn btn-outline-danger">Delete</button></a> 
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
<div class="container">
<div class="card">
  <div class="card-header">
    List Brand
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
    <a href="<?php echo base_url('Admin/brand/create') ?>" class="btn btn-outline-success">Add New Brand</a>
    <table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Status</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <!-- Biến vào là biến brand trong BranController index -->
    <?php  
      foreach($brand as $key => $bra) { 
    ?>
    <tbody>
      
        <tr>
        <th scope="row"> <?php echo $key + 1 ?> </th>
        <td>  <?php echo $bra->brandname ?> </td>
        <td>  <?php echo $bra->description ?> </td>
        <td> 
           <img src="<?php  echo base_url("uploads/imagebrand/".$bra->image)  ?>" width="150" height="150"> 
           <!-- <img src="../../../../uploads/imagebrand/<?php echo $bra->image ?>" width="150" height="150">  -->
        </td>
        <td>  
          <?php 
                if( $bra->status == 1){
                  echo "Active";
                } else{
                  echo "InActive";
                } ?>
          </td>
        <td>
            <a href="<?php echo base_url('Admin/brand/edit/'.$bra->brandid) ?>"><button type="button" class="btn btn-outline-secondary">Update</button></a>
            <a onclick="return confirm('Are you sure delete') " href="<?php echo base_url('Admin/brand/delete/'.$bra->brandid) ?>"><button type="button" class="btn btn-outline-danger">Delete</button></a> 
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
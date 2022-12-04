
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <!-- Lấy user name đăng nhập từ trang LoginController -->
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav">
        <li class="nav-item navbar_width ">
          <a class="nav-link navbar_text "  href="<?php echo base_url('Admin/Dashboard') ?>">
          <?php echo $this->session->userdata('LoggedIn')['adminname']; ?>
          </a>
        </li>

        <li class="nav-item position-relative navbar_width navbar_items">
          <a class="nav-link navbar_text "  href="#">
            Brand
          </a>
          <ul class="position-absolute background_navbar navbar_width navbar_item">
            <li class="background_navbar"><a class="nav-link navbar_text_child " href="<?php echo base_url('Admin/brand/create') ?>">Add Brand</a></li>
            <hr/>
            <li class="background_navbar"><a class="nav-link navbar_text_child " href="<?php echo base_url('Admin/brand/list') ?>">List Brand</a></li>
          </ul>
        </li>

        <li class="nav-item position-relative navbar_width navbar_items ">
          <a class="nav-link navbar_text"  href="#" >
            Product
          </a>
          <ul class="position-absolute navbar_width background_navbar navbar_item">
            <li class=""><a class="nav-link navbar_text_child " href="<?php echo base_url('Admin/product/create') ?>">Add Product</a></li>
            <hr/>
            <li class=""><a class="nav-link navbar_text_child " href="<?php echo base_url('Admin/product/list') ?>">List Product</a></li>
          </ul>
        </li>
        
        <li class="nav-item navbar_width ">
          <a class="nav-link navbar_text  "  href="<?php echo base_url('Admin/order/list') ?>">
            Order
          </a>
        </li>

        <li class="nav-item navbar_width">
          <a class="nav-link navbar_text " href="<?php echo base_url('Admin/customer/list') ?>">
            Customer
          </a>
        </li>
      </ul>
      
    </div>
    <div>
        <div>
          <a class="nav-link navbar_text logout" href="<?php echo base_url('logout') ?>">Logout</a>
        </div>
    </div>
  </div>
</nav>
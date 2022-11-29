
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <!-- Lấy user name đăng nhập từ trang LoginController -->
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size: 24px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $this->session->userdata('LoggedIn')['adminname']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('logout') ?>">Logout</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size: 24px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Brand
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('Admin/brand/create') ?>">Add Brand</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Admin/brand/list') ?>">List Brand</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size: 24px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('Admin/product/create') ?>">Add Product</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Admin/product/list') ?>">List Product</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size: 24px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Order
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('Admin/order/list') ?>">List Order</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="font-size: 24px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customer
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('Admin/customer/list') ?>">List Customer</a></li>
          </ul>
        </li>
    
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
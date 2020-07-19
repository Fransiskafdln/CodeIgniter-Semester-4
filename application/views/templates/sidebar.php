<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-0">
          <i class="fa fa-building" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Konsultan Arsitek<sup>#1</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href= "<?php echo base_url('Dashboard/index') ?>">
          <i class="fas fa-fw fa-home-alt"></i>
          <span>HOME</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        KATEGORI
      </div>



      <!-- Nav Item - Tables -->
      <li class="nav-item">
         <a class="nav-link" href= "<?php echo base_url('Dashboard/index') ?>">
          <i class="fas fa-fw fa-building"></i>
          <span>FREE DESIGN</span></a>
      </li>

  <li class="nav-item">
        <a class="nav-link" href= "<?php echo base_url('Dashboard/hubungi_arsitek') ?>">
          <i class="fas fa-fw fa-comments"></i>
          <span>KONSULTASI</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="navbar">
              <ul class="navnavbar-nav navbar-right">
              <li>
                <?php 
                  $arsitek = 'konsultasi :' .$this->cart->total_items() . 'konsultan'
                 ?>
                 <?php echo anchor('dashboard/detail_konsultan', $arsitek )
                  ?>

              </li>
            </ul>
            </div>

<div class="topbar-divider d-none d-sm-block"></div>
<ul cass="na navbar-nav navbar-right">
  <?php  if($this->session->userdata('username')){ ?>
  <li><div> Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
  <li><?php echo anchor('auth/logout'), 'Logout'?></li>
<?php } else { ?>
<li> <?php echo anchor('auth/login' , 'Login') ?></li>

<?php } ?>
</ul>


           
          </ul>

        </nav>
        <!-- End of Topbar -->
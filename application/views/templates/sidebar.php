<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(to right, #001F3F, #5200FF);">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url() ?>assets/logo1.png" alt="" width="70">
        </div>
        <div class="sidebar-brand-text mx-3">Ticket Mania</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>">
          <i class="fa-solid fa-film"></i>
          <span>Tayang Saat Ini</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>">
          <i class="fa-solid fa-forward"></i>
          <span>Akan Datang</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>kategori/review">
          <!-- review icon -->
          <i class="fa-solid fa-star"></i>
          <span>Review dan Rating</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>kategori/reward">
          <!-- promotion icon -->
          <i class="fa-solid fa-rectangle-ad"></i>
          <span>Reward dan Promo</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>kategori/lokasi">
          <!-- location tag icon -->
          <i class="fa fa-map-marker-alt"></i>
          <span>Lokasi</span></a>
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
      <div id="content" style="background: linear-gradient(to right, #000000, #333333);">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: linear-gradient(to right, #007BFF, #000000);">

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
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <?php
                  $keranjang = '<i class="fas fa-shopping-cart"></i> ' . $this->cart->total_items() . ' items'
                  ?>
                  <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                </li>
              </ul>

              <div class="topbar-divider d-none d-sm-block"></div>

              <ul class="na navbar-nav navbar-right">
                <?php if ($this->session->userdata('username')) { ?>
                  <li>
                    <div>Halo, <?php echo $this->session->userdata('username') ?>!</div>
                  </li>
                  <li class="ml-3"><?php echo anchor('auth/logout', '<i class="fas fa-sign-out-alt"></i> Keluar'); ?></li>
                <?php } else { ?>
                  <li><?php echo anchor('auth/login', '<i class="fas fa-sign-in-alt"></i> Masuk'); ?></li>
                <?php } ?>
              </ul>
            </div>
          </ul>
        </nav>
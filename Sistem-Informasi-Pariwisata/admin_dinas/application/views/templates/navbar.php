<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">Admin </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('index.php/Admin/profile/'); ?>">Profile</a></li>
              <li><a href="<?php echo base_url('index.php/LoginAdministrator/logout'); ?>">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="<?php if($active=="dashboard"){ echo "active"; }  ?>"><a href="<?= base_url('admin_dinas/index.php/Admin/') ?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li class="<?php if($active=="wisata"){ echo "active"; }  ?>"><a href="<?= base_url('admin_dinas/index.php/Admin/list_wisata/') ?>"><i class="icon-list-alt"></i><span>Wisata</span> </a> </li>
        <li class="<?php if($active=="events"){ echo "active"; }  ?>"><a href="<?= base_url('admin_dinas/index.php/Admin/list_events/') ?>"><i class="icon-calendar"></i><span>Events</span> </a></li>
        <li class="<?php if($active=="pasar"){ echo "active"; }  ?>"><a href="<?= base_url('admin_dinas/index.php/Admin/list_pasar/') ?>"><i class="icon-shopping-cart"></i><span>Pasar</span> </a> </li>
        <li class="<?php if($active=="akomodasi"){ echo "active"; }  ?>"><a href="<?= base_url('admin_dinas/index.php/Admin/list_akomodasi/') ?>"><i class="icon-building"></i><span>Akomodasi</span> </a> </li>
        <li class="<?php if($active=="dropdown"){ echo "active "; }  ?>dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?= base_url('admin_dinas/index.php/Admin/input_wisata/') ?>">Input Wisata</a></li>
            <li><a href="<?= base_url('admin_dinas/index.php/Admin/input_events/') ?>">Input Event</a></li>
            <li><a href="<?= base_url('admin_dinas/index.php/Admin/input_pasar/') ?>">Input Pasar</a></li>
            <li><a href="<?= base_url('admin_dinas/index.php/Admin/input_jns_akomodasi/') ?>">Input Jenis Akomodasi</a></li>
            <li><a href="<?= base_url('admin_dinas/index.php/Admin/input_akomodasi/') ?>">Input Akomodasi</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
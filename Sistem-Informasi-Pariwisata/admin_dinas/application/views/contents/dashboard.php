<div class="main">
  <div class="main-inner">
    <div class="container">
      <h1 style="text-align:center">SELAMAT DATANG ADMIN</h1>
      <br>
      <br>
      <h1>Panel Admin</h1>
      <br>
      <div class="row">
        <!-- /span6 -->
        <div class="span12">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> 
                <a href="<?= base_url('admin_dinas/index.php/Admin/list_wisata') ?>" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">List Wisata</span> </a>
                <a href="<?= base_url('admin_dinas/index.php/Admin/list_events') ?>" class="shortcut"><i class="shortcut-icon icon-calendar"></i><span class="shortcut-label">List Event</span> </a>
                <a href="<?= base_url('admin_dinas/index.php/Admin/list_pasar') ?>" class="shortcut"><i class="shortcut-icon icon-shopping-cart"></i> <span class="shortcut-label">List Pasar</span> </a>
                <a href="<?= base_url('admin_dinas/index.php/Admin/list_akomodasi') ?>" class="shortcut"><i class="shortcut-icon icon-building"></i><span class="shortcut-label">List Akomodasi</span> </a>
                <a href="<?= base_url('admin_dinas/index.php/Admin/input_wisata') ?>" class="shortcut"><i class="icon-plus"></i><i class="shortcut-icon icon-list-alt"></i><span  class="shortcut-label">Input Wisata</span> </a>
                <a href="<?= base_url('admin_dinas/index.php/Admin/input_events') ?>" class="shortcut"><i class="icon-plus"></i><i class="shortcut-icon icon-calendar"></i><span class="shortcut-label">Input Event</span> </a>
                <a href="<?= base_url('admin_dinas/index.php/Admin/input_pasar') ?>" class="shortcut"><i class="icon-plus"></i><i class="shortcut-icon icon-shopping-cart"></i> <span class="shortcut-label">Input Pasar</span> </a>
                <a href="<?= base_url('admin_dinas/index.php/Admin/input_akomodasi') ?>" class="shortcut"><i class="icon-plus"></i><i class="shortcut-icon icon-building"></i><span class="shortcut-label">Input Akomodasi</span> </a> 
                <!-- /shortcuts --> 
              </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Saran</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <ul class="news-items">
              <?php
                foreach($data as $row){
                  $input=$row->date;
                  $date=date("Y-M-d",strtotime($input));
                  $date = explode('-', $date);
              ?>
                <li>
                  
                  <div class="news-item-date"> <span class="news-item-day"><?php echo $date[2]; ?></span> <span class="news-item-month"><?php echo $date[1]; ?></span> </div>
                  <div class="news-item-detail"> <?php echo $row->nama; ?> [<?php echo $row->email; ?>]
                    <p class="news-item-preview"> <?php echo $row->saran; ?> </p>
                  </div>
                  
                </li>
                <?php } ?>
              </ul>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
      
      <!-- /container --> 
    </div>
  </div>
    <!-- /main-inner --> 
</div>
<div class="main">
	<div class="main-inner">
	    <div class="container">
	        <div class="row">
	      	    <div class="span12">
                    <div class="widget ">
                        <div class="widget-header">
                        <i class="icon-list-alt"></i>
                            <h3>Wisata</h3>
                            <button class="btn btn-invert"><a href="<?= base_url('admin_dinas/index.php/Admin/input_wisata') ?>">Input Wisata</a></button>
                        </div> <!-- /widget-header -->
                        <div class="widget-content">        
                              <div class="widget widget-table action-table">
                                    <div class="widget-header"> <i class="icon-th-list"></i>
                                      <h3>Daftar</h3>
                                    </div>
                                    <!-- /widget-header -->
                                    <div class="widget-content">
                                      <table class="table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Nama Wisata</th>
                                            <th>Jenis Wisata</th>
                                            <th>Lokasi</th>
                                            <th>Aktivtas</th>
                                            <th>Foto</th>
                                            <th>Edit </th>
                                          </tr>
                                        </thead>
                                        <?php 
                                          $no=1;
                                          foreach($data as $row){
                                        ?>
                                        <tbody>
                                          <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nm_wst; ?></td>
                                            <td><?php echo $row->jns_wst; ?></td>
                                            <td><?php echo $row->lokasi; ?></td>
                                            <td><?php echo $row->aktivitas; ?></td>
                                            <td style="text-align: center"><img style="height: 50px; width: 100px;" src="<?= base_url('./upload/wisata/'); echo $row->foto; ?>" alt=""></td>
                                            <td style="text-align: center">
                                            <a href="<?= base_url('admin_dinas/index.php/Admin/detail_wisata/'); echo $row->id_dwt; ?>" class="btn btn-small btn btn-info" title="Detail"><i class="btn-icon-only icon-check"> </i></a>
                                            <a href="<?= base_url('admin_dinas/index.php/Admin/update_wisata/'); echo $row->id_dwt; ?>" class="btn btn-small btn-success" title="Edit"><i class="btn-icon-only icon-edit"> </i></a>
                                            <a href="<?= base_url('admin_dinas/index.php/Admin/delete_wisata/'); echo $row->id_dwt; ?>" class="btn btn-danger btn-small" title="Delete"><i class="btn-icon-only icon-remove"> </i></a>
                                          </td>
                                          </tr>
                                        </tbody>
                                        <?php } ?>
                                      </table>
                                    </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

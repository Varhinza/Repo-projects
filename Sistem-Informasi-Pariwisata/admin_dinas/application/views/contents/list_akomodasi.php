<div class="main">
	<div class="main-inner">
	    <div class="container">
	        <div class="row">
	      	    <div class="span12">
                    <div class="widget ">
                        <div class="widget-header">
                          <i class="icon-building"></i>
                            <h3>Akomodasi</h3>
                            <button class="btn btn-invert"><a href="<?= base_url('admin_dinas/index.php/Admin/input_akomodasi') ?>">Input</a></button>
                            <button class="btn btn-invert"><a href="<?= base_url('admin_dinas/index.php/Admin/list_jns_akomodasi') ?>">Jenis Akomodasi</a></button>
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
                                            <th>Nama Akomodasi</th>
                                            <th>Jenis Akomodasi</th>
                                            <th>Lokasi</th>
                                            <th>kontak</th>
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
                                            <td><?php echo $row->nm_ako; ?></td>
                                            <td><?php echo $row->jns_ako; ?></td>
                                            <td><?php echo $row->lokasi; ?></td>
                                            <td><?php echo $row->kontak; ?></td>
                                            <td style="text-align: center"><img style="height: 50px; width: 100px;" src="<?= base_url('./upload/akomodasi/'); echo $row->foto; ?>" alt=""></td>
                                            <td style="text-align: center">
                                              <a href="<?= base_url('admin_dinas/index.php/Admin/detail_akomodasi/'); echo $row->id_ako; ?>" class="btn btn-small btn btn-info" title="Detail"><i class="btn-icon-only icon-check"> </i></a>
                                              <a href="<?= base_url('admin_dinas/index.php/Admin/update_akomodasi/'); echo $row->id_ako; ?>" class="btn btn-small btn-success" title="Edit"><i class="btn-icon-only icon-edit"> </i></a>
                                              <a href="<?= base_url('admin_dinas/index.php/Admin/delete_pasar/'); echo $row->id_ako; ?>" class="btn btn-danger btn-small" title="Delete"><i class="btn-icon-only icon-remove"> </i></a></td>
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
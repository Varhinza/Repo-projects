<div class="main">
	<div class="main-inner">
	    <div class="container">
	        <div class="row">
	      	    <div class="span12">
                    <div class="widget ">
                        <div class="widget-header">
                        <i class="icon-building"></i>
                          <h3>Jenis Akomodasi</h3>
                            <button class="btn btn-invert"><a href="<?= base_url('admin_dinas/index.php/Admin/input_jns_akomodasi') ?>">Input</a></button>
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
                                            <th>Jenis Akomodasi</th>
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
                                            <td><?php echo $row->jns_ako; ?></td>
                                            <td class="td-actions">
                                              <a href="<?= base_url('admin_dinas/index.php/Admin/update_jns_akomodasi/'); echo $row->id_jns_ako; ?>" class="btn btn-small btn-success" title="Edit"><i class="btn-icon-only icon-pencil "> </i></a>
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
     
                          
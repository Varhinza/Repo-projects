<div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Daftar Pasar</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pasar</th>
                    <th>Jenis Pasar</th>
                    <th>Lokasi</th>
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
                    <td><?php echo $row->nm_pas; ?></td>
                    <td><?php echo $row->jns_pas; ?></td>
                    <td><?php echo $row->lokasi; ?></td>
                    <td><img style="height: 50px; width: 100px;" src="<?= base_url('./upload/'); echo $row->foto; ?>" alt=""></td>
                    <td class="td-actions"><a href="<?= base_url('index.php/admin/update_pasar/'); echo $row->id_pas; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-pencil "> </i></a>
                    <a href="<?= base_url('index.php/admin/delete_pasar/'); echo $row->id_pas; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                </tbody>
                <?php } ?>
              </table>
              <br>
              <button class="btn btn-invert"><a href="<?= base_url('index.php/admin/input_pasar') ?>">Input Pasar</a></button>
            </div>
<div class="main">
	<div class="main-inner">
	    <div class="container">
	        <div class="row">
	      	    <div class="span12">
                    <div class="widget ">
                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3>Your Account</h3>
                        </div> <!-- /widget-header -->
                        <div class="widget-content">
                        <form id="edit-profile" class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                            <fieldset>
                                <?php 
                                    foreach($data as $row){
                                ?>
                                <input type="hidden" name="id_ako" value="<?php echo $row->id_ako; ?>">
                                <div class="control-group">	
                                    <label class="control-label" for="namaAkomodasi">Nama Akomodasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="nm_ako" id="namaAkomodasi" value="<?php echo $row->nm_ako ?>" readonly>
                                    </div>
                                </div>
                                <div class="control-group">											
                                    <label class="control-label" for="radiobtns">Jenis Akomodasi</label>
                                    <div class="controls">
                                        <select  name="jns_ako" id="" disabled="true">
                                        <?php foreach ($data1 as $row1) { ?>
                                        <option value="<?php echo $row1->id_jns_ako ?>" <?php if ($row1->id_jns_ako  == $row->id_jns_ako){ echo "selected='selected'"; } ?> ><?php echo $row1->jns_ako ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>			
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="lokasi">Lokasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="lokasi" id="lokasi" value="<?php echo $row->lokasi ?>" readonly>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="kontak">kontak</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="kontak" id="kontak" value="<?php echo $row->kontak ?>" readonly>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="foto">Foto</label>
                                    <div class="controls">
                                        <img style="height: 100px; width: 200px;" src="<?= base_url('./upload/akomodasi/'); echo $row->foto; ?>" alt="">
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="map">Marker Map</label>
                                    <div class="controls">
                                        <a href="<?php echo $row->map; ?>" class="btn btn-primary">Maps</a>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="deskripsi">Deskripsi</label>
                                    <div class="controls">
                                        <textarea class="span6" name="deskripsi" id="" cols="30" rows="30" readonly><?php echo $row->deskripsi; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <a href="<?= base_url('admin_dinas/index.php/Admin/update_akmodasi/'); echo $row->id_ako; ?>" class="btn btn-small btn-success">Update</a>
                                </div>
                                <?php 
                                    }
                                ?>
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


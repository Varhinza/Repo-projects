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
                                <input type="hidden" name="id_dwt" value="<?php echo $row->id_dwt; ?>">
                                <div class="control-group">	
                                    <label class="control-label" for="namaWisata">Nama Wisata</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="nm_wst" id="namaWisata" value="<?php echo $row->nm_wst; ?>" readonly>
                                    </div>
                                </div>
                                <div class="control-group">											
                                    <label class="control-label" for="radiobtns">Jenis Wisata</label>
                                    <div class="controls">
                                        <select  name="jns_wst" id="" disabled="true">
                                            <option <?php if( $row->jns_wst =='Alam'){echo "selected='selected'"; } ?>  value="Alam">Alam</option>
                                            <option <?php if( $row->jns_wst =='Buatan'){echo "selected='selected'"; } ?> value="Buatan">Buatan</option>
                                            <option <?php if( $row->jns_wst =='Seni'){echo "selected='selected'"; } ?> value="Seni">Seni</option>
                                        </select>
                                    </div>			
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="lokasi">Lokasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="lokasi" id="lokasi" value="<?php echo $row->lokasi; ?>" readonly>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="aktivitas">Aktivitas</label>
                                    <div class="controls">
                                        <textarea class="span6" name="aktivitas" id="" cols="30" rows="10" readonly><?php echo $row->aktivitas; ?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="foto">Foto</label>
                                    <div class="controls">
                                        <img style="height: 100px; width: 200px;" src="<?= base_url('./upload/wisata/'); echo $row->foto; ?>" alt="">
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="map">Marker Map</label>
                                    <div class="controls">
                                        <a href="<?php echo $row->map; ?>" class="btn btn-primary" target="_blank">Maps</a>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="deskripsi">Deskripsi</label>
                                    <div class="controls">
                                        <textarea class="span6" name="deskripsi" id="" cols="30" rows="30" readonly><?php echo $row->deskripsi; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <a href="<?= base_url('admin_dinas/index.php/Admin/update_wisata/'); echo $row->id_dwt; ?>" class="btn btn-small btn-success">Update</a>
                                </div>
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


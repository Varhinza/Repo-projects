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
                        <?= $this->session->flashdata('error') ?>
                        <form id="edit-profile" class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                            <fieldset>
                                <?php 
                                    foreach($data as $row){
                                ?>
                                <input type="hidden" name="id_eve" value="<?php echo $row->id_eve; ?>">
                                <div class="control-group">	
                                    <label class="control-label" for="namaEvents">Nama Event</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="nm_eve" id="namaEvents" value="<?php echo $row->nm_eve; ?>">
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="lokasi">Lokasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="lokasi" id="lokasi" value="<?php echo $row->lokasi; ?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="lokasi">Date</label>
                                    <div class="controls">
                                        <input id="datepicker" width="276" name="date" value="<?php echo $row->date; ?>"/>
                                    </div>
                                </div>  
                                <div class="control-group">	
                                    <label class="control-label" for="kontak">Kontak</label>
                                    <div class="controls">
                                        <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="span6" name="kontak" id="kontak" value="<?php echo $row->kontak; ?>">
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="deskripsi">Deskripsi</label>
                                    <div class="controls">
                                        <textarea class="span6" name="deskripsi" id="" cols="30" rows="10"><?php echo $row->deskripsi; ?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="foto">Foto</label>
                                    <div class="controls">
                                    <input type="hidden" name="old_image" value="<?php echo $row->foto; ?>">
                                        <input type="file" class="btn btn-invert" name="foto" id="foto" value=""> <p>Max 2MB</p>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="map">Marker Map</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="map" id="map" value="<?php echo $row->map; ?>"> <a href="<?= base_url('admin_dinas/index.php/Admin/help') ?>" class="btn btn-small btn btn-info" title="Help" target="_blank"><i class="btn-icon-only icon-question"></i></a>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input class="btn btn-primary" type="submit" value="submit">
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
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

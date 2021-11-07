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
                                <input type="hidden" name="id_eve" value="<?php echo $row->id_eve; ?>">
                                <div class="control-group">	
                                    <label class="control-label" for="namaEvents">Nama Event</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="nm_eve" id="namaEvents" value="<?php echo $row->nm_eve; ?>" readonly>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="lokasi">Lokasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="lokasi" id="lokasi" value="<?php echo $row->lokasi; ?>" readonly>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="lokasi">Date</label>
                                    <div class="controls">
                                        <input id="datepicker" width="276" name="date" value="<?php echo $row->date; ?>"readonly/>
                                    </div>
                                </div>  
                                <div class="control-group">	
                                    <label class="control-label" for="kontak">Kontak</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="kontak" id="kontak" value="<?php echo $row->kontak; ?>" readonly>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="deskripsi">Deskripsi</label>
                                    <div class="controls">
                                        <textarea class="span6" name="deskripsi" id="" cols="30" rows="10" readonly><?php echo $row->deskripsi; ?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="foto">Foto</label>
                                    <div class="controls">
                                        <img style="height: 100px; width: 200px;" src="<?= base_url('./upload/events/'); echo $row->foto; ?>" alt="">
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="map">Marker Map</label>
                                    <div class="controls">
                                        <a href="<?php echo $row->map; ?>" class="btn btn-primary">Maps</a>
                                    </div>
                                </div>
                                <div class="form-actions">
                                <a href="<?= base_url('admin_dinas/index.php/Admin/update_events/'); echo $row->id_eve; ?>" class="btn btn-small btn-success">Update</a>
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


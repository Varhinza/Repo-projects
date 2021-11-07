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
                                <input type="hidden" name="id_ako" value="<?php echo $row->id_ako; ?>">
                                <div class="control-group">	
                                    <label class="control-label" for="namaAkomodasi">Nama Akomodasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="nm_ako" id="namaAkomodasi" value="<?php echo $row->nm_ako ?>">
                                    </div>
                                </div>
                                <div class="control-group">											
                                    <label class="control-label" for="radiobtns">Jenis Akomodasi</label>
                                    <div class="controls">
                                        <select  name="jns_ako" id="">
                                        <?php foreach ($data1 as $row1) { ?>
                                        <option value="<?php echo $row1->id_jns_ako ?>" <?php if ($row1->id_jns_ako  == $row->id_jns_ako){ echo "selected='selected'"; } ?> ><?php echo $row1->jns_ako ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>			
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="lokasi">Lokasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="lokasi" id="lokasi" value="<?php echo $row->lokasi ?>">
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="kontak">kontak</label>
                                    <div class="controls">
                                        <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" class="span6" name="kontak" id="kontak" value="<?php echo $row->kontak ?>">
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
                                <div class="control-group">	
                                    <label class="control-label" for="deskripsi">Deskripsi</label>
                                    <div class="controls">
                                        <textarea class="span6" name="deskripsi" id="" cols="30" rows="30"><?php echo $row->deskripsi; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input class="btn btn-primary" type="submit" value="submit">
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


<div class="main">
	<div class="main-inner">
	    <div class="container">
	        <div class="row">
	      	    <div class="span12">
                    <div class="widget ">
                        <div class="widget-header">
                            <i class="icon-list-alt"></i>
                            <h3>Input Wisata</h3>
                        </div> <!-- /widget-header -->
                        <div class="widget-content">
                        <?= $this->session->flashdata('error') ?>
                        <form id="edit-profile" class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                            <fieldset>
                                <input type="hidden" name="id_dwt" value="0">
                                <div class="control-group">	
                                    <label class="control-label" for="namaWisata">Nama Wisata</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="nm_wst" id="namaWisata" value="">
                                    </div>
                                </div>
                                <div class="control-group">											
                                    <label class="control-label" for="radiobtns">Jenis Wisata</label>
                                    <div class="controls">
                                        <select  name="jns_wst" id="">
                                            <option value="Alam">Alam</option>
                                            <option value="Buatan">Buatan</option>
                                            <option value="Seni">Seni</option>
                                        </select>
                                    </div>			
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="lokasi">Lokasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="lokasi" id="lokasi" value="">
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="aktivitas">Aktivitas</label>
                                    <div class="controls">
                                        <textarea class="span6" name="aktivitas" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="foto">Foto</label>
                                    <div class="controls">
                                        <input type="file" class="btn btn-invert" name="foto" id="foto" value=""> <p>Max 2MB</p>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="map">Marker Map</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="map" id="map" value=""> <a href="<?= base_url('admin_dinas/index.php/Admin/help') ?>" class="btn btn-small btn btn-info" title="Help" target="_blank"><i class="btn-icon-only icon-question"></i></a>
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="deskripsi">Deskripsi</label>
                                    <div class="controls">
                                        <textarea class="span6" name="deskripsi" id="" cols="30" rows="30"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input class="btn btn-primary" type="submit" value="submit">
                                </div>
                                </div> 
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


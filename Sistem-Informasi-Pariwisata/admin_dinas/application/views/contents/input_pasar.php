<div class="main">
	<div class="main-inner">
	    <div class="container">
	        <div class="row">
	      	    <div class="span12">
                    <div class="widget ">
                        <div class="widget-header">
                            <i class="icon-shopping-cart"></i>
                            <h3>Input Pasar</h3>
                        </div> <!-- /widget-header -->
                        <div class="widget-content">
                        <?= $this->session->flashdata('error') ?>
                        <form id="edit-profile" class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                            <fieldset>
                                <input type="hidden" name="id_pas" value="0">
                                <div class="control-group">	
                                    <label class="control-label" for="namaPasar">Nama Pasar</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="nm_pas" id="namaPasar" value="">
                                    </div>
                                </div>
                                <div class="control-group">											
                                    <label class="control-label" for="radiobtns">Jenis Pasar</label>
                                    <div class="controls">
                                        <select  name="jns_pas" id="">
                                            <option value="Tradisional">Tradisional</option>
                                            <option value="Seni">Seni</option>
                                            <option value="Swalayan">Swalayan</option>
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
                        <br>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
                                <input type="hidden" name="id_pas" value="<?php echo $row->id_pas; ?>">
                                <div class="control-group">	
                                    <label class="control-label" for="namaWisata">Nama Pasar</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="nm_pas" id="namaPasar" value="<?php echo $row->nm_pas; ?>">
                                    </div>
                                </div>
                                <div class="control-group">											
                                    <label class="control-label" for="radiobtns">Jenis Wisata</label>
                                    <div class="controls">
                                        <select  name="jns_pas" id="">
                                            <option <?php if( $row->jns_pas =='Tradisional'){echo "selected='selected'"; } ?>  value="Tradisional">Tradisional</option>
                                            <option <?php if( $row->jns_pas =='Seni'){echo "selected='selected'"; } ?> value="Seni">Seni</option>
                                            <option <?php if( $row->jns_pas =='Swalayan'){echo "selected='selected'"; } ?> value="Swalayan">Swalayan</option>
                                        </select>
                                    </div>			
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="lokasi">Lokasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="lokasi" id="lokasi" value="<?php echo $row->lokasi; ?>">
                                    </div>
                                </div>
                                <div class="control-group">	
                                    <label class="control-label" for="foto">Foto</label>
                                    <div class="controls">
                                    <input type="hidden" name="old_image" value="<?php echo $row->foto; ?>">
                                    <input type="file" class="btn btn-invert" name="foto" id="foto" value="<?php echo $row->foto; ?>">
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


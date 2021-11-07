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
                                <input type="hidden" name="id_jns_ako" value="<?php echo $row->id_jns_ako; ?>">
                                <div class="control-group">	
                                    <label class="control-label" for="jenisAkomodasi">Jenis Akomodasi</label>
                                    <div class="controls">
                                        <input type="text" class="span6" name="jns_ako" id="jenisAkomodasi" value="<?php echo $row->jns_ako; ?>">
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


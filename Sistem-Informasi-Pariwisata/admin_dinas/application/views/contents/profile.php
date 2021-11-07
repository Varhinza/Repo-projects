<div class="main">
	<div class="main-inner">
	    <div class="container">
	        <div class="row">
	      	    <div class="span12">
                    <div class="widget ">
                        <div class="widget-header">
                            <i class="icon-list-alt"></i>
                            <h3>profile</h3>
                        </div> <!-- /widget-header -->
                        <div class="widget-content">
                        <form id="edit-profile" class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                            <fieldset>
                            <?php 
                                foreach($data as $row){
                            ?>
                            <div class="control-group">	
                                <label class="control-label" for="namaWisata">Username</label>
                                <div class="controls">
                                    <input type="text" class="span6" name="nm_wst" id="namaWisata" value="<?php echo $row->username; ?>" readonly>
                                </div>
                            </div>
                            <div class="control-group">	
                                <label class="control-label" for="aktivitas">Password</label>
                                <div class="controls">
                                <input type="text" class="span6" name="nm_wst" id="namaWisata" value="Hidden" readonly>
                                </div>
                            </div>
                            <div class="form-actions">
                            <button class="btn btn-success"><a href="<?= base_url('admin_dinas/index.php/Admin/update_profile/'); echo $row->id_admin; ?>">edit</a></button>
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


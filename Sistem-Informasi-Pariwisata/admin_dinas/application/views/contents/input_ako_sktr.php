<div class="main">
	<div class="main-inner">
	    <div class="container">
	        <div class="row">
	      	    <div class="span12">
                    <div class="widget ">
                        <div class="widget-header">
                            <i class="icon-shopping-cart"></i>
                            <h3>Input Akomodasi Disekitar Wilayah Wisata</h3>
                        </div> <!-- /widget-header -->
                        <div class="widget-content">
                        <form id="edit-profile" class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                            <fieldset>
                                <input type="hidden" name="id_area_dwt" value="">
                                <div class="control-group">	
                                    <label class="control-label" for="namaPasar">Nama Wisata</label>
                                    <div class="controls">
                                        <select  name="id_dwt" id="">
                                            <?php foreach ($data as $row) { ?>
                                            <option value="<?php echo $row->id_dwt  ?>"><?php echo $row->nm_wst ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">											
                                    <label class="control-label" for="radiobtns">Akomodasi</label>
                                    <div class="controls">
                                        <?php foreach ($data2 as $row) { 
                                            echo " <label class='checkbox inline'>";
                                            echo "<input type='checkbox' name='akomodasi[]' value=".$row->id_ako."> ".$row->nm_ako."";
                                            echo "</label>";
                                            echo "<br>";
                                         } ?>
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


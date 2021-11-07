<main role="main">

    <div class="container ">
        <?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
        $numOfCols = 3;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        foreach ($events->result_array() as $row){
          if($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php } 
            $rowCount++; ?>  
        <div class="col-md pt-4">
            <div class="card bg-info text-white mb-4 ">
                <img src="<?php echo base_url('upload/events/')?><?php echo $row['foto']; ?>" style="width: 200; height: 200px">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $row['nm_eve']?>;</h5>
                    <p class="card-text text-justify"><?php echo $row['deskripsi']?>;</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a href="<?= base_url('beranda/detail_eve/'); echo $row['id_eve']; ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>  
        <?php
        if($rowCount % $numOfCols == 0) { ?> </div> <?php } } ?>


    </div>




</main>
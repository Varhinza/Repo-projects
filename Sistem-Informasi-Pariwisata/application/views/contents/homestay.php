<main role="main">
    <section class="homestay" id="atas">  
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Akomodasi Homestay</h1>
            <p class="lead">Untuk menjelajah kota magetan ini membutuhkan waktu yang tidak sebentar. hingga Menginaplah di penginapan yang khas classic , aman, dan nyaman di daerah magetan ini</p>
        </div>
    </div>
</section>

<div class="container">
    <?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
    $numOfCols = 3;
    $rowCount = 0;
    $bootstrapColWidth = 12 / $numOfCols;
    foreach ($homestay->result_array() as $row){
      if($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php } 
        $rowCount++; ?>  
    <div class="col-md pt-4">
        <div class="card bg-info text-white mb-4 ">
            <img src="<?php echo base_url()?>assets2/gambar/<?php echo $row['foto']; ?>" style="width: 200; height: 200px">
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $row['nm_ako']?></h5>
                <p class="card-text text-justify"><?php echo $row['lokasi']?></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>  
    <?php
    if($rowCount % $numOfCols == 0) { ?> </div> <?php } } ?>


</div>




</main>
<main role="main">

	<section class="hotel" id="atas">  
		<div class="jumbotron jumbotron-fluid">
			<div class="container ">
				<h1 class="display-4">Daftar Wisata</h1>
				<p class="lead">Untuk menjelajah kota magetan ini membutuhkan waktu yang tidak sebentar. hingga Menginaplah di penginapan yang khas classic , aman, dan nyaman di daerah magetan ini</p>
			</div>
		</div>
	</section>


	<div class="container ">
		<?php
        $numOfCols = 3;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        foreach ($wisata->result_array() as $row){
          if($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php } 
            $rowCount++; ?>  
		<div class="col-md pt-4">
            <div class="card bg-info text-white mb-4 ">
                <img src="<?php echo base_url()?>upload/wisata/<?php echo $row['foto']; ?>" style="width: 100%; height: 200px">
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $row['nm_wst']?></h5>
                    <p class="card-text text-justify"><?php echo $row['lokasi']?></p>
                    <p class="card-text"><small class="text-muted">Diperbarui 3 menit lalu</small></p>
                    <a href="<?= base_url('/wisata/detail_wisata/'); echo $row['id_dwt']; ?>" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>  
		<?php
        if($rowCount % $numOfCols == 0) { ?> </div> <?php } } ?>

	</div>




</main>
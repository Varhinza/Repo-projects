<main role="main">
<?php

    foreach ($detail->result_array() as $row){

    	?> 
	<div class="jumbotron jumbotron-fluid">
        <div class="container pr-5 ml-5">
            <h1 class="display-4"><?php echo $row['nm_pas']?></h1>
            <p class="lead">Untuk menjelajah kota magetan ini membutuhkan waktu yang tidak sebentar. hingga Menginaplah di penginapan yang khas classic , aman, dan nyaman di daerah magetan ini</p>
        </div>
    </div>
	
	<div class="row justify-content-center">
		<div class="col-md-8 " >
			<img src="<?php echo base_url('/upload/akmodasi/'); echo $row['foto']; ?>"  class="card-img-top">
			<h4 class="mt-4 mb-4 "><?php echo $row['deskripsi']?></h4>
			<div class="btn-group" role="group" aria-label="Basic example">
				<a href="<?php echo $row['map']?>" class="btn btn-primary  mr-2" target="_blank">Lokasi</a>
			</div>	
			<div class="btn-group" role="group" aria-label="Basic example">
				<a href="<?php echo base_url('akomodasi/list_pasar'); ?>" class="btn btn-primary text-right">Back</a>
			</div>
		</div>
		<?php }?>
		<div class="col-md-3">
			<div class="card mt-4" >
				<ul class="list-group list-group-flush">
					<p class="text-center mt-2">Wisata</p>
					<?php foreach ($data as $row){ ?> 
					<a href="<?= base_url('/wisata/detail_wisata/'); echo $row['id_dwt']; ?>" class="list-group-item"><?= $row['nm_wst'] ?></a>
					<?php } ?>
				</ul>
			</div>

			<div class="card mt-4" >
				<ul class="list-group list-group-flush">
					<p class="text-center mt-2">Hotel</p>
					<?php foreach ($data2 as $row){  ?> 
					<a href="<?php echo base_url('akomodasi/detail_hotel/'); echo $row['id_ako'] ?>" class="list-group-item"><?= $row['nm_ako'] ?></a>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>


	</main>
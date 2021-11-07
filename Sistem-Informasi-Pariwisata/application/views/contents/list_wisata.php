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
    <div class="row">
		<?php foreach ($wisata->result_array() as $row){ ?> 
            <div class="col-sm-4 mb-5">
                <div class="card" style="width: 21rem;">
                    <img src="<?php echo base_url()?>upload/wisata/<?php echo $row['foto']; ?>" style="height: 200px">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $row['nm_wst']?></h5>
                        <p class="card-text text-justify"><?php echo $row['lokasi']?></p>
                        <a href="<?= base_url('/wisata/detail_wisata/'); echo $row['id_dwt']; ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>  
        <?php } ?>
	</div>




</main>
<main role="main">
    <section class="hotel" id="atas">  
		<div class="jumbotron jumbotron-fluid">
			<div class="container ">
				<h1 class="display-4">Daftar Acara</h1>
				<p class="lead">Untuk menjelajah kota magetan ini membutuhkan waktu yang tidak sebentar. hingga Menginaplah di penginapan yang khas classic , aman, dan nyaman di daerah magetan ini</p>
			</div>
		</div>
	</section>

    <div class="container ">
    <div class="row">
        <?php  foreach ($events->result_array() as $row){ ?>
            
                <div class="col-sm-4 mb-5">
                    <div class="card" style="width: 21rem;">
                        <img src="<?php echo base_url('upload/events/')?><?php echo $row['foto']; ?>" class="card-img-top" alt="..." style="height: 200px; ">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nm_eve']?></h5>
                            <p class="card-text text-justify"><?php echo $row['lokasi']?></p>
                            <a href="<?= base_url('beranda/detail_eve/'); echo $row['id_eve']; ?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>  
                </div>
              <?php }  ?>


    </div>

</main>
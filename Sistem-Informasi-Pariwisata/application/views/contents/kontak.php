<main role="main">

	<div class="jumbotron jumbotron-fluid">
			<div class="container pr-5 ml-5 ">
			<h1 class="display-4">Kontak</h1>
		</div>
	</div>

	
	<div class="row justify-content-center">
		<div class="col-md-8 " >
			<img src="<?php echo base_url();?>/assets2/gambar/berita02.jpg"  class="card-img-top">
			<h4 class="mt-4 mb-4 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

			</h4>
		</div>

		<<div class="col-md-3">
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
					<?php foreach ($data2 as $row){ ?> 
					<a href="<?php echo base_url('akomodasi/detail_hotel/'); echo $row['id_ako'] ?>" class="list-group-item"><?= $row['nm_ako'] ?></a>
					<?php } ?>
				</ul>
			</div>
		</div>






	</div>

</div>

</main>
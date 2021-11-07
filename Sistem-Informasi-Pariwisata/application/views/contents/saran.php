<main role="main">

	<div class="jumbotron jumbotron-fluid">
		<div class="container pr-5 ml-5 ">
			<h1 class="display-4">Saran</h1>
		</div>
	</div>

	<?= $this->session->flashdata('success') ?>
	<div class="row justify-content-center">
		<div class="col-md-8 " >
			<img src="<?php echo base_url();?>/assets2/gambar/berita02.jpg"  class="card-img-top">
			<h4 class="mt-4 mb-4 ">	Saran</h4>
			<form action="" method="post"> 
				<div class="form-row">
					<input type="hidden" name="id" value="0">
					<div class="form-group col-md-6">
					<label for="inputNama">Nama Lengkap</label>
					<input type="text" name="nama" class="form-control" id="inputNama" placeholder="Nama">
					</div>
					<div class="form-group col-md-6">
					<label for="inputEmail">Email</label>
					<input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Saran</label>
					<textarea name="saran" class="form-control" id="inputSaran" cols="30" rows="10" placeholder="Saran"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Kirimkan</button>
			</form>			
		</div>
		
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
					<?php foreach ($data2 as $row){ ?> 
					<a href="<?php echo base_url('akomodasi/detail_hotel/'); echo $row['id_ako'] ?>" class="list-group-item"><?= $row['nm_ako'] ?></a>
					<?php } ?>
				</ul>
			</div>
		</div>






	</div>

</div>

</main>

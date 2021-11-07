<main role="main">

    <section class="hotel" id="atas">  
        <div class="jumbotron jumbotron-fluid">
          <div class="container ">
            <?php foreach ($data2->result_array() as $key) {  ?>
            <h1 class="display-4">Akomodasi <?php echo $key['jns_ako'] ?> </h1>
            <?php } ?>
            <p class="lead">Untuk menjelajah kota magetan ini membutuhkan waktu yang tidak sebentar. hingga Menginaplah di penginapan yang khas classic , aman, dan nyaman di daerah magetan ini</p>
            </div>
        </div>
    </section>


    <div class="container ">
        <div class="row">
            <?php foreach ($data->result_array() as $row){ ?> 
                <div class="col-sm-4 mb-5">
                    <div class="card" style="width: 21rem;">
                        <img src="<?php echo base_url()?>upload/akomodasi/<?php echo $row['foto']; ?>" class="card-img-top" alt="..." style="height: 200px; ">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $row['nm_ako']?>;</h5>
                            <p class="card-text text-justify"><?php echo $row['lokasi']?></p>
                            <p class="card-text text-justify"><?php echo $row['kontak']?>;</p>
                            <a href="<?php echo base_url('akomodasi/detail_ako/'); echo $row['id_ako'] ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php  } ?>
            </div>  

        </div>
    </div>




</main>
<script src="<?= base_url('assets2/js/tiny-slider.helper.ie8.js') ?>"></script>
<script src="<?= base_url('assets2/js/tiny-slider.js') ?>"></script>
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container" >
      <h1 class="text-center">Pariwisata Magetan</h1>
    </div>
  </div>


  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="z-index: 0">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="<?php echo base_url();?>assets2/gambar/04Sarangan.JPG" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>WISATA MAGETAN </h1>
            <p>Long Weekend, 400an Pendaki Naik Ke Puncak Lawu Dari Cemoro Sewu
            </p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Detail</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="<?php echo base_url();?>assets2/gambar/02Mojosemi.JPG" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>SPOT FOTO</h1>
            <p>3 Spot foto paling keren di hutan pinus magetan</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Detail</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="<?php echo base_url();?>assets2/gambar/03AyamBakar.JPG" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>KULINER</h1>
            <p>Kuliner Wajib Jika Kamu Liburan ke Kabupaten Magetan</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Detail</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <hr style="border-color: black;"> 

  <div id="floatDiv" class="child_div">
        <button class="tombol">x</button>
        <video id="vid" width="320" height="240" controls>
            <source src="" type="video/webm">
          Your browser does not support the video tag.
          </video>
    </div>
    <div id="myModal" class="modal">
        <span class="closed">&times;</span>
        <!-- <img class="modal-content" id="img01"> -->
        <video class="modal-content" id="video01"  controls> 
            <source src="" type="video/webm">
            Your browser does not support the video tag.     
        </video> 
        <div id="caption"></div>
    </div>

  <div class="mouseDrag2_wrapper">
    <h2 style="text-align: center; padding-bottom: 1rem;">TOP WISATA MAGETAN</h2>
    <div class="mouseDrag2" id="mouseDrag2">
     <?php foreach ($wisata->result_array() as $row){?> 
       <div class="item" style="padding: 5px ; margin-right:10px; margin-left:10px" >
         <div style="text-align: center">
          <img style="border-radius: 10px; height: 250px; width: 300px " src="<?php echo base_url()?>upload/wisata/<?php echo $row['foto']; ?>" >
        </div>
        <p>
          <b><h4 class="card-title text-center"><?php echo $row['nm_wst']?></h4></b>
          <h5 class="card-title text-center"><?php echo $row['lokasi']?></h5>
    
         <!--  <?php $kalimat = $row['deskripsi'];
          $text=substr($kalimat,0,500);?>
          <p class="card-text text-justify"><?php echo $text?></p> -->
          <div style="text-align: center">
            <a  style="width: 50%; "href="<?= base_url('/wisata/detail_wisata/'); echo $row['id_dwt']; ?>" class="btn btn-primary">Selengkapnya</a>

          </div>
        </div>

        <?php } ?>php

      </div>
    </div>
    <hr style="border-color: black;">
    
    </div>
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Acara
          </h3>

          <div class="blog-post">
            <div class="row mb-2">
              <?php  foreach ($events->result_array() as $row){ ?>
              <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow" style="height: 160px;">
                <img class="card-img-left flex-auto d-none d-md-block" style="height: 160px; width: 120px;" src="<?php echo base_url('upload/events/')?><?php echo $row['foto']; ?>">
                  <div class="card-body d-flex flex-column align-items-start" style="padding: 0.5rem;">
                    <h5 class="mb-0">
                      <a class="text-dark"><?php echo $row['nm_eve']?></a>
                    </h5>
                    <div class="mb-1 text-muted"><?php $input= $row['date']; $date=date("Y-M-d",strtotime($input)); $date = explode('-', $date); echo $date[2]." "; echo $date[1]." "; echo $date[0]?></div>
                    <p class="card-text mb-auto"><?php echo $row['lokasi']?></p>
                    <a href="<?= base_url('beranda/detail_eve/'); echo $row['id_eve']; ?>">Lanjut Membaca</a>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Tentang</h4>
            <p class="mb-0">Magetan mempunyai topografi sebagian besar tipe wilayah pegunungan. Terdapat Gunung Lawu (3.265 m dpl) di bagian barat Kabupaten Magetan, yakni perbatasan dengan Jawa Tengah. Naik ke pegunungan ini terdapat Telaga Sarangan (1000 m dpl) yang menjadi ikon wisata kabupaten Magetan dan berada di jalur wisata Magetan-Sarangan-Tawangmangu-Karanganyar. Bila membicarakan Kabupaten Magetan tidak dapat dipisahkan dari Gunung Lawu dan Telaga Sarangan.</p>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->
    </main><!-- /.container -->

  </main>
  <script src="<?= base_url('assets2/js/animation-scroll-video.js') ?>"></script>
 

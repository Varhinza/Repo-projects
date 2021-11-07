  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="z-index: 1">
      <a class="navbar-brand" href="<?php echo base_url();?>beranda"><img style="height: 32px; width: 32px;" src="<?php echo base_url();?>assets2/gambar/Logo_Kabupaten_Magetan.png" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>beranda">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="<?php echo base_url();?>profil/visimisi">Visi dan Misi</a>
                  <a class="dropdown-item" href="<?php echo base_url();?>profil/profil_dinas">Profil Dinas</a>
                  <a class="dropdown-item" href="<?php echo base_url();?>profil/kontak">Kontak</a>
                </div>
          </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wisata Magetan</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="<?= base_url('wisata/list_wisata/') ?>">Wisata Populer</a>
              <a class="dropdown-item" href="<?= base_url('wisata/list_wisata/') ?>">Wisata Terbaik</a>
              <a class="dropdown-item" href="<?= base_url('wisata/list_wisata/') ?>">Rekomendasi</a>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url();?>beranda/events">Acara<span class="sr-only"></span></a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url();?>akomodasi/list_akomodasi">Akomodasi <span class="sr-only"></span></a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url();?>Saran">Saran <span class="sr-only"></span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 blog-pagination">
            <a onclick="doGTranslate('en|id');return false;" title="Indonesian" class="btn btn-outline-primary" href="#">Indonesia</a>
            <a onclick="doGTranslate('en|en');return false;" title="English" class="btn btn-outline-primary" href="#">English</a>
        </form>
      </div>
    </nav>
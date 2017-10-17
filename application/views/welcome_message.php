<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Web Kampung Peninggaran">
    <meta name="author" content="Peninggaran Timur RT 09">
    <meta name="robots" content="index">
    <meta property="og:site_name" content="Peninggaran" />
    <meta property="og:title" content="Web Kampung Peninggaran" />
<meta property="og:type" content="website" />
    <meta property="og:url" content="https://peninggaran.com/" />
	<title>Peninggaran</title>	
	
    <link rel="icon" href="">
	
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
    <!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- GoogleAnalytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-77344648-7', 'auto');
		ga('send', 'pageview');
	</script>
	
	<style>
	    
nav ul a,
nav .brand-logo {
  color: #444;
}

p {
  line-height: 2rem;
}

.button-collapse {
  color: #26a69a;
}

.parallax-container {
  min-height: 380px;
  line-height: 0;
  height: auto;
  color: rgba(255,255,255,.9);
}
  .parallax-container .section {
    width: 100%;
  }

@media only screen and (max-width : 992px) {
  .parallax-container .section {
    position: absolute;
    top: 40%;
  }
  #index-banner .section {
    top: 10%;
  }
}

@media only screen and (max-width : 600px) {
  #index-banner .section {
    top: 0;
  }
}

.icon-block {
  padding: 0 15px;
}
.icon-block .material-icons {
  font-size: inherit;
}

footer.page-footer {
  margin: 0;
}
	</style>

  </head>
  <body>
   <nav class="white" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Peninggaran</a>
      
       <ul id="slide-out" class="side-nav">
      <li><a href="<?=base_url();?>">Home</a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Profile<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">Visi & Misi</a></li>
                <li><a href="#!">Struktur Organisasi</a></li>
              </ul>
            </div>
          </li>
		  <li>
            <a class="collapsible-header">Informasi<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">Acara/Event</a></li>
                <li><a href="#!">News</a></li>
                <li><a href="#!">Anggaran/Kas</a></li>
                <li><a href="#!">Statistik</a></li>
              </ul>
            </div>
          </li>
		  
        </ul>
      </li>
    </ul>
    <ul class="right hide-on-med-and-down">
      <li><a href="<?=base_url();?>">Home</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="profile">Profile<i class="material-icons right">arrow_drop_down</i></a></li>
	  <li><a class="dropdown-button" href="#!" data-activates="informasi">Informasi<i class="material-icons right">arrow_drop_down</i></a></li>
      <ul id='profile' class='dropdown-content'>
        <li><a href="#!">Visi & Misi</a></li>
        <li><a href="#!">Struktur Organisasi</a></li>
      </ul>
	  <ul id='informasi' class='dropdown-content'>
        <li><a href="#!">Agenda</a></li>
        <li><a href="#!">Pengumuman</a></li>
        <li><a href="#!">Anggaran/Kas</a></li>
        <li><a href="#!">Statistik Warga</a></li>
      </ul>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  
   <div class="container">
    <div class="section">
	
	
      <div class="row">
	  
        <div class="col s12 m12">
		
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              
			  <div class="row">
			  
			  <div class="col s12 m6">
			  <div class="card horizontal">
				  <div class="card-image">
					<img src="pp.jpg">
				  </div>
				  <div class="card-stacked">
					<div class="card-content">
						<p class="black-text">"text text text text text text text text text text" - Agus Susanto (Ketua RT 09 RW 009)</p>
					</div>
					<div class="card-action">
					  <a href="https://api.whatsapp.com/send?phone=6285775254325&text=Halo"><i class="fa fa-whatsapp" aria-hidden="true"></i> 0857-7525-4325</a>
					</div>
				  </div>
				</div>
			  </div>
			  
			  <div class="col s12 m6">
				<h4 class="header center orange-text">Selamat datang di Peninggaran!</h4>
					<div class="row center">
						<h5 class="header col s12 light">Sebuah kampung yang ikut hadir dalam perkembangan di era digital</h5>
					</div>
			  </div>
			  
			  </div>
			  
            </div>
          </div>
		  
        </div>
		
      </div>

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">description</i></h2>
            <h5 class="center">Mengakhiri Era Kertas dengan Transformasi Digital</h5>

            <p class="light">Adopsi transformasi digital semakin banyak dilakukan oleh berbagai institusi, salah satunya digitalisasi terhadap dokumen. Kertas memang sudah semakin ditinggalkan seiring adaptasi atas perkembangan teknologi. Pengguna lebih memilih menggunakan dokumen digital  karena berbagai kemudahan yang diberikan. Dokumen yang didigitalisasi dapat diakses lebih cepat dan dapat dikolaborasikan dengan dokumen lain terlepas dari lokasi dan waktu. Sementara ketergantungan terhadap proses berbasis kertas membuat pekerjaan menjadi tidak efisien, menghambat produktivitas, dan meningkatkan biaya. Digitalisasi banyak dilakukan pada area umum seperti catatan-catatan manajemen, proses klaim, dan pembayaran.</p>
          </div>
        </div>
      </div>
	  
	  <div class="row">
	  <div class="col s12 m12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">cached</i></h2>
            <h5 class="center">Otomatisasi</h5>

            <p class="light">Otomatisasi adalah keunggulan turunan yang diperoleh dari digitalisasi. Dari otomatisasi inilah alur kerja dapat dipangkas sehingga efisiensi meningkat.</p>
          </div>
        </div>
	  </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col m4 s12">
          <h5 class="white-text">Kontak</h5>
		  <p>
         <i class="material-icons">location_on</i> Jl. Peninggaran Raya, Kebayoran Lama Utara, Jakarta Selatan 12240<br>
		 <i class="material-icons">email</i> info@peninggaran.com<br>
		 <i class="material-icons">phone</i> 0857-7525-4325
</p>
        </div>
        <div class="col m4 s12">
          <h5 class="white-text">Statistik</h5>
          <ul>
            <li><a class="white-text" href="#!">Kepala Keluarga: 999</a></li>
            <li><a class="white-text" href="#!">Jumlah Rumah: 999</a></li>
            <li><a class="white-text" href="#!">Meninggal Dunia: 999</a></li>
            <li><a class="white-text" href="#!">Lainnya: 999</a></li>
          </ul>
        </div>
        <div class="col m4 s12">
          <h5 class="white-text">Informasi</h5>
          <ul>
            <li><a class="white-text" href="#!">Surat Pengantar Menikah</a></li>
            <li><a class="white-text" href="#!">Surat Keterangan Kematian</a></li>
            <li><a class="white-text" href="#!">Surat Keterangan Tidak Mampu</a></li>
            <li><a class="white-text" href="#!">Saran & Kritik</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Copyright &copy; 2017 Peninggaran &middot; Design & Maintained by <a class="orange-text text-lighten-3" href="http://januridp.com">JanuriDP</a>
      </div>
    </div>
  </footer>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script>
	(function($){
  $(function(){

    $('.button-collapse').sideNav();
	  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );

  }); // end of document ready
})(jQuery); // end of jQuery name space
	</script>
  </body>
</html>
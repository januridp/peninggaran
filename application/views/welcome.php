<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Kehadiran website ini diharapkan dapat memberikan informasi kepada seluruh warga RT.09 RW.009 yang ingin mengetahui agenda, transparansi keuangan, event, dan statistik Rukun Tetangga 09.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Selamat datang - Website Resmi Kampung Peninggaran</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="<?=base_url('/assets/css/styles.css');?>">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3>Kampung Peninggaran</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#overview" class="mdl-layout__tab is-active">Overview</a>
          <a href="#profile" class="mdl-layout__tab">Profile</a>
          <a href="#features" class="mdl-layout__tab">Informasi</a>
          <a href="#features" class="mdl-layout__tab">FAQ</a>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
              <img src="<?=base_url('assets/img/pp.jpg');?>">
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Sambutan Ketua RT 09</h4>
                Kehadiran website ini diharapkan dapat memberikan informasi kepada seluruh warga RT.09 RW.009 yang ingin mengetahui agenda, transparansi keuangan, event, dan statistik Rukun Tetangga 09.
              </div>
              <div class="mdl-card__actions">
               <a class="mdl-button" href="https://api.whatsapp.com/send?phone=6285775254325&text=Halo"><i class="material-icons">contact_phone</i> 0857-7525-4325</a>
              </div>
            </div>
			<?php
			$access = "user";
			if($access == "admin"){
			?>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
              <li class="mdl-menu__item">Edit</li>
              <li class="mdl-menu__item" disabled>-</li>
              <li class="mdl-menu__item">Delete</li>
            </ul>
			<?php }?>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <h4 class="mdl-cell mdl-cell--12-col">Yuk! Menjadi Masyarakat yang Digital. Kenapa?</h4>
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Mengakhiri Era Kertas dengan Transformasi Digital</h5>
                  Adopsi transformasi digital semakin banyak dilakukan oleh berbagai institusi, salah satunya digitalisasi terhadap dokumen. Kertas memang sudah semakin ditinggalkan seiring adaptasi atas perkembangan teknologi. Pengguna lebih memilih menggunakan dokumen digital  karena berbagai kemudahan yang diberikan. Dokumen yang didigitalisasi dapat diakses lebih cepat dan dapat dikolaborasikan dengan dokumen lain terlepas dari lokasi dan waktu. Sementara ketergantungan terhadap proses berbasis kertas membuat pekerjaan menjadi tidak efisien, menghambat produktivitas, dan meningkatkan biaya. Digitalisasi banyak dilakukan pada area umum seperti catatan-catatan manajemen, proses klaim, dan pembayaran.
                </div>
                
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Otomatisasi</h5>
                  Otomatisasi adalah keunggulan turunan yang diperoleh dari digitalisasi. Dari otomatisasi inilah alur kerja dapat dipangkas sehingga efisiensi meningkat.
                </div>
              
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Pemrosesan Transaksi</h5>
                  Contoh terdekat yang sering kita lihat adalah pada minimarket atau supermarket. Bayangkan jika penjual melakukan transaksi secara manual, mereka harus mencatat satu persatu barang. Sekarang sudah ada software yang dapat membaca barcode pada produk tersebut. Contoh lainnya pada perbankan adalah internet banking. Bagi anda yang sibuk dengan aktivitas sehari-hari, anda dapat melakukan pembayaran telepon, air, penerbangan, dan lain sebagainya dimanapun anda berada.
                </div>
				
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Pengawasan</h5>
                  Dengan contoh yang sama pada swalayan, pemilik bisa mengawasi penjualan dari rumah tanpa harus mengunjungi swalayan tersebut. Dengan menggunakan software pemilik dengan nyaman mengawasi barang masuk dan keluar dalam swalayan tersebut.
                </div>
				
                <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                  <h5>Penggalian Informasi</h5>
                  Masih dengan contoh yang sama, software pada swalayan dapat diambil informasi mengenai jumlah penjualan dan sebagainya semacam informasi terpusat.
                </div>
              </div>
            </div>
			<?php
			$access = "user";
			if($access == "admin"){
			?>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn2">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn2">
              <li class="mdl-menu__item">Edit</li>
              <li class="mdl-menu__item" disabled>-</li>
              <li class="mdl-menu__item">Delete</li>
            </ul>
			<?php } ?>
          </section>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Poin-poin penting mengapa sistem informasi harus ada</h4>
                <ol>
				<li>Mendorong institusi untuk sadar bahwa data dan informasi dapat dikelola dengan lebih baik.</li>
				<li>Menghindari kesalahan fatal akibat kelalaian sumber daya manusia, meskipun dengan sebuah sistem informasi tetap harus menggunakan paling tidaknya tidak sebanyak kegiatan manual.</li>
				<li>Kemudahan manajemen institusi baik dari segi waktu, kemudahan dan keefektifan.</li>
				<li>Institusi akan lebih peka dengan adanya kekeliruan, dan kelengkapan informasi data pada perjalanan bisnis institusi. Sehingga dengan latar belakang tersebut segala upaya perbaikan dan evaluasi bisa cepat segera dilakukan.</li>
				<li>Mengendalikan kinerja bisnis supaya lebih cepat dengan pendayagunaan waktu yang efektif dan maksimal.</li>
				</ol>
              </div>
              <div class="mdl-card__actions">
                <a href="http://s.id/5aG" class="mdl-button">Read more</a>
              </div>
            </div>
			<?php
			$access = "user";
			if($access == "admin"){
			?>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn3">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn3">
              <li class="mdl-menu__item">Edit</li>
              <li class="mdl-menu__item" disabled>-</li>
              <li class="mdl-menu__item">Delete</li>
            </ul>
			<?php } ?>
          </section>
          <section class="section--footer mdl-color--white mdl-grid">
            
            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <h5><span class="mdl-badge" data-badge="!">Lengkapi Data Anda</span></h5>
              Untuk melengkapi data yang terdapat pada Rukun Tetangga 09. Warga diharapkan mengisi biodata pada alamat berikut: <a href="<?=base_url('data-warga');?>"><?=base_url('data-warga');?></a>
            </div>
           
            <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
              <h5>Lorem ipsum dolor sit amet</h5>
              Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
            </div>
          </section>
        </div>
        <div class="mdl-layout__tab-panel" id="profile">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h4>Profile of Kampung Peninggaran</h4>
              Minim duis incididunt est cillum est ex occaecat consectetur. Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
              <ul class="toc">
                <h4>Visi</h4>
                Excepteur et pariatur officia veniam anim culpa cupidatat consequat ad velit culpa est non.
              </ul>
			  <ul class="toc">
                <h4>Misi</h4>
                Excepteur et pariatur officia veniam anim culpa cupidatat consequat ad velit culpa est non.
              </ul>

              <h5 id="lorem1">Struktur Organisasi</h5>
              Excepteur et pariatur officia veniam anim culpa cupidatat consequat ad velit culpa est non.
              <ul>
                <li>Nisi qui nisi duis commodo duis reprehenderit consequat velit aliquip.</li>
                <li>Dolor consectetur incididunt in ipsum laborum non et irure pariatur excepteur anim occaecat officia sint.</li>
                <li>Lorem labore proident officia excepteur do.</li>
              </ul>
              <p>
                Cupidatat labore nisi ut sunt voluptate quis sunt qui ad Lorem esse nisi. Ex esse velit ullamco incididunt occaecat dolore veniam tempor minim adipisicing amet. Consequat in exercitation est elit anim consequat cillum sint labore cillum. Aliquip mollit laboris ad labore anim.
              </p>
            </div>
          </section>
        </div>
        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
			  <h1 class="mdl-mega-footer--heading">Kontak</h1>
              <ul class="mdl-mega-footer--link-list">
				<li><i class="material-icons">location_on</i> Peninggaran, Keb. Lama Utara, Jakarta</li>
				<li><i class="material-icons">phone</i> Phone: +6285775254325</li>
				<li><i class="material-icons">email</i> Email: info@peninggaran.com</li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Profile</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Visi & Misi</a></li>
                <li><a href="#">Struktur Organisasi</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Informasi</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Pengumuman</a></li>
                <li><a href="#">Anggaran/Kas</a></li>
				<li><a href="#">Statistik</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">FAQ</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Questions</a></li>
                <li><a href="#">Answers</a></li>
              </ul>
            </div>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              &copy; <?=date('Y');?> Kampung Peninggaran
            </div>
            <ul class="mdl-mega-footer--link-list">
              <!--li><a href="https://JanuriDP.com">Developer</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li-->
			  <li>Prototype by <a href="https://genoffe.com/">Genoffe Studio</a></li>
			  <li>Developed by <a href="http://januridp.com/">JanuriDP</a></li>
			  <li>Powered by <a href="https://www.bikinhosting.com/">Bikin Hosting</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
	
    <!-- JS -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>

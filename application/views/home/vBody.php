<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
              Untuk melengkapi data yang terdapat pada Rukun Tetangga 09. Warga diharapkan mengisi biodata pada alamat berikut: <a href="<?=base_url('data');?>"><?=base_url('data');?></a>
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
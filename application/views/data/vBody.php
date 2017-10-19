<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
<div class="charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <!-- Square card -->
			<style>
.card-square.mdl-card {
  width: 320px;
  height: 320px;
  margin-right: 10px;
  margin-left: 10px;
  margin-bottom: 10px;
}
.card-square > .mdl-card__title {
  color: #fff;
  background: #46B6AC;
}
</style>

<div class="card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Buat Data</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Anda bisa membuat data penduduk sesuai KTP &amp; KK. Semua data yang telah dibuat akan diverifikasi oleh Ketua RT.09.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?=base_url('data/entry');?>">
      Klik untuk membuat data baru
    </a>
  </div>
</div>
            <!-- Square card -->

<div class="card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Liat Data</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Anda bisa melihat data warga RT.09. Semua data telah diverifikasi oleh Ketua RT.09.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?=base_url('data/view');?>">
      Klik untuk lihat data
    </a>
  </div>
</div>
            <!-- Square card -->

<div class="card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Perbarui Data</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Anda bisa memperbarui data warga RT.09. Semua data yang telah diperbarui akan diverifikasi oleh Ketua RT.09.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?=base_url('data/update');?>">
      Klik untuk perbarui data
    </a>
  </div>
</div>
            <!-- Square card -->

<div class="card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Hapus Data</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Anda bisa menghapus data warga RT.09. Semua data yang akan dihapus harus diverifikasi oleh Ketua RT.09.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?=base_url('data/delete');?>">
      Klik untuk hapus data
    </a>
  </div>
</div>
          </div>
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
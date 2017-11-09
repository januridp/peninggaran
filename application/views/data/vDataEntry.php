<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class = "mdl-layout__content">   
<div class = "mdl-grid">
               <div class = "mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet graybox">
                  Buat Data Terbaru Anda<br>
*Data Harus Lengkap Sesuai KTP & KK<br>
*Data Akan Ditinjau ulang oleh Ketua RT.09 Untuk Kebenarannya<br>
*Data Akan Muncul Bila Sudah Di Verifikasi/Ditinjau Ulang<br>
 <form method="post" action="<?=base_url('data/simpan');?>">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="nik" name="nik" required>
    <label class="mdl-textfield__label" for="nik">Tulis NIK Anda</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="nama" name="nama" required>
    <label class="mdl-textfield__label" for="nama">Tulis Nama Lengkap Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="tempatlahir" name="tempatlahir" required>
    <label class="mdl-textfield__label" for="tempatlahir">Tulis Tempat Lahir Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="datepicker" name="tanggallahir" required>
    <label class="mdl-textfield__label" for="tanggallahir">Pilih Tanggal Lahir Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield">
    <label class = "mdl-radio mdl-js-radio" for = "jeniskelamin1">
                  <input type = "radio" id = "jeniskelamin1" name = "jeniskelamin" 
                     class = "mdl-radio__button" value="L">
                  <span class = "mdl-radio__label">Laki-laki</span>
               </label>
  </div>
  <div class="mdl-textfield mdl-js-textfield">
   <label class = "mdl-radio mdl-js-radio" for = "jeniskelamin2">
                  <input type = "radio" id = "jeniskelamin2" name = "jeniskelamin" 
                     class = "mdl-radio__button" value="P">
                  <span class = "mdl-radio__label">Perempuan</span>
               </label>
               </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="alamat" name="alamat" required></textarea>
    <label class="mdl-textfield__label" for="alamat">Tulis Nama Jalan Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="nomorrumah" name="nomorrumah" required>
    <label class="mdl-textfield__label" for="nomorrumah">Tulis Nomor Rumah Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="rt" name="rt" required>
    <label class="mdl-textfield__label" for="rt">Tulis Nomor RT Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="rw" name="rw" required>
    <label class="mdl-textfield__label" for="rw">Tulis Nomor RW Anda</label>
  </div>
  <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
        <select class="mdl-selectfield__select" name="agama" id="agama">
          <option value="">Pilih Agama</option>
          <option value="Islam">Islam</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Khonghucu">Khonghucu</option>
          <option value="Protestan">Protestan</option>
          <option value="Katolik">Katolik</option>
        </select>
      </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<select class="mdl-selectfield__select" name="status" id="status">
          <option value="">Pilih Status</option>
          <option value="Kawin">Kawin</option>
          <option value="Belum Kawin">Belum Kawin</option>
        </select>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="pekerjaan" name="pekerjaan" required>
    <label class="mdl-textfield__label" for="pekerjaan">Tulis Pekerjaan Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="kewarganegaraan" name="kewarganegaraan" required>
    <label class="mdl-textfield__label" for="kewarganegaraan">Pilih Kewarganegaraan Anda</label>
  </div>
 <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
        <select class="mdl-selectfield__select" name="prop" id="prop" onchange="ajaxkota(this.value)">
          <option value="">Pilih Provinsi</option>
          <?php 
          foreach($provinsi as $data){
            echo '<option value="'.$data->id_prov.'">'.$data->nama.'</option>';
          }
          ?>
        </select>
      </div>
      <br>
      <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
        <select class="mdl-selectfield__select" name="kota" id="kota" onchange="ajaxkec(this.value)">
          <option value="">Pilih Kota</option>
        </select>
      </div>
      <br>
      <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
        <select class="mdl-selectfield__select" name="kec" id="kec" onchange="ajaxkel(this.value)">
          <option value="">Pilih Kecamatan</option>
        </select>
      </div>
      <br>
      <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
        <select class="mdl-selectfield__select"  name="kel" id="kel">
          <option value="">Pilih Kelurahan/Desa</option>
        </select>
      </div>
      <br>
      <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
        <select class="mdl-selectfield__select" name="kode" id="kode" required>
          <option value="">Harap Pilih</option>
          <option value="1">Saya Warga</option>
          <option value="0">Saya Pengurus</option>
        </select>
      </div>
      <br>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Kirim Data</button>
	<br><br>
</form>
				  </div>
</div>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


Buat Data Terbaru Anda<br>
*Data Harus Lengkap Sesuai KTP & KK<br>
*Data Akan Ditinjau ulang oleh Ketua RT.09 Untuk Kebenarannya<br>
*Data Akan Muncul Bila Sudah Di Verifikasi/Ditinjau Ulang<br>
 <form method="post" action="http://januridp.dev/peninggaran/test">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="nik" name="nik">
    <label class="mdl-textfield__label" for="nik">Tulis NIK Anda</label>
	</div>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="nama" name="nama">
    <label class="mdl-textfield__label" for="nama">Tulis Nama Lengkap Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="tempatlahir" name="tempatlahir">
    <label class="mdl-textfield__label" for="tempatlahir">Tulis Tempat Lahir Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="tanggallahir" name="tanggallahir">
    <label class="mdl-textfield__label" for="tanggallahir">Pilih Tanggal Lahir Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="jeniskelamin" name="jeniskelamin">
    <label class="mdl-textfield__label" for="jeniskelamin">Pilih Jenis Kelamin Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="alamat" name="alamat"></textarea>
    <label class="mdl-textfield__label" for="alamat">Tulis Nama Jalan Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="nomorrumah" name="nomorrumah">
    <label class="mdl-textfield__label" for="nomorrumah">Tulis Nomor Rumah Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="rt" name="rt">
    <label class="mdl-textfield__label" for="rt">Tulis Nomor RT Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="rw" name="rw">
    <label class="mdl-textfield__label" for="rw">Tulis Nomor RW Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="agama" name="agama">
    <label class="mdl-textfield__label" for="agama">Pilih Agama Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="status" name="status">
    <label class="mdl-textfield__label" for="status">Pilih Status Perkawinan Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="pekerjaan" name="pekerjaan">
    <label class="mdl-textfield__label" for="pekerjaan">Pilih Pekerjaan Anda</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" type="text" id="kewarganegaraan" name="kewarganegaraan">
    <label class="mdl-textfield__label" for="kewarganegaraan">Pilih Kewarganegaraan Anda</label>
  </div>
 
    <table>
      <tr>
      <td>Pilih Provinsi</td>
      <td>
        <select name="prop" id="prop" onchange="ajaxkota(this.value)">
          <option value="">Pilih Provinsi</option>
          <?php 
          foreach($provinsi as $data){
            echo '<option value="'.$data->id_prov.'">'.$data->nama.'</option>';
          }
          ?>
        <select>
      </td>
    </tr>
    <tr id='kab_box'>
      <td>Pilih Kota/Kab</td>
      <td>
        <select name="kota" id="kota" onchange="ajaxkec(this.value)">
          <option value="">Pilih Kota</option>
        </select>
      </td>
    </tr>
    <tr id='kec_box'>
      <td>Pilih Kec</td>
      <td>
        <select name="kec" id="kec" onchange="ajaxkel(this.value)">
          <option value="">Pilih Kecamatan</option>
        </select>
      </td>
    </tr>
    <tr id='kel_box'>
      <td>Pilih Kelurahan/Desa</td>
      <td>
        <select name="kel" id="kel">
          <option value="">Pilih Kelurahan/Desa</option>
        </select>
      </td>
    </tr>
    </table>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Kirim</button>
</form>
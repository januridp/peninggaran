<!doctype html>
<html>
  <head>
    <title>Data Daerah</title>
    <style>
      #map-canvas {width:100%;height:400px;border:solid #999 1px;}
      select {width:240px;}
      #kab_box,#kec_box,#kel_box,#lat_box,#lng_box{display:none;}
     </style>
    <script type="text/javascript" src="assets/js/ajax_daerah.js"></script>
  </head>
  <body>
  <form method="post" action="http://januridp.dev/peninggaran/test">
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
	<input type='submit' name='submit'/>
	</form>
  </body>
</html>
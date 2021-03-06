<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
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
              &copy; <?=date('Y');?> <a href="<?=base_url();?>">Kampung Peninggaran</a>
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/ajax_daerah.js"></script>
      <script>
      $( function() {
        $( "#datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: 'yy/mm/dd',
          yearRange: "1234:2018"
        });
      } );
	  
	$(document).ready(function() {
    $('#example').DataTable( {
		"processing": true,
        "serverSide": true,
        "ajax": "http://januridp.dev/peninggaran/data/get",
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
} );
      </script>
  </body>
</html>

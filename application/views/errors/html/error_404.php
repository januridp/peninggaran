<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Halaman tidak ditemukan :(</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

</head>
<body>
	<div id="container">
	    <div class="row center">
        <div class="col s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php echo $heading; ?></span>
              <p><?php echo $message; ?></p>
            </div>
            <div class="card-action">
              <a href="/home">Back</a>
            </div>
          </div>
        </div>
      </div>
		
	</div>
</body>
</html>
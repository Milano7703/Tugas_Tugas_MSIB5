<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <?php
     $nama = "Milano Sheva Wibowo";
	 $alamat = "Bekasi, Jawa Barat";
	 $kampus = "Universitas Lampung";
	 $umur = 20;

  ?>
  <body style="background-color: #2f3640; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding: 20px;">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1 style=" margin-right: 1100px; border-radius: 10px; color: #FFF3DA;">
					Profile! 
					<br><small>Milano Sheva Wibowo</small>
				</h1>
				<hr>
				<style>
					hr {
						border-color: rgb(118, 118, 118); 
						border-width: 3px;
						border-radius: 10px;
					}
				</style>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ul class="nav">
				<li class="nav-item" style="background-color: #ecf0f1; border-radius: 10px;">
					<a class="nav-link active" href="index.php">Profile</a>
				</li>
				&nbsp;
				<li class="nav-item" style="background-color: #ecf0f1; border-radius: 10px;">
					<a class="nav-link active" href="portofolio.php">Portofolio</a>
				</li>
				&nbsp;
				<li class="nav-item" style="background-color: #ecf0f1; border-radius: 10px;">
					<a class="nav-link active" href="contact.php">Contact</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<img alt="Bootstrap Image Preview" src="Milano.jpg" class="rounded" style="margin-top: 20px; width: 30%; margin-left: 500px;">
		</div>
		<div class="col-md-6" style="background-color: #ecf0f1; border-radius: 20px; margin-bottom: 250px;">
			<p style="margin-top: 20px; color: #2c3e50;">
			   <strong><?= $nama ?></strong>. Saya berasal dari kota <?= $alamat ?> . Saat ini saya berusia <?= $umur ?> Berkuliah di <?= $kampus ?>. Saya memiliki minat khusus dalam pengembangan web, Dan juga ketertarikan saya dalam dunia videografi.</small>
			</p>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>